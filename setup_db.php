<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

try {
    echo "Trying to connect and create table...<br>";
    
    $sql = "CREATE TABLE IF NOT EXISTS admins (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL
    )";
    
    $pdo->exec($sql);
    echo "✅ Success! 'admins' table is ready.";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>