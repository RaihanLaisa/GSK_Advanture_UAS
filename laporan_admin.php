<?php
include('config.php');

// Query to fetch data from the database
$query = "SELECT * FROM user_rating";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
<div class="header">
    <h1>Rating Report</h1>
</div>
<nav>
    <a href="admin_page.php">Dashboard</a>
</nav>
<main>
    <div class="container">
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Email</th>
            <th>Rating</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor; ?></th>
                    <td><?php echo $data['user']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
</main>

<footer id="contact">
    <div class="layar-dalam">
        <div>
            <h5>Info</h5>
            Jl. Proklamasi Biologi no. 12
        </div>
        <div>
            <h5>Contact</h5>
            <p>Kelompok 10, Surabaya, Rungkut</p>
            <p>081249228875</p>
            <p>10Group.com</p>
        </div>
        <div>
            <h5>Connect</h5>
            <p>Instagram</p>
        </div>
    </div>
    <div class="layar-dalam">
        <div class="copyright">&copy; 2222 Gresik Discovery</div>
    </div>
</footer>
</body>
</html>