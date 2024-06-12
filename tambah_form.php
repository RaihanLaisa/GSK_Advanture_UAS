<?php
include('config.php');

// Initialize variables
$nama_wisata = '';
$kategori = '';
$foto = '';
$deskripsi_wisata = '';
$ulasan = '';
$rating = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $nama_wisata = htmlspecialchars(trim($_POST['nama_wisata']));
    $kategori = htmlspecialchars(trim($_POST['kategori']));
    $deskripsi_wisata = htmlspecialchars(trim($_POST['deskripsi_wisata']));
    $ulasan = htmlspecialchars(trim($_POST['ulasan']));
    $rating = htmlspecialchars(trim($_POST['rating']));

    // Handle file upload
    $extensi = explode(".", $_FILES['foto']['name']);
    $foto  = "foto-".round(microtime(true)).".".end($extensi);
    $sumber  = $_FILES['foto']['tmp_name'];
    $upload = move_uploaded_file($sumber,'foto/'.$foto);

    // Check for errors
    if (empty($nama_wisata)) {
        $errors[] = "Nama Wisata is required";
    }
    if (empty($kategori)) {
        $errors[] = "Kategori is required";
    }
    if (empty($deskripsi_wisata)) {
        $errors[] = "Deskripsi Wisata is required";
    }
    if (empty($ulasan)) {
        $errors[] = "Ulasan is required";
    }
    if (empty($rating)) {
        $errors[] = "Rating is required";
    } elseif (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        $errors[] = "Rating must be a number between 1 and 5";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $query = "INSERT INTO user_admin (nama_wisata, kategori, foto, deskripsi_wisata, ulasan, rating) VALUES ('$nama_wisata', '$kategori', '$foto', '$deskripsi_wisata', '$ulasan', '$rating')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: table.php");
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
    <title>Tambah Wisata</title>
    <style>
/* Same CSS as in the original file for consistency */
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  color: #333;
  line-height: 1.6;
}

/* Container */
.container {
  width: 80%;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

/* Link */
.container a {
  display: inline-block;
  margin-bottom: 20px;
  padding: 10px 15px;
  background-color: #2848a7;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.container a:hover {
  background-color: #215188;
}

/* Form */
form {
  display: flex;
  flex-direction: column;
}

form label {
  margin-bottom: 5px;
  font-weight: bold;
}

form input,
form select,
form textarea {
  margin-bottom: 15px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

form input[type="submit"] {
  background-color: #2848a7;
  color: #fff;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s;
}

form input[type="submit"]:hover {
  background-color: #215188;
}

/* Error messages */
.errors {
  color: red;
  margin-bottom: 15px;
}
    </style>
</head>
<body>
<div class="container">
    <h2>Tambah Wisata</h2>
    <?php
    if (!empty($errors)) {
        echo '<div class="errors">';
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
        echo '</div>';
    }
    ?>
    <form action="tambah_form.php" method="post" enctype="multipart/form-data">
        <label for="nama_wisata">Nama Wisata</label>
        <input type="text" id="nama_wisata" name="nama_wisata" value="<?php echo $nama_wisata; ?>">
        
        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori">
            <option value="">Pilih Kategori</option>
            <option value="Alam" <?php echo ($kategori == 'Sejarah') ? 'selected' : ''; ?>>Sejarah</option>
            <option value="Budaya" <?php echo ($kategori == 'Bukit') ? 'selected' : ''; ?>>Bukit</option>
            <option value="Kuliner" <?php echo ($kategori == 'Pantai') ? 'selected' : ''; ?>>Pantai</option>
            <option value="Sejarah" <?php echo ($kategori == 'Tempat keagamaan') ? 'selected' : ''; ?>>Tempat keagamaan</option>
            <option value="Religi" <?php echo ($kategori == 'Renang') ? 'selected' : ''; ?>>Renang</option>
            <option value="Religi" <?php echo ($kategori == 'Alam') ? 'selected' : ''; ?>>Alam</option>
        </select>
        
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        
        <label for="deskripsi_wisata">Deskripsi Wisata</label>
        <textarea id="deskripsi_wisata" name="deskripsi_wisata"><?php echo $deskripsi_wisata; ?></textarea>
        
        <label for="ulasan">Ulasan</label>
        <textarea id="ulasan" name="ulasan"><?php echo $ulasan; ?></textarea>
        
        <label for="rating">Rating</label>
        <input type="number" id="rating" name="rating" value="<?php echo $rating; ?>" min="1" max="5" step="1">
        
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
