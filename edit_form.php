<?php
include('config.php');

// Initialize variables
$nama_wisata = '';
$kategori = '';
$foto = '';
$deskripsi_wisata = '';
$jam_buka = '';
$lokasi = '';
$harga_tiket = '';
$errors = [];

// Check if ID parameter exists
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch record from database based on ID
    $query = "SELECT * FROM user_admin WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Assign fetched data to variables
        $nama_wisata = $row['nama_wisata'];
        $kategori = $row['kategori'];
        $foto = $row['foto'];
        $deskripsi_wisata = $row['deskripsi_wisata'];
        $jam_buka = $row['jam_buka'];
        $lokasi = $row['lokasi'];
        $harga_tiket = $row['harga_tiket'];
    } else {
        // Redirect to a 404 page or handle error accordingly
        die("Record not found.");
    }
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $nama_wisata = isset($_POST['nama_wisata']) ? htmlspecialchars(trim($_POST['nama_wisata'])) : '';
    $kategori = isset($_POST['kategori']) ? htmlspecialchars(trim($_POST['kategori'])) : '';
    $deskripsi_wisata = isset($_POST['deskripsi_wisata']) ? htmlspecialchars(trim($_POST['deskripsi_wisata'])) : '';
    $jam_buka = isset($_POST['jam_buka']) ? htmlspecialchars(trim($_POST['jam_buka'])) : '';
    $lokasi = isset($_POST['lokasi']) ? htmlspecialchars(trim($_POST['lokasi'])) : '';
    $harga_tiket = isset($_POST['harga_tiket']) ? htmlspecialchars(trim($_POST['harga_tiket'])) : '';

    // Handle file upload
    if (!empty($_FILES['foto']['name'])) {
        $extensi = explode(".", $_FILES['foto']['name']);
        $foto  = "foto-".round(microtime(true)).".".end($extensi);
        $sumber  = $_FILES['foto']['tmp_name'];
        $upload = move_uploaded_file($sumber,'foto/'.$foto);
        if (!$upload) {
            $errors[] = "Failed to upload image.";
        }
    }

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
    if (empty($jam_buka)) {
        $errors[] = "Jam Buka is required";
    }
    if (empty($lokasi)) {
        $errors[] = "Lokasi is required";
    }
    if (empty($harga_tiket)) {
        $errors[] = "Harga Tiket is required";
    }

    // If no errors, update record in database
    if (empty($errors)) {
        $query = "UPDATE user_admin SET nama_wisata = '$nama_wisata', kategori = '$kategori', foto = '$foto', deskripsi_wisata = '$deskripsi_wisata', jam_buka = '$jam_buka', lokasi = '$lokasi', harga_tiket = '$harga_tiket' WHERE id = $id";

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
    <title>Edit Wisata</title>
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
    <h2>Edit Wisata</h2>
    <?php
    if (!empty($errors)) {
        echo '<div class="errors">';
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
        echo '</div>';
    }
    ?>
    <form action="edit_form.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <label for="nama_wisata">Nama Wisata</label>
        <input type="text" id="nama_wisata" name="nama_wisata" value="<?php echo $nama_wisata; ?>">
        
        <label for="kategori">Kategori</label>
        <select id="kategori" name="kategori">
            <option value="">Pilih Kategori</option>
            <option value="Sejarah" <?php echo ($kategori == 'Sejarah') ? 'selected' : ''; ?>>Sejarah</option>
            <option value="Bukit" <?php echo ($kategori == 'Bukit') ? 'selected' : ''; ?>>Bukit</option>
            <option value="Keagamaan" <?php echo ($kategori == 'Keagamaan') ? 'selected' : ''; ?>>Keagamaan</option>
            <option value="Renang" <?php echo ($kategori == 'Renang') ? 'selected' : ''; ?>>Renang</option>
            <option value="Alam" <?php echo ($kategori == 'Alam') ? 'selected' : ''; ?>>Alam</option>
            <option value="Pantai" <?php echo ($kategori == 'Pantai') ? 'selected' : ''; ?>>Pantai</option>
        </select>
        
        <label for="foto">Foto</label>
        <input type="file" id="foto" name="foto">
        
        <label for="deskripsi_wisata">Deskripsi Wisata</label>
        <textarea id="deskripsi_wisata" name="deskripsi_wisata"><?php echo $deskripsi_wisata; ?></textarea>
        
        <label for="jam_buka">Jam Buka</label>
        <input type="text" id="jam_buka" name="jam_buka" value="<?php echo $jam_buka; ?>">
        
        <label for="lokasi">Lokasi</label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $lokasi; ?>">

        <label for="harga_tiket">Harga Tiket</label>
        <input type="text" id="harga_tiket" name="harga_tiket" value="<?php echo $harga_tiket; ?>">
        
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
