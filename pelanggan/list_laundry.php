<?php
include "../koneksi.php";
$pelanggan = $_POST['pelanggan'];

$get_laundry_data = mysqli_query($koneksi, "SELECT id,jumlah_pakaian,alamat,status_pengerjaan FROM pelanggan_laundry WHERE pelanggan = '$pelanggan'");

while ($data = mysqli_fetch_array($get_laundry_data)) {
    echo $data['id'] . "|" . $data['jumlah_pakaian'] . "|" . $data['alamat'] . "|" . $data['status_pengerjaan'] . ",";
}
