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
}
$_ENV['DB_DATABASE'] = $dbPath;
$_SERVER['DB_DATABASE'] = $dbPath;
putenv('DB_DATABASE=' . $dbPath);

// --- VERCEL CACHE PATH WORKAROUND ---
// Vercel builds in /vercel/path0 but runs in /var/task. 
// Cached paths become invalid. We force Laravel to use /tmp for caches.
$bootstrapCacheDir = '/tmp/storage/bootstrap/cache';
if (!is_dir($bootstrapCacheDir)) {
    mkdir($bootstrapCacheDir, 0777, true);
}
$_ENV['APP_CONFIG_CACHE'] = $bootstrapCacheDir . '/config.php';
$_ENV['APP_EVENTS_CACHE'] = $bootstrapCacheDir . '/events.php';
$_ENV['APP_PACKAGES_CACHE'] = $bootstrapCacheDir . '/packages.php';
$_ENV['APP_ROUTES_CACHE'] = $bootstrapCacheDir . '/routes-v7.php';
$_ENV['APP_SERVICES_CACHE'] = $bootstrapCacheDir . '/services.php';

// Bootstrap, and create the application...
$app = require_once __DIR__.'/../bootstrap/app.php';

// Override the storage path so Laravel doesn't crash on read-only system
$app->useStoragePath($storagePath);

// Handle the incoming request...
$app->handleRequest(Request::capture());

