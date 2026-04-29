<?php
include 'db.php';
$msg = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    // পাসওয়ার্ডটি হ্যাশ (Hash) করে সেভ করা হচ্ছে নিরাপত্তার জন্য
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    
    try {
        $stmt->execute([$username, $password]);
        $msg = "<div class='alert alert-success'>Registration successful! <a href='login.php'>Login here</a></div>";
    } catch (PDOException $e) {
        $msg = "<div class='alert alert-danger'>Error: Username already exists!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Registration</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm p-4">
                    <h3 class="text-center mb-4">Register Admin</h3>
                    <?= $msg ?>
                    <form method="POST">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" name="register" class="btn btn-success w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>