<?php
include "../koneksi.php";

$id = $_POST['id'];
$jumlah = $_POST['jumlah'];
$alamat = $_POST['alamat'];

$query = mysqli_query($koneksi, "UPDATE pelanggan_laundry SET jumlah = '$nama', alamat = '$alamat'");

if ($query) {
    echo "Sukses Edit!";
} else {
    echo "Gagal!";
}
