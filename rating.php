<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $kategori = $_POST['kategori'];
    $rating = $_POST['rating'];
    
    // Guarding against SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $kategori = mysqli_real_escape_string($conn, $kategori); // tambahkan escape string untuk kategori
    $rating = mysqli_real_escape_string($conn, $rating);
    
    $insert_query = "INSERT INTO user_rating (user, kategori, rating) VALUES ('$user', '$kategori', '$rating')"; // tambahkan kategori ke dalam query
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Thanks! Your rating has been submitted.";
    } else {
        echo "Oops! There was an error. Please try again later.";
    }
}
?>
