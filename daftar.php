<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);

$cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
$cek = mysqli_num_rows($cek_data);

if ($cek > 0) {
    echo "Data Sudah Ada";
} else {
    $input = mysqli_query($koneksi, "INSERT INTO `user` (`id`, `nama`, `username`, `password`, `status`) VALUES (null, '$nama', '$username', '$hash', 'Pelanggan')");
    if ($input) {
        echo "Selamat Anda Telah Terdaftar";
    } else {
        echo "Gagal";
    }
}
