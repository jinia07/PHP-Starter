<?php
include 'db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name = ?, email = ? WHERE id = ?";
    $pdo->prepare($sql)->execute([$name, $email, $id]);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit User</title>
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow p-4">
                    <h3 class="text-center mb-4">Edit User</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $user['name'] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $user['email'] ?>" required>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary w-100">Update User</button>
                        <a href="index.php" class="btn btn-link w-100 mt-2 text-decoration-none text-muted">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>