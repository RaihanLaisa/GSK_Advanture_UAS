<?php
include('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user_admin WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);

    if (!$data) {
        die("Data not found.");
    }
} else {
    header('Location: tabel.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_wisata = $_POST['nama_wisata'];
    $kategori = $_POST['kategori'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $file_tmp = $_FILES['foto']['tmp_name'];
        $file_type = $_FILES['foto']['type'];
        $file_size = $_FILES['foto']['size'];
        $file_data = addslashes(file_get_contents($file_tmp));
        
        // Limit file size to 2MB
        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "File size should not exceed 2MB";
        }

        if (!in_array($file_type, ['image/jpeg', 'image/png'])) {
            $errors[] = "Only JPEG and PNG files are allowed";
        }
    } else {
        $errors[] = "Foto is required";
    }

    $updateQuery = "UPDATE user_admin SET nama_wisata='$nama_wisata', kategori='$kategori', deskripsi_wisata='$deskripsi_wisata', ulasan='$ulasan', rating='$rating' WHERE id=$id";

    $result = mysqli_query($conn, $updateQuery);

    if (!$result) {
        die("Update failed: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
    }

    header('Location: admin_page.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wisata</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
<div class="container">
    <h1>Edit Wisata</h1>
    <form method="POST" enctype="multipart/form-data">
        <div>
            <label for="nama_wisata">Nama Wisata:</label>
            <input type="text" id="nama_wisata" name="nama_wisata" value="<?php echo $data['nama_wisata']; ?>" required>
        </div>
        <div>
            <label for="kategori">Kategori:</label>
            <input type="text" id="kategori" name="kategori" value="<?php echo $data['kategori']; ?>" required>
        </div>
        <div>
            <label for="foto">foto:</label>
            <input type="file" id="foto" name="foto" value="<?php echo $data['foto']; ?>" required>
        </div>
        <div>
            <label for="deskripsi_wisata">Deskripsi Wisata:</label>
            <textarea id="deskripsi_wisata" name="deskripsi_wisata" required><?php echo $data['deskripsi_wisata']; ?></textarea>
        </div>
        <div>
            <label for="ulasan">Ulasan:</label>
            <textarea id="ulasan" name="ulasan" required><?php echo $data['ulasan']; ?></textarea>
        </div>
        <div>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" value="<?php echo $data['rating']; ?>" required>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</div>
</body>
</html>
