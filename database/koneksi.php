<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sirkula-php";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die('Gagal koneksi Ke Database ');
} else {
    echo "Berhasil Koneksi Ke Databse ";
}
?>