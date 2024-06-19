                                                                                               <?php

use LDAP\Result;

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

$query = "SELECT * FROM user_rating";
$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}
?>

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

	<div class="table-data">
		<div>
			<canvas id="myChart"></canvas>
		</div>
    	<script>
			// Function to fetch data from PHP script
	   async function fetchData() {
            const response = await fetch('fetch_data.php');
            const data = await response.json();
            return data;
        }

        // Function to create chart
        async function createChart() {
            const data = await fetchData();
            const categories = data.map(item => item.kategori);
            const ratings = data.map(item => item.avg_rating); // Menggunakan avg_rating

            const ctx = document.getElementById('myChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: categories,
                    datasets: [{
                        label: 'Average Ratings',
                        data: ratings,
                        borderWidth: 1,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
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
        }
 

			// Call the function to create the chart
			createChart();
			</script>
	</div>
	</script>
	</div>

<div class="table-data">
	<div class="order">
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>User</th>
			<th>ulasan</th>
            <th>Kategori</th>
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
					<td><?php echo $data['ulasan']; ?></td>
                    <td><?php echo $data['kategori']; ?></td>
                    <td><?php echo $data['rating']; ?></td>
                </tr>
                <?php
                $nomor++;
            }
            ?>
        </tbody>
    </table>
    </div>
	</div>
</section>
</main>

<script src="js/admin.js" defer></script>
</body>
</html>
