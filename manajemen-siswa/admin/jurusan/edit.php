<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM jurusan WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_jurusan = $_POST['no_jurusan'];
    $nama = $_POST['nama'];

    mysqli_query($koneksi, "UPDATE jurusan SET no_jurusan='$no_jurusan', nama='$nama' WHERE id='$id'");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan</title>
    <link rel="stylesheet" href="../../styles/crud.css">
</head>

<body>
    <div class="form-container">
        <h1>Edit Data Jurusan</h1>
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