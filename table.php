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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Gresik Discovery</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="table.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Tambah wisata</span>
				</a>
			</li>
			<li>
				<a href="laporan_admin.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Report</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
<main>
	<div class="head-title">
		<div class="left">
			<h1>Dashboard</h1>
				<ul class="breadcrumb">
					<li>
						<a href="#">Dashboard</a>
					</li>
					<li><i class='bx bx-chevron-right' ></i></li>
					<li>
						<a class="active" href="#">Home</a>
					</li>
				</ul>
    <main>
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
                        <button class="btn edit" onclick="window.location.href='edit_form.php?id=<?php echo $data['id']; ?>'">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn delete" onclick="if (confirm('Are you sure you want to delete this item?')) { window.location.href='delete.php?id=<?php echo $data['id']; ?>' }">
                            <i class="fa fa-trash"></i>
                        </button>
                        </td>
                    </tr>
                    <?php
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
        </div>
    </main>
</main>
<script src="js/admin.js" defer></script>
</body>
</html>
