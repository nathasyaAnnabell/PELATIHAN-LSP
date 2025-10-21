<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../../styles/crud.css">
</head>

<body>
    <div class="form-container">
        <h1>Edit Data Siswa</h1>
        <form method="POST">
            <label>NIS:</label>
            <input type="text" name="nis" value="<?= $data['nis']; ?>" required>

            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $data['nama']; ?>" required>

            <label>Jurusan:</label>
            <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required>

            <label>Alamat:</label>
            <textarea name="alamat" required><?= $data['alamat']; ?></textarea>

            <button type="submit">Simpan Perubahan</button>
            <a href="index.php" class="btn-cancel">Batal</a>
        </form>
    </div>
</body>

</html>