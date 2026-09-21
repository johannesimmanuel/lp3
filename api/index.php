<?php

// Ensure required temporary directories exist in Vercel serverless environment
$dirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Copy seeded SQLite database to writable /tmp directory if not already there or if new deploy
$sourceDb = __DIR__ . '/../database/database.sqlite';
$tmpDb = '/tmp/database.sqlite';
$stampFile = '/tmp/db_deployed_stamp';
$currentStamp = file_exists($sourceDb) ? (string) filemtime($sourceDb) : '0';

if (file_exists($sourceDb)) {
    $existingStamp = file_exists($stampFile) ? @file_get_contents($stampFile) : '';
    if (!file_exists($tmpDb) || $existingStamp !== $currentStamp) {
        @copy($sourceDb, $tmpDb);
        @file_put_contents($stampFile, $currentStamp);
    }
}

if (file_exists($tmpDb)) {
    putenv('DB_DATABASE=' . $tmpDb);
    $_ENV['DB_DATABASE'] = $tmpDb;
    $_SERVER['DB_DATABASE'] = $tmpDb;
}

// Force HTTPS environment for serverless proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

// Forward request to Laravel public/index.php
require __DIR__ . '/../public/index.php';
