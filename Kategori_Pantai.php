<?php
include('config.php');

$query = "SELECT * FROM user_admin WHERE kategori = 'pantai'";
$hasil = mysqli_query($conn, $query);

if (!$hasil) {
    die("Query Error: " . mysqli_errno($conn) . " - " . mysqli_error($conn));
}

// Fetch the column names
$columns = array();
$result = mysqli_query($conn, "SHOW COLUMNS FROM user_admin");
while ($row = mysqli_fetch_assoc($result)) {
    $columns[] = $row['Field'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>One Page Wonder - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#!">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Log In</a></li>
                    </ul>
                </div>
            </div> -->
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">WISATA PANTAI</h1>
                    <h2 >Temukan pesona pasir putih dan laut biru nikmati liburan seru di tepi laut</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                <?php
            $sectionCount = 1;
            while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
                $foto = htmlspecialchars($data['foto']);
                $nama_wisata = htmlspecialchars($data['nama_wisata']);
                $deskripsi_wisata = htmlspecialchars($data['deskripsi_wisata']);

                if ($sectionCount % 2 == 0) {
                    echo '<div class="row gx-5 align-items-center">';
                    echo '<div class="col-lg-6"><div class="p-5"><img class="img-fluid rounded-circle" src="foto/' . $foto . '" alt="Image" /></div></div>';
                    echo '<div class="col-lg-6"><div class="p-5">';
                } else {
                    echo '<div class="row gx-5 align-items-center">';
                    echo '<div class="col-lg-6 order-lg-2"><div class="p-5"><img class="img-fluid rounded-circle" src="foto/' . $foto . '" alt="Image" /></div></div>';
                    echo '<div class="col-lg-6 order-lg-1"><div class="p-5">';
                }
                echo '<h2 class="display-4">' . $nama_wisata . '</h2>';
                echo '<p>' . $deskripsi_wisata . '</p>';

                // Dynamically display other fields
                foreach ($columns as $column) {
                    if ($column != 'foto' && $column != 'nama_wisata' && $column != 'deskripsi_wisata' && $column != 'kategori') {
                        $value = htmlspecialchars($data[$column]);
                        echo '<div class="box-above">' . ucfirst(str_replace('_', ' ', $column)) . ': ' . $value . '</div>';
                    }
                }

                echo '</div></div></div>';
                $sectionCount++;
            }
            ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">DESKRIPSI WISATA &copy; </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
