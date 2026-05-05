<?php
// Hubungkan ke database
include 'koneksi.php';

// Beritahu browser bahwa file ini mengirimkan data berbentuk JSON
header('Content-Type: application/json');

$query_stat = mysqli_query($conn, "SELECT tahun, poin FROM statistik ORDER BY tahun ASC");

$db_labels = [];
$db_data = [];

while($row = mysqli_fetch_assoc($query_stat)) {
    $db_labels[] = $row['tahun'];
    $db_data[] = $row['poin'];
}

// Kemas menjadi satu paket JSON dan kirim
echo json_encode([
    'labels' => $db_labels,
    'data' => $db_data
]);
?>