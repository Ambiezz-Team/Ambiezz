<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// --- VERCEL READ-ONLY FILESYSTEM WORKAROUND ---
// Create necessary storage directories in /tmp
$storagePath = '/tmp/storage';
$directories = [
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/testing',
    $storagePath . '/framework/views',
    $storagePath . '/logs'
];

foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Also handle SQLite database for Vercel
$dbPath = '/tmp/database.sqlite';
if (!file_exists($dbPath)) {
    touch($dbPath);
    // Optional: copy existing db if you want data to persist per-request
    // if (file_exists(__DIR__.'/../database/database.sqlite')) {
    //     copy(__DIR__.'/../database/database.sqlite', $dbPath);
    // }
}
$_ENV['DB_DATABASE'] = $dbPath;
$_SERVER['DB_DATABASE'] = $dbPath;
putenv('DB_DATABASE=' . $dbPath);

// Bootstrap, and create the application...
$app = require_once __DIR__.'/../bootstrap/app.php';

// Override the storage path so Laravel doesn't crash on read-only system
$app->useStoragePath($storagePath);

// Handle the incoming request...
$app->handleRequest(Request::capture());

