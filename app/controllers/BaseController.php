<?php

class BaseController
{
    protected function render(string $view, array $data = [], string $layout = 'app'): void
    {
        renderView($view, $data, $layout);
    }

    protected function redirect(string $path, int $statusCode = 302): never
    {
        redirectTo($path, $statusCode);
    }

    protected function input(string $key, mixed $default = null): mixed
    {
        return $_POST[$key] ?? $_GET[$key] ?? $default;
    }
}
