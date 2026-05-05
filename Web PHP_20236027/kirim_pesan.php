<?php
include 'koneksi.php';

// Beritahu browser bahwa file ini mengirimkan balasan JSON
header('Content-Type: application/json');

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$no_hp  = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$pesan  = $_POST['pesan'];

$query = mysqli_query($conn, "INSERT INTO kontak (nama, email, no_hp, alamat, pesan) 
                              VALUES ('$nama', '$email', '$no_hp', '$alamat', '$pesan')");

// Kirim balasan status berhasil atau gagal
if($query) {
    echo json_encode(['status' => 'success', 'pesan' => 'Terima kasih! Pesan Anda berhasil dikirim.']);
} else {
    echo json_encode(['status' => 'error', 'pesan' => 'Maaf, pesan gagal dikirim.']);
}
?>