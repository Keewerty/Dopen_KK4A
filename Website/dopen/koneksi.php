<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dpn";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}

?>