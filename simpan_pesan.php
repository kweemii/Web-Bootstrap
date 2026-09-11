<?php
include "koneksi.php";

$nama  = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

// Validasi domain email
if (!preg_match('/@(gmail\.com|student\.atmi\.ac\.id)$/i', $email)) {
    echo "invalid_email";
    exit();
}

$sql = "INSERT INTO pesan_kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "sukses";
} else {
    echo "gagal";
}

mysqli_close($conn);
?>