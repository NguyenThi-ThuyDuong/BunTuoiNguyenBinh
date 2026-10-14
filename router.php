<?php
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = urldecode($path);
$file = __DIR__ . $path;

if ($path !== '/' && file_exists($file)) {
    if (is_dir($file)) {
        if (file_exists($file . '/index.php')) {
            $_SERVER['SCRIPT_NAME'] = rtrim($path, '/') . '/index.php';
            require_once $file . '/index.php';
            return;
        }
    } else {
        // Return false to let PHP CLI server serve the static file directly
        return false;
    }
}

// Route all other requests (including clean URLs and dynamic thumbs) through index.php
$_SERVER['SCRIPT_NAME'] = '/index.php';
require_once __DIR__ . '/index.php';
