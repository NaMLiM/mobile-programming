<?php
include "../koneksi.php";

$id = $_POST['id'];

$query = mysqli_query($koneksi, "DELETE FROM pelanggan_laundry where id = '$id'");

if ($query) {
    echo "Sukses Hapus!";
} else {
    echo "Gagal!";
}
