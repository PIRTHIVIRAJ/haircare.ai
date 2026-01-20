<?php
// Standalone Fix Script - Bypasses Laravel Boot
// Save this as public/fix.php

echo "<h1>Auto-Repair Tool (Step 2: Create Tables)</h1>";

// define paths relative to public/
$baseDir = __DIR__ . '/..';
$dbDir = $baseDir . '/database';
$dbFile = $dbDir . '/database.sqlite';

try {
    // 1. Connect to SQLite
    if (!file_exists($dbFile)) {
        touch($dbFile);
        chmod($dbFile, 0777); 
    }
    
    $pdo = new PDO("sqlite:" . $dbFile);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to database.<br>";

    // 2. Create Sessions Table (Critical for Boot)
    $sql = "
    CREATE TABLE IF NOT EXISTS sessions (
        id VARCHAR(255) PRIMARY KEY,
        user_id VARCHAR(255) NULL,
        ip_address VARCHAR(45) NULL,
        user_agent TEXT NULL,
        payload TEXT NOT NULL,
        last_activity INTEGER NOT NULL
    );
    CREATE INDEX IF NOT EXISTS sessions_user_id_index ON sessions (user_id);
    CREATE INDEX IF NOT EXISTS sessions_last_activity_index ON sessions (last_activity);
    ";
    
    $pdo->exec($sql);
    echo "<strong style='color:green'>SUCCESS: Created 'sessions' table.</strong><br>";

    // 3. Create Cache Table (Just in case)
    $sqlCache = "
    CREATE TABLE IF NOT EXISTS cache (
        key VARCHAR(255) PRIMARY KEY,
        value TEXT NOT NULL,
        expiration INTEGER NOT NULL
    );
    ";
    $pdo->exec($sqlCache);
    echo "<strong style='color:green'>SUCCESS: Created 'cache' table.</strong><br>";

} catch (PDOException $e) {
    echo "<strong style='color:red'>ERROR: " . $e->getMessage() . "</strong><br>";
    die();
}

echo "<hr>";
echo "<h3>Final Step:</h3>";
echo "1. <a href='install-fix'>Click here to finish installing (Run Migrations)</a><br>";
echo "2. Or just <a href='index.php'>Go to Homepage</a>";
?>
