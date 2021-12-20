<?php
include "../koneksi.php";

$id = $_POST['id'];
$antar = $_POST['antar'];

$select = mysqli_query($koneksi, "SELECT status_pengerjaan FROM pelanggan_laundry WHERE id = '$id'");
while ($data = mysqli_fetch_array($select)) {
    $result = $data['status_pengerjaan'];
}
if ($antar == 'Ya') {
    $query = mysqli_query($koneksi, "UPDATE pelanggan_laundry SET status_pengerjaan = 'Menunggu Pengantaran' WHERE id = '$id'");
} else if ($antar == "Tidak") {
    $query = mysqli_query($koneksi, "UPDATE pelanggan_laundry SET status_pengerjaan = 'Selesai' WHERE id = '$id'");
}


if ($query) {
    echo "Sukses Mengubah!";
} else {
    echo "Gagal!";
}
