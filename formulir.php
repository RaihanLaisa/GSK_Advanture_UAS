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
    $user = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['user'])));
    $kategori = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['kategori'])));
    $rating = mysqli_real_escape_string($conn, htmlspecialchars(trim($_POST['rating'])));

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
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
        <input type="text" id="user" name="user" value="<?php echo $_SESSION['user_name']; ?>" readonly><br><br>

        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori" class="form-control" required>
            <option value="Sejarah" <?php echo ($kategori == 'Sejarah') ? 'selected' : ''; ?>>Sejarah</option>
            <option value="Bukit" <?php echo ($kategori == 'Bukit') ? 'selected' : ''; ?>>Bukit</option>
            <option value="Keagamaan" <?php echo ($kategori == 'Keagamaan') ? 'selected' : ''; ?>>Keagamaan</option>
            <option value="Waterboom" <?php echo ($kategori == 'Waterboom') ? 'selected' : ''; ?>>Waterboom</option>
            <option value="Alam" <?php echo ($kategori == 'Alam') ? 'selected' : ''; ?>>Alam</option>
            <option value="Pantai" <?php echo ($kategori == 'Pantai') ? 'selected' : ''; ?>>Pantai</option>
        </select>

		<form action="#">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='bx bx-star star' style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
			</div>
        
        <input type="submit" value="Submit">
    </form>

    <script src="js/form.js" defer></script>
</body>
</html>
