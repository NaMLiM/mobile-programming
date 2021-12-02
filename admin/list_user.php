<?php
include "../koneksi.php";

$get_pelanggan_data = mysqli_query($koneksi, "SELECT id,username,nama FROM user WHERE NOT status = 'Admin'");

while ($data = mysqli_fetch_array($get_pelanggan_data)) {
    echo $data['id'] . "|" . $data['nama'] . "|" . $data['username'] . ",";
}
