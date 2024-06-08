<?php
include('config.php');

// Query to fetch data from the database
$query = "SELECT * FROM user_admin";
$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none; border:none;
}

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

/* Header */
.header {
  background-color: #2848a7;
  color: #fff;
  padding: 20px;
  text-align: center;
  border-radius: 8px 8px 0 0;
  margin-bottom: 20px;
}

.header h1 {
  margin: 0;
}

/* Navigation */
nav {
  background-color: #333;
  overflow: hidden;
  border-radius: 0 0 8px 8px;
}

nav a {
  float: left;
  display: block;
  color: #fff;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  transition: background-color 0.3s;
}

nav a:hover {
  background-color: #ddd;
  color: #333;
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

/* Table */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

table th,
table td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

table th {
  background-color: #f2f2f2;
  font-weight: bold;
}

table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

table tbody tr:hover {
  background-color: #f1f1f1;
}

table td a {
  padding: 5px 10px;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

table td a.edit {
  background-color: #4CAF50;
}

table td a.delete {
  background-color: #f44336;
}
    </style>
</head>
<body>
<div class="header">
    <h1>Daftar Wisata</h1>
</div>
<nav>
    <a href="admin_page.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
</nav>
<div class="container">
    <a href="tambah_form.php">Tambah Wisata</a>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Wisata</th>
                <th>Kategori</th>
                <th>Foto</th>
                <th>Deskripsi Wisata</th>
                <th>Ulasan</th>
                <th>Rating</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor; ?></th>
                    <td><?php echo $data['nama_wisata']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><img src='display_image.php?id={$row['id']}' alt='Foto'></td>
                    <td><?php echo $data['deskripsi_wisata']; ?></td>
                    <td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                    <td><a href="edit_form.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
