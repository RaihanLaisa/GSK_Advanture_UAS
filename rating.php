<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $ulasan = $_POST['ulasan'];
    $kategori = $_POST['kategori'];
    $rating = $_POST['rating'];
    
    // Guarding against SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $ulasan = mysqli_real_escape_string($conn, $ulasan);
    $kategori = mysqli_real_escape_string($conn, $kategori);
    $rating = mysqli_real_escape_string($conn, $rating);
    
    $insert_query = "INSERT INTO user_rating (user, ulasan, kategori, rating) VALUES ('$user', '$ulasan', '$kategori', '$rating')"; // added comma between '$ulasan' and '$kategori'
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Thanks! Your rating has been submitted.";
    } else {
        echo "Oops! There was an error. Please try again later.";
    }
}
?>
