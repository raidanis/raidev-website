<?php
/**
 * Router script for PHP built-in server
 * 
 * This file serves static files directly and routes everything else through Laravel's index.php
 */

// Get the requested path
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requested_file = __DIR__ . $request_uri;

// If the file exists and is not a directory, serve it directly
if (file_exists($requested_file) && is_file($requested_file)) {
    return false; // Let the built-in server handle the file
}

// Otherwise, route through Laravel's index.php
require_once __DIR__ . '/index.php';
