<?php
include('config.php');

// Query to fetch data from the database where category is 'alam'
$query = "SELECT * FROM user_admin WHERE kategori = 'Alam'";
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
                    <h1 class="masthead-heading mb-0">WISATA ALAM</h1>
                    <h2>Menyelami pesona alam Gresik dan nikmati keindahan alam yang menanti untuk dijelajahi </h2>
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
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-thumbnail rounded-circle" src="asset/hutan.jpeg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Banyu Urip Mangrove Center</h2>
                            <p>Wisata mangrove ini diresmikan oleh Bupati Gresik Sambari Halim Radianto pada 2016, banyak masyarakat yang mengunjungi ekowisata ini karena keasrian dan nuansa alamnya yang kental. Selain itu, area pembibitan berbagai jenis tanaman mangrove membuat obyek wisata ini bernilai edukasi. Hal ini karena para mahasiswa dari berbagai perguruan tinggi baik negeri dan swasta melakukan riset. Selain untuk berekreasi, banyak peneliti yang melakukan observasi dan riset tentang mangrove yang ada di sana. Sekelompok burung bangau juga menjadikan hutan mangrove itu menjadi habitat burung tersebut semakin menambah daya tarik. Untuk memasuki kawasan ini kita harus menyeberang jembatan kayu sekitar 250 meter dan tingginya satu meter di atas air. Selama melewati jembatan kita akan disuguhi hutan mangrove yang lebat dan sejuk. Selain itu terdapat gazebo yang digunakan untuk duduk-duduk santai.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 5.000
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 08.00-17.00 WIB
                            </div>
                            <div class="box-above">
                            Lokasi : Banyulegi, Banyuurip, Kec. Ujungpangkah, Kabupaten Gresik, Jawa Timur 61154
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/ngipik.jpeg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Telaga Ngipik</h2>
                            <p>Telaga ngipik memiliki luas kurang lebih 20 hektare yang semula berupa sebuah bukit kapur dan tambang tanah liat sebagai bahan baku pembuatan semen. Salah satu wujud dari solusi pelestarian lingkungan hidup adalah pada sekitar tahun 2002 lubang raksasa tersebut dijadikan sebagai telaga yang bermanfaat bagi masyarakat luas. Sejak saat itu masyarakat dapat memancing ikan di pinggiran danau dengan duduk santai di bawah rerimbunan pohon penghijauan. Di Taman Bermain itu sudah ada Komunitas Mancing Mania, serta ada hiburan musik yang digelar pada hari-hari tertentu. Bagi mereka yang suka berfoto-foto di sini juga tersedia pemandangan danau yang sangat bagus. Warga juga bisa berwisata dengan naik perahu motor yang bisa menampung antara 10-12 orang.</p>
                            <div class="box-above">
                            Harga Tiket : Rp 0 (gratis)
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari 24 jam
                            </div>
                            <div class="box-above">
                            Lokasi : Jarangkuwung, Ngipik, Kec. Gresik, Kabupaten Gresik, Jawa Timur 61151
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="asset/wagos.jpeg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Wisata Alam Gosari</h2>
                            <p>Wisata Alam dan Edukasi Gosari (Wagos) adalah daya tarik wisata baru yang menawarkan wahana alam khas pedes¬aan dengan keindahan alam perbukitan kapur yang sangat mempesona. Keberadaan Kolam Bidadari dan beberapa spot swa foto dan video turut memper¬cantik wahana wisata ini. Nuansa histori berupa kawasan peninggalan industri pengolahan gerabah era Majapahit men¬jadi nilai tambah yang memberikan nilai edukasi yang bernilai tinggi. Diantara peninggalan bersejarah tersebut adalah situs pengolahan gerabah, kubur kuno Tugaran, dan prasasti Goa Butulan yang terletak di atas bukit kapur Gosari. Selain itu, terdapat juga lahan yang digunakan untuk kegiatan camping dan outbond. Dan juga kuliner khas pantura (bonggolan terbuat dari olahan tepung dan ikan).</p>
                            <div class="box-above">
                            Harga Tiket : Rp 5.000 - 15.000
                            </div>
                            <div class="box-above">
                            Jam Buka : Setiap hari, jam 07.00 - 17.00
                            </div>
                            <div class="box-above">
                            Lokasi : Unnamed Road, Gosari, Kec. Ujungpangkah, Kabupaten Gresik, Jawa Timur 61154
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="scroll">
            <div class="container px-5">
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
        </section>
        <!-- Content section 4-->
        <section>
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
