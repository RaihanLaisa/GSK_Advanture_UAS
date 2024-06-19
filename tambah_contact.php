<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nama_wisata = $_POST['nama_wisata'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];
    
    // Guarding against SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $nama_wisata = mysqli_real_escape_string($conn, $nama_wisata);
    $ulasan = mysqli_real_escape_string($conn, $ulasan);
    $rating = mysqli_real_escape_string($conn, $rating);
    
    $insert_query = "INSERT INTO guest_contact (email, nama_wisata, ulasan, rating) VALUES ('$email', '$nama_wisata', '$ulasan', '$rating')"; // added comma between '$ulasan' and '$kategori'
    
    if (mysqli_query($conn, $insert_query)) {
        echo "Thanks! Your rating has been submitted.";
    } else {
        echo "Oops! There was an error. Please try again later.";
    }
}
?>
