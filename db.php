<?php
$host = '127.0.0.1';
$db   = 'my_project';
$user = 'root';
$pass = 'admin123'; // তোর MySQL পাসওয়ার্ড যদি থাকে (যেমন admin123), তবে সেটা এখানে লিখবি

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection failed: " . $e->getMessage());
}
?>