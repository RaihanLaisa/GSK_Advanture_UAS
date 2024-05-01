<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
<header>
        <h1>Admin Page - Web Wisata</h1>
    </header>
    <nav>
        <a href="#">Beranda</a>
        <a href="#">Paket Wisata</a>
        <a href="#">Pelanggan</a>
        <a href="#">Pemesanan</a>
        <a href="#">Logout</a>
    </nav>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
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

</body>
</html>