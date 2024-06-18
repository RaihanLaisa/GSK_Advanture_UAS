<?php
include('config.php');

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
   exit;
}


// Initialize variables
$user = '';
$rating = '';
$kategori = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $user = htmlspecialchars(trim($_POST['user']));
    $kategori = htmlspecialchars(trim($_POST['kategori']));
    $rating = htmlspecialchars(trim($_POST['rating']));

    if (empty($errors)) {
        $query = "INSERT INTO user_rating (user, kategori, rating) VALUES ('$user', '$kategori', '$rating')";
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
        <h1>Review seluruh kategori</h1>
    </header>
    <nav>
        <a href="user_page.php">Dashboard</a>
    </nav>
    <form action="rating.php" method="post">
    <label for="user">User:</label>
    <input type="text" id="user" name="user" <?php echo $_SESSION['user_name'] ?> readonly><br><br>

    <label for="kategori">Kategori</label>
    <select id="kategori" name="kategori" class="form-control" required>
            <option value="Alam" <?php echo ($kategori == 'Sejarah') ? 'selected' : ''; ?>>Sejarah</option>
            <option value="Budaya" <?php echo ($kategori == 'Bukit') ? 'selected' : ''; ?>>Bukit</option>
            <option value="Kuliner" <?php echo ($kategori == 'Keagamaan') ? 'selected' : ''; ?>>Keagamaan</option>
            <option value="Sejarah" <?php echo ($kategori == 'Water Boom') ? 'selected' : ''; ?>>Waterboom</option>
            <option value="Religi" <?php echo ($kategori == 'Alam') ? 'selected' : ''; ?>>Alam</option>
            <option value="Religi" <?php echo ($kategori == 'Pantai') ? 'selected' : ''; ?>>Pantai</option>
    </select>
    
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
