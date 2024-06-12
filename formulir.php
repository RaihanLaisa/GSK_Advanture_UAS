<?php
include('config.php');

// Initialize variables
$user = '';
$email = '';
$rating = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $user = htmlspecialchars(trim($_POST['user']));
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $rating = htmlspecialchars(trim($_POST['rating']));

    if (empty($errors)) {
        $query = "INSERT INTO user_rating (user, email, rating) VALUES ('$user', '$email', '$rating')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: formulir.php");
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
    <title>Formulir Rating</title>
    <link rel="stylesheet" href="css/formulir.css">
</head>
<body>
    <header>
        <h1>Rating</h1>
    </header>
    <nav>
        <a href="admin_page.php">Dashboard</a>
    </nav>
    <form action="rating.php" method="post">
    <label for="user">User:</label>
    <input type="text" id="user" name="user" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="rating">Rating:</label>
    <select id="rating" name="rating" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
