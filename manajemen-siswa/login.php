<?php
session_start();
include 'koneksi.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' LIMIT 1");
    $admin = mysqli_fetch_assoc($result);

    if ($admin && $password === $admin['password']) {
        $_SESSION['admin'] = $admin['username'];
        header("Location: admin/dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Masuk</button>
        </form>
    </div>
</body>

</html>