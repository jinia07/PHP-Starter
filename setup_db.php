<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

try {
    echo "<h2>Database Setup starting...</h2>";

    $sql1 = "CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )";
    $pdo->exec($sql1);
    echo "✅ Admin table created or already exists.<br>";

    $sql2 = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL
    )";
    $pdo->exec($sql2);
    echo "✅ Users table created or already exists.<br>";
    
    echo "<h3>🚀 Setup Complete! Now go to <a href='register.php'>Register Page</a></h3>";
    
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>