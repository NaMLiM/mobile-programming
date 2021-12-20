<?php
include "../koneksi.php";

$get_laundry_data = mysqli_query($koneksi, "SELECT * from pelanggan_laundry");

while ($data = mysqli_fetch_array($get_laundry_data)) {
    echo $data['id'] . "|" . $data['jumlah_pakaian'] . "|" . $data['pelanggan'] . "|" . $data['alamat'] . "|" . $data['status_pengerjaan'] . ",";
}
