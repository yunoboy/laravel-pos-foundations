<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require __DIR__ . '/../bootstrap/app.php';

    $app->handleRequest(
        \Illuminate\Http\Request::capture()
    );
} catch (\Throwable $error) {
    echo '<h2>Actual Laravel error:</h2>';
    echo '<pre>';
    echo htmlspecialchars($error->getMessage());
    echo "\n\n";
    echo htmlspecialchars($error->getFile());
    echo ':' . $error->getLine();
    echo '</pre>';
}