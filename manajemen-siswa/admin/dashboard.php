<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

$totalSiswa = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM siswa"));
$totalGuru = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM guru"));
$totalJurusan = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM jurusan"));
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="../styles/dash.css">
</head>

<body>
    <header>
        <h1>Dashboard Admin</h1>
        <nav class="navbar">
            <div class="logout">
                <a href="../logout.php" onclick="return confirm('Yakin ingin keluar?')">Logout</a>
            </div>
        </nav>
    </header>

    <main>
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['admin']); ?>!</h2>
        <p>Pilih data yang ingin dikelola di bawah ini:</p>

        <div class="dashboard-container">
            <div class="card">
                <h3>Data Siswa</h3>
                <p><?= $totalSiswa; ?> Siswa</p>
                <a href="siswa/index.php" class="btn">Kelola</a>
            </div>
            <div class="card">
                <h3>Data Guru</h3>
                <p><?= $totalGuru; ?> Guru</p>
                <a href="guru/index.php" class="btn">Kelola</a>
            </div>
            <div class="card">
                <h3>Jurusan</h3>
                <p><?= $totalJurusan; ?> Jurusan</p>
                <a href="jurusan/index.php" class="btn">Kelola</a>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?= date('Y'); ?> SMA Slytherin Bandung | Sistem Informasi Manajemen Siswa</p>
    </footer>
</body>

</html>