<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO siswa (nis, nama, jurusan, alamat) VALUES ('$nis', '$nama', '$jurusan', '$alamat')";
    mysqli_query($koneksi, $query);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="../../styles/crud.css">
</head>

<body>
    <div class="form-container">
        <h1>Tambah Siswa</h1>
        <form method="POST">
            <label>NIS:</label>
            <input type="text" name="nis" placeholder="Masukkan NIS" required>

            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama siswa" required>

            <label>Jurusan:</label>
            <input type="text" name="jurusan" placeholder="Masukkan jurusan" required>

            <label>Alamat:</label>
            <textarea name="alamat" placeholder="Masukkan alamat" required></textarea>

            <button type="submit">Simpan</button>
            <a href="index.php" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>

</html>