<?php

// Prepare writable directories in /tmp for Vercel Serverless environment
$dirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Copy SQLite database to /tmp so it is accessible and writable in serverless environment
$sourceDb = __DIR__ . '/../database/database.sqlite';
$targetDb = '/tmp/database.sqlite';
$stampFile = '/tmp/db_deployed_stamp';

if (file_exists($sourceDb)) {
    $currentStamp = (string) filemtime($sourceDb);
    $existingStamp = file_exists($stampFile) ? @file_get_contents($stampFile) : '';

    if (!file_exists($targetDb) || $existingStamp !== $currentStamp) {
        @copy($sourceDb, $targetDb);
        @file_put_contents($stampFile, $currentStamp);
    }
} elseif (!file_exists($targetDb)) {
    @touch($targetDb);
}

// Forward to public/index.php
require __DIR__ . '/../public/index.php';
