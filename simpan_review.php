<?php
include "koneksi.php";

$recipe_name   = mysqli_real_escape_string($conn, $_POST['recipe_name']);
$reviewer_name = mysqli_real_escape_string($conn, $_POST['reviewer_name']);
$rating        = (int) $_POST['rating'];
$comment       = mysqli_real_escape_string($conn, $_POST['comment']);

$sql = "INSERT INTO recipe_reviews (recipe_name, reviewer_name, rating, comment, created_at) VALUES ('$recipe_name', '$reviewer_name', '$rating', '$comment', NOW())";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "sukses";
} else {
    echo "gagal";
}

mysqli_close($conn);
?>