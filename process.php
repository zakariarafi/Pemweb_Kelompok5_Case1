<?php
// Mulai session untuk mengambil data yang disimpan dari form sebelumnya
session_start();

// Cek jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $hargaBarang = isset($_POST['hargaBarang']) ? filter_input(INPUT_POST, 'hargaBarang', FILTER_VALIDATE_FLOAT) : 0;
    $bungaCicilan = isset($_POST['bungaCicilan']) ? filter_input(INPUT_POST, 'bungaCicilan', FILTER_VALIDATE_FLOAT) : 0;
    $tenorCicilan = isset($_POST['tenorCicilan']) ? filter_input(INPUT_POST, 'tenorCicilan', FILTER_VALIDATE_INT) : 0;
    $jumlahbarang = isset($_POST['jumlah']) ? filter_input(INPUT_POST, 'jumlah', FILTER_VALIDATE_INT) : 0;

    // Hitung bunga per bulan
    $bungaPerBulan = $bungaCicilan / 12 / 100; // Bunga dalam persentase per bulan

    // Hitung total cicilan per bulan
    $cicilanPerBulan = 0;
    if ($bungaPerBulan > 0) {
        // Rumus cicilan dengan bunga (annuity)
        $cicilanPerBulan = ($hargaBarang * $jumlahbarang) * ($bungaPerBulan / (1 - pow(1 + $bungaPerBulan, -$tenorCicilan)));
    } else {
        // Cicilan tanpa bunga
        $cicilanPerBulan = ($hargaBarang * $jumlahbarang) / $tenorCicilan;
    }

    // Simpan data ke session
    $_SESSION['jumlah'] = $jumlahbarang;
    $_SESSION['hargaBarang'] = $hargaBarang;
    $_SESSION['bungaCicilan'] = $bungaCicilan;
    $_SESSION['tenorCicilan'] = $tenorCicilan;
    $_SESSION['cicilanPerBulan'] = $cicilanPerBulan;

    // Arahkan ke halaman output
    header("Location: output.php");
    exit();
}
?>