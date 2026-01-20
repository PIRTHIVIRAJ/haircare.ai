<?php
// Standalone Fix Script - Bypasses Laravel Boot
// Save this as public/fix.php

echo "<h1>Auto-Repair Tool</h1>";
echo "Starting...<br>";

// define paths relative to public/
$baseDir = __DIR__ . '/..';
$dbDir = $baseDir . '/database';
$dbFile = $dbDir . '/database.sqlite';
$storageDir = $baseDir . '/storage';

// 1. Create Database File
if (!file_exists($dbFile)) {
    echo "Database file not found. Creating... ";
    try {
        if (!is_dir($dbDir)) {
            mkdir($dbDir, 0755, true);
        }
        touch($dbFile);
        chmod($dbFile, 0777); // World writable for sqlite
        echo "<strong style='color:green'>SUCCESS: Created database.sqlite</strong><br>";
    } catch (Exception $e) {
        echo "<strong style='color:red'>FAILED: " . $e->getMessage() . "</strong><br>";
    }
} else {
    echo "Database file already exists.<br>";
}

// 2. Fix Permissions
echo "Fixing permissions... ";
$dirs = [
    $dbDir,
    $storageDir,
    $storageDir . '/logs',
    $storageDir . '/framework',
    $storageDir . '/framework/views',
    $storageDir . '/framework/sessions',
    $storageDir . '/framework/cache',
    $baseDir . '/bootstrap/cache'
];

foreach ($dirs as $dir) {
    if (file_exists($dir)) {
        @chmod($dir, 0775);
    }
}
// Specific permission for sqlite file
if (file_exists($dbFile)) {
    @chmod($dbFile, 0777);
}
echo "Done.<br>";

echo "<hr>";
echo "<h3>Next Steps:</h3>";
echo "1. <a href='index.php/install-fix'>Click here to Run Migrations (Application should boot now)</a><br>";
echo "2. If that works, <a href='index.php'>Go to Homepage</a>";
?>
