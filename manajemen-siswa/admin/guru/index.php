<?php
session_start();
include '../../koneksi.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../../login.php");
    exit;
}

$query = mysqli_query($koneksi, "SELECT * FROM guru");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Guru</title>
    <link rel="stylesheet" href="../../styles/data.css">
</head>

<body>
    <header>
        <h1>Kelola Data Guru</h1>
        <a href="../dashboard.php">← Kembali ke Dashboard</a>
    </header>

    <main>
        <div class="add-data">
            <a href="tambah.php" class="btn-tambah">+ Tambah Guru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($data['NIP']); ?></td>
                        <td><?= htmlspecialchars($data['nama']); ?></td>
                        <td><?= htmlspecialchars($data['mapel']); ?></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id']; ?>" class="btn-edit">Edit</a> |
                            <a href="hapus.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn-hapus">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <footer class="footer-default">
        <p>&copy; <?= date('Y'); ?> SMA Slytherin Bandung | Sistem Informasi Manajemen Siswa</p>
    </footer>
</body>

</html>