<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM guru WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nip = $_POST['NIP'];
    $nama = $_POST['nama'];
    $mapel = $_POST['mapel'];

    mysqli_query($koneksi, "UPDATE guru SET NIP='$nip', nama='$nama', mapel='$mapel' WHERE id='$id'");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
    <link rel="stylesheet" href="../../styles/crud.css">
</head>

<body>
    <div class="form-container">
        <h1>Edit Data Guru</h1>
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