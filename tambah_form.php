<?php
include('config.php');

// Display errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize variables
$nama_wisata = '';
$kategori = '';
$foto = '';
$deskripsi_wisata = '';
$jam_buka = '';
$lokasi = '';
$harga_tiket = '';
$errors = [];

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
    } else {
        $errors[] = "Foto is required";
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
        $errors[] = "jam_buka is required";
    }
    if (empty($lokasi)) {
      $errors[] = "lokasi is required";
  }
  if (empty($harga_tiket)) {
    $errors[] = "harga_tiket is required";
  }

    // If no errors, insert into database
    if (empty($errors)) {
      $query = "INSERT INTO user_admin (nama_wisata, kategori, foto, deskripsi_wisata, jam_buka, lokasi, harga_tiket) VALUES ('$nama_wisata', '$kategori', '$foto', '$deskripsi_wisata', '$jam_buka', '$lokasi', '$harga_tiket')";
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
        
        <label for="jam_buka">Jam buka</label>
        <input type="text" id="jam_buka" name="jam_buka" value="<?php echo $jam_buka; ?>">
        
        <label for="lokasi">lokasi</label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $lokasi; ?>">

        <label for="harga_tiket">Harga tiket</label>
        <input type="text" id="harga_tiket" name="harga_tiket" value="<?php echo $harga_tiket; ?>">
        
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
