<?php
require __DIR__ . '/vendor/autoload.php';

try {
    echo "Testing Illuminate Foundation loading...\n";
    $class = 'Illuminate\Foundation\Application';
    if (class_exists($class)) {
        echo "✓ Class $class found\n";
        $app = new $class(dirname(__DIR__));
        echo "✓ Application instance created\n";
    } else {
        echo "✗ Class $class NOT found\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
