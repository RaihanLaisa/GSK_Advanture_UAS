<?php

use LDAP\Result;

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
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
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
					<span class="text">paket wisata</span>
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
			</div>
				<a href="#" class="btn-download">
				<i class='bx bxs-cloud-download' ></i>
				<span class="text">Download PDF</span>
				</a>
			</div>


	<div class="table-data">
		<div>
			<canvas id="myChart"></canvas>
		</div>
		<script>
			const ctx1 = document.getElementById('myChart').getContext('2d');

			new Chart(ctx1, {
				type: 'bar',
				data: {
					labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
					datasets: [{
						label: '# of Votes',
						data: [12, 19, 3, 5, 2, 3],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
		</script>
	</div>
	</script>
	</div>
</section>
</main>

<script src="js/admin.js" defer></script>
</body>
</html>
