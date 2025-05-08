<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Kosong jika tidak pakai password
$db = 'buku_tamu';
$port = 8111; // Sesuai config Anda


// Buat koneksi dengan OOP (mysqli)
$mysqli = new mysqli($host, $user, $pass, $db, 8111); // Tambahkan port

// Cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi gagal: ' . $mysqli->connect_error);
}
?>
