<?php
// Mulai session untuk mengambil data yang disimpan dari form sebelumnya
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembelian Produk</title>
    <header class="header">
        <h1>Jazoru: Simulasi Cicilan Paylater 6% Pada halaman Checkout E-commerce</h1>
    </header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Cicilan Pembelian</h2>
        <?php if (isset($_SESSION['cicilanPerBulan'])): ?>
            <p>Jumlah Barang: <?= ($_SESSION['jumlah']) ?></p>
            <p>Harga Barang: Rp <?= number_format($_SESSION['hargaBarang'], 2, ',', '.') ?></p>
            <p>Tingkat Bunga Cicilan: <?= $_SESSION['bungaCicilan'] ?>% per tahun</p>
            <p>Tenor Cicilan: <?= $_SESSION['tenorCicilan'] ?> bulan</p>
            <p>Cicilan per Bulan: Rp <?= number_format($_SESSION['cicilanPerBulan'], 2, ',', '.') ?></p>
        <?php else: ?>
            <p>Data cicilan tidak ditemukan. Harap melakukan perhitungan terlebih dahulu.</p>
        <?php endif; ?>
    </div>
</body>

<footer class="footer">
   Pemrograman Website Sistem Informasi Kelas E: HTTP Method, Form, User Interface, Bootstrap<br>
<br>
Nama Dosen Pembimbing: Aryo Pinandito, Ph.D.<br>
<br>
Kelompok 5<br>
Zakaria Rafi – 225150407111020<br>
Jonathan Pande Parade Damanik – 225150407111012<br>
Rubens Willandro Taimenas - 225150407111030<br>
</footer>
</html>
