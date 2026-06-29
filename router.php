<?php
/**
 * Local development router for PHP's built-in server, so clean (extensionless)
 * URLs behave the same locally as they do on the live Apache host.
 *
 * Run:  php -S localhost:8000 router.php   then open http://localhost:8000/
 *
 * Not used in production — Apache serves clean URLs via .htaccess instead.
 */
$uri  = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$root = __DIR__;

// Serve real existing files (CSS, JS, images, .php, robots.txt, ...) as-is.
if ($uri !== '' && file_exists($root . $uri) && !is_dir($root . $uri)) {
    return false;
}

// Home / directory -> index.php
if ($uri === '' || is_dir($root . $uri)) {
    require $root . '/index.php';
    return true;
}

// Clean URL (/about) -> about.php
$clean = ltrim($uri, '/');
if (preg_match('#^[A-Za-z0-9_/-]+$#', $clean) && is_file($root . '/' . $clean . '.php')) {
    require $root . '/' . $clean . '.php';
    return true;
}

http_response_code(404);
echo 'Not found';
return true;
