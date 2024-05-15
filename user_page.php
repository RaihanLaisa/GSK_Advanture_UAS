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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user.css">

</head>
<body>
<nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/GSK_D-White.png" class="putih" /></a>
          <a href=""><img src="asset/GSK_D_Black.png" class="hitam" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#aboutus">About Us</a></li>
            <li><a href="#support">Support</a></li>
            <li><a href="#gallery"></a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="logout.php" >logout</a></li>
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
            <a href="index.php" class="tombol">MORE INFO</a>
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
                Demi menyelesaikan tugas mata kuliah pemogramman Mobile, kita kelompok 10 mengerjakan tugas akhir yaitu
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
        
        <section id="team">
          <div class="layar-dalam">
            <h3>Our Team</h3>
            <p class="ringkasan">
                Perkenalkan
            </p>
            <div class="tim">
              <div>
                <img src="asset/Elsa_1.jpg" />
                <h6>Elsa Maya Bahri</h6>
                <span>22082010226/F</span>
              </div>
              <div>
                <img src="asset/Rikha_1.jpg" />
                <h6>Rikha Maisya Kotalima</h6>
                <span>22082010232/F</span>
              </div>
              <div>
                <img src="asset/Raihan_1.jpg" />
                <h6>Muhammad Raihan Laisa</h6>
                <span>22082010248/F</span>
              </div>
            </div>
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
          <div class="copyright">&copy; 2024 Gresik Discovery</div>
        </div>
      </footer>
    </div>
    <script src="javascript.js"></script>
</body>
</html>