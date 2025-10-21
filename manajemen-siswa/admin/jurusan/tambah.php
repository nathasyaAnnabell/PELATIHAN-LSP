<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_jurusan = $_POST['no_jurusan'];
    $nama = $_POST['nama'];

    $query = "INSERT INTO jurusan (no_jurusan, nama) VALUES ('$no_jurusan', '$nama')";
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
    <title>Tambah Jurusan</title>
    <link rel="stylesheet" href="../../styles/crud.css">
</head>

<body>
    <div class="form-container">
        <h1>Tambah Jurusan</h1>
        <form method="POST">
            <label>No. Jurusan:</label>
            <input type="text" name="no_jurusan" placeholder="Masukkan nomer jurusan" required>

            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama jurusan" required>

            <button type="submit">Simpan</button>
            <a href="index.php" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>

</html>