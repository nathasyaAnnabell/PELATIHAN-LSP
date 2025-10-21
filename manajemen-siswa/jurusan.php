<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM jurusan");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="styles/jurusan.css">
</head>

<body>
    <header>
        <h1>Data Jurusan</h1>
        <nav>
            <ul class="navbar">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="siswa.php">Data Siswa</a></li>
                <li><a href="guru.php">Data Guru</a></li>
                <li><a href="jurusan.php">Jurusan</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2 style="text-align:center; margin-top:20px;">Daftar Jurusan</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Jurusan</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) :
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($data['no_jurusan']); ?></td>
                        <td><?= htmlspecialchars($data['nama']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; <?= date('Y'); ?> SMA Slytherin Bandung | Sistem Informasi Manajemen Siswa</p>
    </footer>
</body>

</html>