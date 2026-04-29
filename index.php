<?php
include 'db.php';

// ১. ডাটা সেভ করা
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "INSERT INTO users (name, email) VALUES (?, ?)";
    $pdo->prepare($sql)->execute([$name, $email]);
    header("Location: index.php");
}

// ২. ডাটা ডিলিট করা
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE id = ?";
    $pdo->prepare($sql)->execute([$id]);
    header("Location: index.php");
}

// ৩. সার্চ ফিচার (খুঁজে বের করা)
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM users WHERE name LIKE ? OR email LIKE ? ORDER BY id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["%$search%", "%$search%"]);
    $users = $stmt->fetchAll();
} else {
    $users = $pdo->query("SELECT * FROM users ORDER BY id DESC")->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced User Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f0f2f5; }
        .main-card { border: none; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); background: white; }
        .btn-add { background-color: #6c5ce7; border: none; color: white; }
        .btn-add:hover { background-color: #a29bfe; color: white; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card main-card p-4">
                <h2 class="text-center mb-4 text-primary">User Management System</h2>

                <form method="POST" class="row g-3 mb-4 bg-light p-3 rounded shadow-sm">
                    <div class="col-md-5">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-5">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="save" class="btn btn-add w-100">Add User</button>
                    </div>
                </form>

                <form method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name or email..." value="<?= $search ?>">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                        <?php if($search != ""): ?>
                            <a href="index.php" class="btn btn-outline-danger">Clear</a>
                        <?php endif; ?>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $index => $user): ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-info text-white">Edit</a>
                                    <a href="index.php?delete=<?= $user['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>