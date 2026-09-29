<?php
$nama = "Qolinta Naflah Marmora Chinsiani";
$peran = "Mahasiswa Sistem Informasi";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Saya - <?= $nama ?></title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 40px; background-color: #f4f4f4; }
        nav a { margin: 0 10px; text-decoration: none; color: #333; font-weight: bold; }
        .card { background: white; padding: 30px; border-radius: 8px; display: inline-block; margin-top: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav>
        <a href="index.php">Beranda</a> |
        <a href="program_studi.php">Program Studi</a> |
        <a href="berita.php">Berita</a> |
        <a href="kontak.php">Kontak</a>
    </nav>

    <!-- Konten Profil Pribadi -->
    <div class="card">
        <h1>Halo, Saya <?= $nama ?></h1>
        <h3><?= $peran ?></h3>
        <p>Selamat datang di website profil pribadi saya. Ini adalah halaman utama.</p>
    </div>

</body>
</html>