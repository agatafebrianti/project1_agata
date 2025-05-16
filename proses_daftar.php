<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$usia = $_POST['usia'];
$minat = $_POST['minat'];

// Insert data ke tabel peserta
$query = "INSERT INTO peserta (nama, email, telepon, usia, minat) VALUES ('$nama', '$email', '$telepon', '$usia', '$minat')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Jika sukses, redirect ke dashboard
    header("Location: dashboard.php");
    exit;
} else {
    echo "Gagal daftar. Pesan error: " . mysqli_error($conn);
}
?>
