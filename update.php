<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_wisata = $_POST['id_wisata'];
    $nama_wisata = $_POST['nama_wisata'];
    $kategori = $_POST['kategori'];
    $foto = $_POST['foto'];
    $deskripsi_wisata = $_POST['deskripsi_wisata'];
    $ulasan = $_POST['ulasan'];
    $rating = $_POST['rating'];

    $sql = "UPDATE user_admin SET nama_wisata='$nama_wisata', kategori='$kategori', foto='$foto', deskripsi_wisata='$deskripsi_wisata', ulasan='$ulasan', rating='$rating' WHERE id_wisata='$id_wisata'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header('location:admin_page.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
