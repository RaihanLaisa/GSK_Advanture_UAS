<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $kategori = $_POST['kategori'];
    $rating = $_POST['rating'];
    
    // Guarding against SQL injection
    $user = mysqli_real_escape_string($conn, $user);
    $email = mysqli_real_escape_string($conn, $email);
    $kategori = htmlspecialchars(trim($_POST['kategori']));
    $rating = mysqli_real_escape_string($conn, $rating);
    
    $insert_query = "INSERT INTO user_rating (user, email, rating) VALUES ('$user', '$email', '$rating')";
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Thanks! Your rating has been submitted.";
    } else {
        echo "Oops! There was an error. Please try again later.";
    }
}
?>
