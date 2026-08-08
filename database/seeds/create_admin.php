<?php

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit('This script can only run from the command line.');
}

require_once dirname(__DIR__, 2) . '/includes/bootstrap.php';

$options = getopt('', [
    'name:',
    'email:',
    'username:',
    'password:',
]);

$name = sanitizeString($options['name'] ?? '');
$email = sanitizeEmail($options['email'] ?? '');
$username = sanitizeString($options['username'] ?? '');
$password = (string) ($options['password'] ?? '');

if (!isRequired($name) || !isValidEmail($email) || !isRequired($username) || !hasMinLength($password, 8)) {
    fwrite(STDERR, "Usage: php database/seeds/create_admin.php --name=\"Admin Name\" --email=\"admin@example.com\" --username=\"admin\" --password=\"strong-password\"\n");
    exit(1);
}

$database = databaseConnection();
$database->beginTransaction();

try {
    $roleStatement = $database->prepare(
        'INSERT INTO roles (name, description, status, display_order)
         VALUES (:name, :description, :status, :display_order)
         ON DUPLICATE KEY UPDATE status = VALUES(status), updated_at = NOW()'
    );

    $roleStatement->execute([
        'name' => 'super_admin',
        'description' => 'Primary website administrator.',
        'status' => 'active',
        'display_order' => 1,
    ]);

    $roleIdStatement = $database->prepare('SELECT id FROM roles WHERE name = :name LIMIT 1');
    $roleIdStatement->execute(['name' => 'super_admin']);
    $role = $roleIdStatement->fetch();

    if ($role === false) {
        throw new RuntimeException('Unable to create or load admin role.');
    }

    $userStatement = $database->prepare(
        'INSERT INTO users (role_id, name, email, username, password_hash, status)
         VALUES (:role_id, :name, :email, :username, :password_hash, :status)
         ON DUPLICATE KEY UPDATE
            role_id = VALUES(role_id),
            name = VALUES(name),
            password_hash = VALUES(password_hash),
            status = VALUES(status),
            updated_at = NOW()'
    );

    $userStatement->execute([
        'role_id' => (int) $role['id'],
        'name' => $name,
        'email' => $email,
        'username' => $username,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
        'status' => 'active',
    ]);

    $database->commit();
    echo "Admin user is ready: {$username}\n";
} catch (Throwable $exception) {
    $database->rollBack();
    fwrite(STDERR, $exception->getMessage() . "\n");
    exit(1);
}
