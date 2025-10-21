<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Manajemen Siswa</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header class="navbar">
        <div class="logo-area">
            <img src="assets/logo.jpg" alt="Logo Sekolah" class="logo">
            <span class="school-name">SMA Slytherin Bandung</span>
        </div>

        <nav class="nav-menu">
            <ul class="nav-links">
                <li><a href="index.php">Beranda</a></li>
                <li><a href="siswa.php">Data Siswa</a></li>
                <li><a href="guru.php">Data Guru</a></li>
                <li><a href="jurusan.php">Jurusan</a></li>
            </ul>

            <a href="login.php" class="btn-login">Login</a>
        </nav>

    </header>

    <main>
        <section class="hero">
            <img src="assets/siswa.jpg" alt="Foto Siswa" class="hero-left">
            <div class="hero-text">
                <h2>Sistem Informasi Manajemen Siswa</h2>
                <p>Kelola data siswa, guru, dan jurusan secara efisien dengan sistem informasi sekolah berbasis web.</p>
            </div>
        </section>

        <section class="menu-section">
            <div class="card">
                <h3><a href="siswa.php">Data Siswa</a></h3>
                <p>Lihat dan kelola data siswa secara terpusat.</p>
            </div>

            <div class="card">
                <h3><a href="guru.php">Data Guru</a></h3>
                <p>Informasi lengkap mengenai tenaga pengajar.</p>
            </div>

            <div class="card">
                <h3><a href="jurusan.php">Jurusan</a></h3>
                <p>Daftar jurusan yang tersedia di sekolah.</p>
            </div>
        </section>
    </main>

    <footer class="footer-default">
        <p>&copy; <?= date('Y'); ?> SMA Slytherin Bandung | Sistem Informasi Manajemen Siswa</p>
    </footer>
</body>

</html>