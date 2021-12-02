<?php
include "../koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "UPDATE user SET nama = '$nama', username = '$username', nama = '$password'");

if ($query) {
    echo "Sukses Edit!";
} else {
    echo "Gagal!";
}
