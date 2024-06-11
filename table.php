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
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<div class="header">
    <h1>Daftar Wisata</h1>
</div>
<nav>
    <a href="admin_page.php">Home</a>
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
                <th>Action</th>
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
                    <td><img src="foto/<?php echo $data['foto']; ?>" width="160px"></td>
                    <td><?php echo $data['deskripsi_wisata']; ?></td>
                    <td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                    <td>
                        <a href="edit_form.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                        <a href="delete.php?id=<?php echo $data['id']; ?>" class="delete" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>

<footer id="contact">
    <div class="layar-dalam">
        <div>
            <h5>Info</h5>
            Jl. Proklamasi Biologi no. 12
        </div>
        <div>
            <h5>Contact</h5>
            Kelompok 10, Surabaya, Rungkut
            ~081249228875
            ~10Group.com
        </div>
        <div>
            <h5>Connect</h5>
            Instagram
        </div>
    </div>
    <div class="layar-dalam">
        <div class="copyright">&copy; 2222 Gresik Discovery</div>
    </div>
</footer>
</body>
</html>
