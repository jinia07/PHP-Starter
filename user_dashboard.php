<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Dashboard</title>
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <span class="navbar-brand">Welcome, <?= $_SESSION['admin_user'] ?>!</span>
            <a href="logout.php" class="btn btn-outline-danger">Logout</a>
        </div>
    </nav>

    <div class="container text-center py-5">
        <div class="card shadow p-5">
            <h1>Hello, User! 👋</h1>
            <p class="lead">You are now logged into your private dashboard.</p>
            <hr>
            <a href="index.php" class="btn btn-primary">Go to User List</a>
        </div>
    </div>
</body>
</html>