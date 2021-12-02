<?php
include "../koneksi.php";

$id = $_POST['id'];

$select = mysqli_query($koneksi, "SELECT status_pengerjaan FROM pelanggan_laundry WHERE id = '$id'");
while ($data = mysqli_fetch_array($select)) {
    $result = $data['status_pengerjaan'];
}

if ($result == 'Menunggu Pickup') {
    $query = mysqli_query($koneksi, "UPDATE pelanggan_laundry SET status_pengerjaan = 'Menunggu Pencucian'");
} else if ($result == 'Menunggu Pengantaran') {
    $query = mysqli_query($koneksi, "UPDATE pelanggan_laundry SET status_pengerjaan = 'Selesai'");
}

if ($query) {
    echo "Sukses Mengubah!";
} else {
    echo "Gagal!";
}
