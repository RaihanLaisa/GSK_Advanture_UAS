<!DOCTYPE html>
<html>
  <head>
    <title>Guest page</title>
    <meta
      name="viewport"
      content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="HandheldFriendly" content="true" />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
   
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="css/guest.css">
   
    

    <!-- Boostrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!-- Font Family Work Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <!-- Font Family Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Roboto:wght@300&family=Source+Sans+Pro:wght@200&display=swap"
      rel="stylesheet"
    />
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>





    </style>
  </head>
  <body class="screen">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <span class="color-1">Gresik</span><span class="color-2">Discovery</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="no-hovered-link nav-link" href="guest_page.php"
                >Main Menu</a
              >
            </li>
            <li class="nav-item">
              <a class="no-hovered-link nav-link" href="guest_page.php">Home</a>
            </li>
          </ul>
          
          <a class="btn btn-light ms-2 bg-success" href="register_form.php">Login</a>
        </div>
      </div>
    </nav>
    <!-- Modal -->
    <div
      class="modal fade"
      id="modaltravellinweb"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      
             
            
             
              
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="#1978D2"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  />
                </svg>
                Continue with Facebook
              </button>
              <button
                type="button"
                class="btn btn-secondary btn-light sosmed-btn"
              >
                <i class="bi bi-apple"></i>
                Continue with Apple
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- carousel -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide carousel-fade"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img
            src="asset/bukitjamurbaru.jpg "
            width="500vw"
            height="500vx"
            class="d-block w-100"
            alt="Nusa Penida"
          />
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img
            src="asset/Bukit Kapur Sekapuk.jpg"
            width="500vw"
            height="500vx"
            class="d-block w-100"
            alt="Candi Borobudur"
          />
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img
            src="asset/Dynasty Water World.jpg"
            width="500vw"
            height="500vx"
            class="d-block w-100"
            alt="Gunung Bromo"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- alert -->
    <div class="alert alert-info" role="alert">
      Let's Visit Destination Of Gresik
    </div>
    
    
    
    <!-- Section Services Start -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>S</span>ervices</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Adventures</h3>
                <p>Dapat menemukan dan menjelajahi berbagai kegiatan petualangan yang tersedia di berbagai destinasi. </p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Destinasi</h3>
                <p>Menyediakan penjelasan lengkap tentang berbagai destinasi wisata yang ada, mulai dari sejarah, pantai, bukit, hingga kegiatan yang dapat dikunjungi.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3> Rekomendai Perjalanan</h3>
                <p> Disesuaikan dengan preferensi pengguna, seperti durasi perjalanan, jenis kegiatan yang diminati, dan anggaran yang dimiliki.</p>
              </div>
            </div>

    </section>
    <!-- Section Services End -->
  
  
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
         
          <h4>Contact</h4>
          <p><i class="bi bi-envelope"></i> 10@gmail.com</p>
          <p><i class="bi bi-geo-alt"></i>Gresik, Indonesia</p>
        </div>
        <div class="col-md-3">
          <h4>Follow Us on</h4>
          <a href="https://www.instagram.com/rkamaisya?igsh=NWh3amY0czI3Mzdw&utm_source=qr "
            ><img
              id="instagramLogo"
              src="https://img.icons8.com/3d-fluency/344/instagram-new.png"
              width="20px"
              alt="instagram link Rk's"
          /></a>
          <a href="https://www.instagram.com/elsamayaa._?igsh=aDl6ZjNhMGR6eXR4"
            ><img
            id="instagramLogo"
            src="https://img.icons8.com/3d-fluency/344/instagram-new.png"
              width="20px"
              alt="instagram link Els"
          /></a>
          <a href="https://www.instagram.com/raihanlaisa?igsh=MTdpdnl3bmx5ZmQ4NQ=="
            ><img
            id="instagramLogo"
              src="https://img.icons8.com/3d-fluency/344/instagram-new.png"
              width="20px"
              alt="instagram link Rhn's"
          /></a>
        </div>
        
      </div>
      <hr />
      <p class="copyright">Kelompok 10 © 2024</p>
    </div>
  </section>
</html>
