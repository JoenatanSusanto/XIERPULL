<?php
$servername = "localhost";
$username = "root"; // Username default phpMyAdmin
$password = ""; // Password default phpMyAdmin (biasanya kosong)
$dbname = "nama_kegiatan1";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
