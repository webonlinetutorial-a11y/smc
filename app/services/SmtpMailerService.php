<?php

class SmtpMailerService
{
    /** @var resource|null */
    private $connection = null;

    public function sendInquiryNotification(array $data): bool
    {
        if (!configValue('mail.enabled', false)) {
            return false;
        }

        $to = (string) configValue('mail.to_address', '');

        if ($to === '') {
            return false;
        }

        $subject = 'New website enquiry - ' . ($data['product_name'] ?: $data['visitor_name']);
        $body = $this->buildInquiryBody($data);

        try {
            $this->send($to, $subject, $body, (string) ($data['email'] ?? ''));
            return true;
        } catch (Throwable $exception) {
            error_log($exception);
            return false;
        }
    }

    private function send(string $to, string $subject, string $body, string $replyTo = ''): void
    {
        $host = (string) configValue('mail.host', '');
        $port = (int) configValue('mail.port', 587);
        $encryption = (string) configValue('mail.encryption', 'tls');
        $username = (string) configValue('mail.username', '');
        $password = (string) configValue('mail.password', '');
        $from = (string) configValue('mail.from_address', $username);
        $fromName = (string) configValue('mail.from_name', configValue('app.name', 'Nepack Website'));

        if ($host === '' || $from === '') {
            throw new RuntimeException('SMTP host and from address are required.');
        }

        $remote = $encryption === 'ssl' ? 'ssl://' . $host : $host;
        $this->connection = stream_socket_client($remote . ':' . $port, $errorCode, $errorMessage, 15);

        if (!is_resource($this->connection)) {
            throw new RuntimeException('SMTP connection failed: ' . $errorMessage . ' (' . $errorCode . ')');
        }

        stream_set_timeout($this->connection, 15);
        $this->expect([220]);
        $this->command('EHLO ' . ($_SERVER['SERVER_NAME'] ?? 'localhost'), [250]);

        if ($encryption === 'tls') {
            $this->command('STARTTLS', [220]);
            if (stream_socket_enable_crypto($this->connection, true, STREAM_CRYPTO_METHOD_TLS_CLIENT) !== true) {
                throw new RuntimeException('SMTP TLS negotiation failed.');
            }
            $this->command('EHLO ' . ($_SERVER['SERVER_NAME'] ?? 'localhost'), [250]);
        }

        if ($username !== '' && $password !== '') {
            $this->command('AUTH LOGIN', [334]);
            $this->command(base64_encode($username), [334]);
            $this->command(base64_encode($password), [235]);
        }

        $this->command('MAIL FROM:<' . $from . '>', [250]);
        $this->command('RCPT TO:<' . $to . '>', [250, 251]);
        $this->command('DATA', [354]);

        $headers = [
            'From: ' . $this->formatMailbox($from, $fromName),
            'To: ' . $to,
            'Subject: ' . $this->encodeHeader($subject),
            'MIME-Version: 1.0',
            'Content-Type: text/plain; charset=UTF-8',
        ];

        if (isValidEmail($replyTo)) {
            $headers[] = 'Reply-To: ' . $replyTo;
        }

        $payload = implode("\r\n", $headers) . "\r\n\r\n" . $this->dotStuff($body) . "\r\n.";
        $this->command($payload, [250]);
        $this->command('QUIT', [221]);
        fclose($this->connection);
        $this->connection = null;
    }

    private function buildInquiryBody(array $data): string
    {
        return implode("\n", array_filter([
            'New website enquiry',
            '',
            'Product: ' . ($data['product_name'] ?: 'General Enquiry'),
            'Name: ' . $data['visitor_name'],
            'Email: ' . $data['email'],
            'Phone: ' . trim(($data['country_code'] ?? '') . ' ' . ($data['phone'] ?? '')),
            'Location: ' . ($data['location'] ?? ''),
            'Source page: ' . ($data['source_page'] ?? ''),
            '',
            'Message:',
            $data['message'] ?? '',
        ], static fn (string $line): bool => $line !== ''));
    }

    private function command(string $command, array $expectedCodes): string
    {
        fwrite($this->connection, $command . "\r\n");
        return $this->expect($expectedCodes);
    }

    private function expect(array $expectedCodes): string
    {
        $response = '';

        while (($line = fgets($this->connection, 512)) !== false) {
            $response .= $line;

            if (isset($line[3]) && $line[3] === ' ') {
                break;
            }
        }

        $code = (int) substr($response, 0, 3);

        if (!in_array($code, $expectedCodes, true)) {
            throw new RuntimeException('Unexpected SMTP response: ' . trim($response));
        }

        return $response;
    }

    private function formatMailbox(string $email, string $name): string
    {
        return '"' . addcslashes($name, '"\\') . '" <' . $email . '>';
    }

    private function encodeHeader(string $value): string
    {
        return '=?UTF-8?B?' . base64_encode($value) . '?=';
    }

    private function dotStuff(string $body): string
    {
        $body = preg_replace('/^\./m', '..', str_replace(["\r\n", "\r"], "\n", $body)) ?? $body;

        return str_replace("\n", "\r\n", $body);
    }
}
