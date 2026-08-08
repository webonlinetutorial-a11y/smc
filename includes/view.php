<?php

function renderView(string $view, array $data = [], string $layout = 'app'): void
{
    $viewPath = APP_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $view . '.php';
    $layoutPath = INCLUDES_PATH . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . $layout . '.php';

    if (!is_file($viewPath)) {
        throw new RuntimeException('View not found: ' . $view);
    }

    extract($data, EXTR_SKIP);

    ob_start();
    require $viewPath;
    $content = ob_get_clean();

    if ($layout === '' || !is_file($layoutPath)) {
        echo $content;
        return;
    }

    require $layoutPath;
}
