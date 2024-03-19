<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Produk</title>
    <header class="header">
        <h1>Jazoru: Simulasi Cicilan Paylater 6% Pada halaman Checkout E-commerce</h1>
    </header>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Pemesanan Produk</h2>
        <form method="post" action="process.php" class="mb-3">
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="1" min="1" required>
            </div>
            <div class="form-group">
                <label for="hargaBarang">Harga Barang:</label>
                <input type="number" class="form-control" id="hargaBarang" name="hargaBarang" required>
            </div>
            <div class="form-group">
                <label for="bungaCicilan">Tingkat Bunga Cicilan (% per tahun):</label>
                <input type="number" class="form-control" id="bungaCicilan" name="bungaCicilan" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="tenorCicilan">Tenor Cicilan (bulan):</label>
                <input type="number" class="form-control" id="tenorCicilan" name="tenorCicilan" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung Cicilan</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
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
