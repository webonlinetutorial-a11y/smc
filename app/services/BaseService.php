<?php

abstract class BaseService
{
    protected array $errors = [];

    public function errors(): array
    {
        return $this->errors;
    }

    public function hasErrors(): bool
    {
        return $this->errors !== [];
    }

    protected function addError(string $message): void
    {
        $this->errors[] = $message;
    }
}
