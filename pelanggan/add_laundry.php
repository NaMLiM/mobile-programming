<?php
include "../koneksi.php";

$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];
$pelanggan = $_POST['pelanggan'];

$input = mysqli_query($koneksi, "INSERT INTO `pelanggan_laundry` (`id`, `jumlah_pakaian`, `alamat`, `pelanggan`, `status_pengerjaan`) VALUES (null, '$jumlah', '$alamat', '$pelanggan', 'Menunggu')");
if ($input) {
    echo "Order tersimpan!";
} else {
    echo "Gagal";
}
