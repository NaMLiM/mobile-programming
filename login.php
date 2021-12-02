<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$cek_pwd = mysqli_query($koneksi, "SELECT password FROM user WHERE username = '$username'");

$cek = mysqli_num_rows($cek_pwd);

while ($data = mysqli_fetch_array($cek_pwd)) {
    $passwordhash = $data['password'];
}

if ($cek > 0) {
    if (password_verify($password, $passwordhash)) {
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        while ($data = mysqli_fetch_array($query)) {
            $id = $data['id'];
            $nama = $data['nama'];
            $username = $data['username'];
            $status = $data['status'];
        }

        $config = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'status' => $status
        );
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($config);
        http_response_code(200);
    }
} else {
    http_response_code(404);
    echo "Login Gagal";
}
