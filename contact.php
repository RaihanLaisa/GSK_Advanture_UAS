<?php
include('config.php');

session_start();

// Initialize variables
$email = '';
$nama_wisata = '';
$ulasan = '';
$rating = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $email = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['email'])));
    $nama_wisata = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['nama_wisata'])));
    $ulasan = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['ulasan'])));
    $rating = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['rating'])));

    if (empty($errors)) {
        $query = "INSERT INTO user_rating (email, nama_wisata, ulasan, rating) VALUES ('$email', '$nama_wisata', '$ulasan', '$rating')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: contact.php");
        } else {
            die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div class="container">  
    <form id="contact" action="tambah_contact.php" method="post">
        <h3>Quick Contact</h3>
        <h4>Contact us today, and get reply within 24 hours!</h4>
        <fieldset>
            <input placeholder="email" type="email" name="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="nama wisata" type="text" name="nama_wisata" tabindex="3" required>
        </fieldset>
        <fieldset>
            <textarea placeholder="ulasan" name="ulasan" tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
            <div class="rating">
                <input type="number" name="rating" hidden>
                <i class='bx bx-star star' style="--i: 0;"></i>
                <i class='bx bx-star star' style="--i: 1;"></i>
                <i class='bx bx-star star' style="--i: 2;"></i>
                <i class='bx bx-star star' style="--i: 3;"></i>
                <i class='bx bx-star star' style="--i: 4;"></i>
            </div>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
</div>
<script src="js/form.js" defer></script>
</body>
</html>
