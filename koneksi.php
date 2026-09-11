<?php
$host     = "localhost";
$user     = "root";      // Default username XAMPP
$password = "";          // Default password XAMPP (kosong)
$database = "db_food"; // Sesuaikan dengan nama database kamu di phpMyAdmin

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>