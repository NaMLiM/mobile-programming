<?php
include "../koneksi.php";
$pelanggan = $_POST['pelanggan'];

$get_laundry_data = mysqli_query($koneksi, "SELECT * from pelanggan_laundry INNER JOIN user on pelanggan_laundry.pelanggan = user.id");

while ($data = mysqli_fetch_array($get_laundry_data)) {
    echo $data['id'] . "|" . $data['nama'] . "|" . $data['jumlah_pakaian'] . "|" . $data['alamat'] . "|" . $data['status_pengerjaan'] . ",";
}
