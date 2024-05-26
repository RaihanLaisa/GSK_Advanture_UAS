<?php
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name']))
{header('location:login_form.php');}
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
            <ul>   <!--NAV BAR-->
                <li><a href="#home">Home</a></li>
                <li><a href="#aboutus">About Us</a></li>
                <li>
                <a href="#">Destinasi <i class="ti-angle-down"></i></a>
                <ul class="submenu">
                    <li><a href="Pantai">Pantai</a></li>
                    <li><a href="Sejarah">Sejarah</a></li>
              </ul>
              </li>
                      <!-- NAV BAR-->
              <li>
                <a href="#">Aktivitas <i class="ti-angle-down"></i></a>
                <ul class="submenu">
                    <li><a href="Oleh-oleh">Oleh-oleh</a></li>
                    <li><a href="Event">Event</a></li>
                    <li><a href="Tips Liburan">Tips Liburan</a></li>
              </ul>
              </li>     <!-- NAV BAR -->
                <li><a href="#blog">Blog</a></li>
                <li><a href="#Rekomendasi">Rekomendasi</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
             
            </ul>
        </div>
      </div>
    </nav>
      <!-- HOME -->
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
            <a href="user2_page.php" class="tombol">MORE INFO</a>
          </p>
        </div>
        <!-- ABOUT US -->
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
         <!-- Galerry -->
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
          </nav>
     <!-- Oleh oleh-->
        </header>
        </section>
        <section id="Oleh-oleh" class="oleh-oleh section-padding">
        <div class="container">
            <h1>Oleh-oleh</h1>
            <div class="item">
            
                <img src="img/oleh-oleh/item1.jpg" alt="Item 1">
                <h2>Item 1</h2>
                <p>Deskripsi item 1.</p>
            </div>
            <div class="item">
                <img src="img/oleh-oleh/item2.jpg" alt="Item 2">
                <h2>Item 2</h2>
                <p>Deskripsi item 2.</p>
            </div>
            <div class="item">
                <img src="img/oleh-oleh/item3.jpg" alt="Item 3">
                <h2>Item 3</h2>
                <p>Deskripsi item 3.</p>
            </div>
        </div>
         <!-- -->
  <!-- BLOG -->
    </section>
    <script src="js/main.js"></script>
</body>
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
    <img src="asset/1 hari.jpg">
    <div class="card-body">
      <h3>1 Hari
      <p>Wisata Bukit Kapur Gosari,klenteng kim hin, dan  bajak laut!</p>
      <div class="star">
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star checked"></i>
        <i class="fa-solid fa-star "></i>
        <i class="fa-solid fa-star "></i>
      </div>
      <h6>Price: <strong>300.000</strong></h6>
      <button id="bookNowBtn" class="button" onclick="document.getElementById('book').style.display = 'block'">Selengkapnya</button>
    </div>
  </div>

  <!-- Modal -->
  <div id="book" class="modal">
  <div class="modal-content">
    <span class="close" id="closeBtn">&times;</span>
    <h2>Travel Plan</h2>
    <p>Berikut adalah rencana perjalanan 3 hari di Gresik, Jawa Timur, dengan anggaran yang ramah di kantong:</p>
    <!-- Informasi perjalanan -->
    <ul>
      <li> 1.	Bukit Kapur Gosari
•	Lokasi: Gosari, Gresik, Jawa Timur
•	Tiket Masuk: Sekitar Rp 5.000 - Rp 10.000 per orang
•	Souvenir: Tersedia berbagai macam souvenir lokal di sekitar area wisata
</li>
      <li>2.	Klenteng Kim Hin
•	Lokasi: Jl. A. Yani No. 93, Gresik, Jawa Timur
•	Tiket Masuk: Biasanya gratis, namun sumbangan sukarela dapat diberikan
•	Souvenir: Mungkin tersedia di sekitar klenteng
</li>
      <li>3.	Bajak Laut
•	Lokasi: Gresik, Jawa Timur
•	Tiket Masuk: Tergantung pada atraksi yang ingin dinikmati, rata-rata sekitar Rp 10.000 - Rp 20.000 per orang
•	Souvenir: Mungkin tersedia di sekitar area wisata

</li>
</li>[Transportasi Kesana:
•	Anda dapat menggunakan mobil pribadi, taksi, atau menyewa mobil untuk perjalanan dari lokasi Anda ke destinasi wisata. Untuk transportasi lokal di sekitar destinasi, mungkin tersedia ojek atau angkutan umum.
Perhatikan Keadaan Cuaca dan Jam Buka:
•	Untuk ketiga wisata buka pukul 08.00-17.00 WIB.
]
    </ul>
  </div>
</div>






<!-- 2 hari -->
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="asset/2 hari.jpg">
             
              <div class="card-body">
                <h3>2 Hari 
                <p>Hari Pertama: Bukit Jamur dan Pulau mangare</p>
                <p>Hari Kedua: Wagos wisata alam dan Pantai</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                <h6>Price: <strong>500.000</strong></h6>
                <a href="#book">Selengkapnya</a>
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

  <!-- CONTACT -->
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