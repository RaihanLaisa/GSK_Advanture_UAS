<?php
// create.php

include 'config.php';

// Mendapatkan nilai-nilai dari formulir
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$foto = $_POST['foto'];
$deskripsi = $_POST['deskripsi'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];

// Query SQL untuk menyimpan data baru
$sql = "INSERT INTO user_admin (nama_wisata, kategori, foto, deskripsi_wisata, ulasan, rating) VALUES ('$nama', '$kategori', '$foto', '$deskripsi', '$ulasan', '$rating')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
