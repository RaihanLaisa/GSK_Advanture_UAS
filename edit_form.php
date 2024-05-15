<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id_wisata = $_GET['id'];

    $sql = "SELECT * FROM user_admin WHERE id_wisata = '$id_wisata'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Fetch the existing data for the given id_wisata
        $nama_wisata = $row['nama_wisata'];
        $kategori = $row['kategori'];
        $foto = $row['foto'];
        $deskripsi_wisata = $row['deskripsi_wisata'];
        $ulasan = $row['ulasan'];
        $rating = $row['rating'];
    }
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
    <form action="update.php" method="post">
        <input type="hidden" name="id_wisata" value="<?php echo $id_wisata; ?>">
        Nama Wisata: <input type="text" name="nama_wisata" value="<?php echo $nama_wisata; ?>"><br>
        Kategori: <input type="text" name="kategori" value="<?php echo $kategori; ?>"><br>
        Foto: <input type="text" name="foto" value="<?php echo $foto; ?>"><br>
        Deskripsi: <textarea name="deskripsi_wisata"><?php echo $deskripsi_wisata; ?></textarea><br>
        Ulasan: <textarea name="ulasan"><?php echo $ulasan; ?></textarea><br>
        Rating: <input type="text" name="rating" value="<?php echo $rating; ?>"><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
