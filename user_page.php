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
   <link rel="stylesheet" href="style2.css">

</head>
<body>

<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
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
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>
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
          <div class="copyright">&copy; 2024 Gresik Discovery</div>
        </div>
</footer>

</body>
</html>