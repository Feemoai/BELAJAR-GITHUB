<?php

// MEMBUAT KONEKSI KE DATABASE
$mysqli = mysqli_connect("localhost", "root", "", "belajar_php");

// PERIKSA APAKAH SERVER BERHASIL TERHUBUNG
if(!$mysqli) {
    die("Koneksi gagal:" . mysqli_connect_error()) ;
}
?>

