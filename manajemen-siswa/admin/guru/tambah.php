<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['NIP'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    $query = "INSERT INTO guru (NIP, nama, mapel) VALUES ('$nip', '$nama', '$mapel')";
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
        <h1>Tambah Guru</h1>
        <form method="POST">
            <label>NIP:</label>
            <input type="text" name="NIP" placeholder="Masukkan NIP" required>

            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama guru" required>

            <label>Mapel:</label>
            <input type="text" name="mapel" placeholder="Masukkan mapel" required>

            <button type="submit">Simpan</button>
            <a href="index.php" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>

</html>