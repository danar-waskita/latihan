<?php
$host = "localhost";
$user = "root";     // Default XAMPP
$pass = "";         // Default XAMPP kosong
$db   = "rossi db";

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>