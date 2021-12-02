<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'crud');
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
