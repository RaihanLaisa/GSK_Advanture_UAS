<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
   <link rel="stylesheet" href="css/admin.css">

</head>
<body>
<header>
      <h1>Admin Page - Gresik Discovery</h1>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/GSK_D-White.png" class="putih" /></a>
        </div>
</header>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Paket Wisata</a>
        <a href="transaksi.php">Transaksi</a>
        <a href="logout.php">Logout</a>
    </nav>
   
<div class="container">
<a href="create_form.php">Tambah Wisata</a>

   <div class="content">
    <?php
    include 'config.php';

    $sql = "SELECT id_wisata, nama_wisata, kategori, foto, deskripsi_wisata, ulasan, rating FROM user_admin";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Foto</th>
                    <th>Deskripsi</th>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>";
        // Output data dari setiap baris
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id_wisata"]. "</td>
                    <td>" . $row["nama_wisata"]. "</td>
                    <td>" . $row["kategori"]. "</td>
                    <td>" . $row["foto"]. "</td>
                    <td>" . $row["deskripsi_wisata"]. "</td>
                    <td>" . $row["ulasan"]. "</td>
                    <td>" . $row["rating"]. "</td>
                    <td>
                      <a href='edit_form.php?id=" . $row["id_wisata"] . "'>Edit</a>
                      <a href='delete.php?id=" . $row["id_wisata"] . "'>Delete</a>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>

   </div>

</div>

<footer id="contact">
        <div class="layar-dalam">
          <div>
            <h5>Info</h5>
            <p>Jl. Proklamasi Biologi no. 12</p>
          </div>
          <div>
            <h5>Contact</h5>
            <p>Kelompok 10, Surabaya, Rungkut</p>
            <p>081249228875</p>
            <p>10Group.com</p>
          </div>
          <div>
            <h5>Connect</h5>
            Instagram
          </div>
        </div>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2024 Gresik Discovery</div>
        </div>

</body>
</html>