<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- Custom CSS file link -->
   <link rel="stylesheet" href="css/user.css">
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->


   
</head>
<body>
<nav>
    <div class="layar-dalam">
        <div class="logo">
            <a href=""><img src="asset/GSK_D-White.png" class="putih" /></a>
            <a href=""><img src="asset/GSK_D_Black.png" class="hitam" /></a>
        </div>
        <div class="main-menu  d-none d-lg-block">

           <a href="#" class="tombol-menu">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </a>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li>
    <a href="#">Destinasi <i class="ti-angle-down"></i></a>
    <ul class="submenu">
        <li><a href="Pantai">Pantai</a></li>
        <li><a href="Sejarah">Sejarah</a></li>
    </ul>
</li>

<li>
    <a href="#">Aktivitas <i class="ti-angle-down"></i></a>
    <ul class="submenu">
        <li><a href="Oleh-oleh">Oleh-oleh</a></li>
        <li><a href="Event">Event</a></li>
        <li><a href="Tips Liburan">Tips Liburan</a></li>
    </ul>
</li>

                <li><a href="#blog">Blog</a></li>
                <li><a href="#Rekomendasi">Rekomendasi</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
                <li><a href="login.html" class="login-btn">Login</a></li>
               
            </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/Gresik-video.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Visit Gresik</h3>
          <p>
            Gresik terletak sekitar 20 km barat laut dari Surabaya dan termasuk dalam wilayah metropolitan Surabaya.
          </p>
          <p>
            <a href="user2_page.php" class="tombol">MORE INFO</a>
          </p>
        </div>
      </header>
      <main>
        <section id="aboutus">
          <div class="layar-dalam">
            <h3>About Us</h3>
            <p class="ringkasan">
                Kami dari kelompok 10 mengerjakan tugas akhir dengan studi kasus Web wisata
            </p>
            <div class="konten-isi">
              <p>
                Demi menyelesaikan tugas mata kuliah pemogramman Web, kita kelompok 10 mengerjakan tugas akhir yaitu
                membuat web dengan studi kasus web wisata
              </p>
            </div>
          </div>
        </section>
        
        <section id="gallery">
          <div><img src="asset/Banyu Urip Mangrove Center.png" /></div>
          <div><img src="asset/Bukit Kapur Sekapuk.png" /></div>
          <div><img src="asset/Giri kedaton.png" /></div>
          <div><img src="asset/Makam Sunan Syeikh Maulana Malik Ibrahim.png" /></div>
          <div><img src="asset/Masjid Jami'.png" /></div>
          <div><img src="asset/Masjid KH Ahmad Dahlan.png" /></div>
          <div><img src="asset/Pantai Delegan.png" /></div>
          <div><img src="asset/Wagos Wisata Alam Gosari.png" /></div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>Tak hanya sebatas tanah dan bangunan, 
                Gresik adalah cerita kebesaran masa lalu yang terus hidup dalam setiap langkah ke depannya.</p>
          </div>
        </section>
        
        

        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Lastest Blog</h3>
            <p class="ringkasan">
              Sunan di Gresik
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/Sunangiri_blog.png')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Sunan giri?</a></h4>
                    <p>
                        Sunan Giri adalah salah satu tokoh yang memainkan peran penting dalam sejarah Islam di Indonesia, 
                        terutama di Jawa Timur. Dikenal dengan nama aslinya, Raden Paku.
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/Sunanmalikibrahum_blog.png')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Sunan Malik Ibrahim?</a></h4>
                    <p>
                    Sunan Malik Ibrahim adalah salah satu tokoh penting dalam sejarah Islam di Indonesia, 
                    terutama di Jawa Timur. Beliau dikenal sebagai seorang wali Allah yang berjasa dalam menyebarkan 
                    agama Islam di wilayah tersebut.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
<!-- Section Packages Start -->
<section class="Rekomendasi" id="Rekomendasi">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>REKO</span>MENDASI</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
            <img src="asset/Sunanmalikibrahum_blog.png">
              <div class="card-body">
                <h3>United Kingdom</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
            <img src="asset/Sunanmalikibrahum_blog.png">
              <div class="card-body">
                <h3>France</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="asset/Sunanmalikibrahum_blog.png">
             
              <div class="card-body">
                <h3>Pakistan</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>



        </div>



        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
            <img src="asset/Sunanmalikibrahum_blog.png">
              <div class="card-body">
                <h3>Italy</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
            <img src="asset/Sunanmalikibrahum_blog.png">
              <div class="card-body">
                <h3>India</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
               <img src="asset/Sunanmalikibrahum_blog.png">
              <div class="card-body">
                <h3>United States</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>$500</strong></h6>
                <a href="#book">Book Now</a>
              </div>
            </div>

          </div>



        </div>


      </div>
    </section>
    <!-- Section Packages End -->


        </section>
      </main>
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
    </div>
    <script src="javascript.js"></script>
</body>
</html>