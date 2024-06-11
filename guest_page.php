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
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
      integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>

    

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



    <style>
      body {
        font-family: "Work Sans", sans-serif;
        background-color: whitesmoke;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .signin-container {
        padding: 48px 24px;
        width: 400px;
        background: #ffffff;
        border: 1px solid black;
        border-radius: 8px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.25);
      }
      .signin-title {
        font-weight: 500;
        font-size: 25px;
        line-height: 29px;
        /* Brand/Indigo/Marine - #000032 */
        color: #000032;
        margin-bottom: 41px;
      }
      .input-email {
        padding: 13px 20px;
        width: 352px;
        height: 45px;
        background: #ffffff;
        border: 1.5px solid #000032;
        border-radius: 8px;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #b3b3b3;
        margin-bottom: 15px;
      }
      .input-password {
        padding: 13px 20px;
        width: 352px;
        height: 45px;
        background: #ffffff;
        border: 1.5px solid #000032;
        border-radius: 8px;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #b3b3b3;
      }
      .mb-12 {
        margin-bottom: 12px;
      }
      .mb-24 {
        /* margin-bottom: 24px; */
        margin-top: 24px;
        margin-bottom: 24px;
      }
      .signin-btn {
        padding: 16px 24px;
        width: 352px;
        height: 54px;
        border-radius: 8px;
      }
      .signup-btn {
        width: 352px;
        height: 35px;
        font-weight: 500;
        font-size: 16px;
        line-height: 19px;
        color: #f6a973;
      }
      .sosmed-btn {
        padding: 0px 12px;
        width: 352px;
        height: 40px;
        background: #f2f2f2;
        border-radius: 4px;
      }
      .navbar-brand {
        font-family: "Open Sans";
        font-style: normal;
        font-weight: 700;
        font-size: 35px;
        line-height: 45px;
      }

      .d-flex {
        width: 30vw;
      }

      .search-input {
        border-right: none;
        border-top-left-radius: 24px;
        border-bottom-left-radius: 24px;
      }
      .search-btn {
        background-color: #fff;
        border-left: none;
        border-top-right-radius: 24px;
        border-bottom-right-radius: 24px;
      }

      .footer {
        padding: 100px 20px 15px;
        background-color: #f44336;
        color: #fff;
      }
      .footer-logo {
        width: 150px;
        margin-top: 15px;
        margin-bottom: 15px;
      }
      .footer h4 {
        text-align: left;
        margin-top: 15px;
        margin-bottom: 25px;
      }
      .footer p {
        font-size: 12px;
        text-align: justify;
        padding-right: 35px;
      }

      .footer .row .fa {
        padding-right: 20px;
        font-size: 15px;
      }
      .footer hr {
        margin-top: 10px;
        background: #efefef;
      }

      .fa-heart {
        margin: 0 5px;
        color: #f44336;
      }

      .footer .copyright {
        text-align: center;
      }

      .btn-primary {
        margin: 10px auto;
        width: auto;
        padding-top: 0px;
        display: block;
      }

      .alert-info {
        background-color: #f6a973;
        position: fixed;
        bottom: 0px;
        right: 10px;
        width: 10vw;
        z-index: 1000;
      }

      .bi-bell {
        background-color: tra;
        border: none;
        height: 24px;
        width: 24px;
        vertical-align: middle;
        margin-left: 3rem;
      }

      .btn-info {
        margin-left: 1rem;
      }

      .d-flex {
        width: 50vw;
      }

      .color-1 {
        color: #f49d1a;
      }
      .color-2 {
        color: #ffe15d;
      }

      .no-hovered-link {
        text-decoration: none;
        color: black;
      }
      .no-hovered-link:hover {
        text-decoration: underline;
        color: blue;
      }

      @media screen and (max-width: 1210px) {
        .d-flex {
          width: 35vw;
        }
      }

      @media screen and (max-width: 992px) {
        .d-flex {
          width: 90vw;
          margin-bottom: 20px;
        }
      }

      @media (max-width: 767px) {
        .d-flex {
          width: 90vw;
          margin-bottom: 20px;
        }
        .w-90vw {
          width: 90vw !important;
        }
        .signin-container {
          width: 100%;
        }
        .input-email {
          width: 100%;
        }
        .input-password {
          width: 100%;
        }
        .signin-btn {
          width: 100%;
        }
        .signup-btn {
          width: 100%;
        }
        .sosmed-btn {
          width: 100%;
        }
        .alert-info{
          width: 40%;
        }
      }
      .bi-search {
        margin-left: -2rem;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .btn-outline-warning {
        margin-left: 1rem;
      }

      .explanation {
        color: #eb6440;
        text-align: center;
        margin-top: 3rem;
        margin-bottom: 3rem;
      }

      .btn-link {
        display: flex;
        justify-content: right;
        align-items: flex-end;
        color: #fff;
      }

      .btn-link:hover{
        color: white !important;
      }

      .bi-envelope {
        margin-right: 0.2rem;
      }

      .bi-geo-alt {
        margin-right: 0.2rem;
      }

      
      
      .services {
    margin: 5rem 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
  }
  
  .services .title {
    font-size: 2rem;
  }
  
  .services .cards {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
        -ms-flex-pack: justify;
            justify-content: space-between;
    gap: 4rem;
    margin-top: 2rem;
  }
  
  .services .cards .card {
    height: 12rem;
    padding: 3rem 1rem;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
        -ms-flex-direction: column;
            flex-direction: column;
    -webkit-box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius: 1rem;
  }
  .services .cards .card .icon {
    margin-bottom: 1rem;
  }
  
  .services .cards .card .title {
    margin-bottom: 1rem;
    font-size: 1.4rem;
  }
  
  .services .cards .card p {
    text-align: center;
  }


  .destination {
  margin: 5rem 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.destination .title {
  font-size: 2rem;
  margin-bottom: 2rem;
}

.destination .cards {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  gap: 4rem;
}

.destination .cards .image img {
  height: 18rem;
  width: 18rem;
}

.destination .cards .content {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin: 0.5rem 0;
}

.destination .cards .time {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.destination .cards .time i {
  margin-right: 1rem;
}


/* Section Services Start */
.services{
    background: #f9f9f9;
    margin-top: 50px;
}
.services .card{
    box-shadow: rgba(0,0,0,0.1) 0px 4px 12px;
    border: none;
    cursor: pointer;
}
.services .card i{
    font-size: 80px;
    text-align: center;
    color: #ffa500;
    margin-top: 20px;
}
.services .card .card-body h3{
    font-weight: 600;
}
.services .card .card-body{
    text-align: center;
}
/* Section Services End */


/* Section code */
    </style>
  </head>
  <body class="screen">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <span class="color-1">Travellin</span><span class="color-2">Web</span>
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
              <a class="no-hovered-link nav-link" href="index.html"
                >Main Menu</a
              >
            </li>
            <li class="nav-item">
              <a class="no-hovered-link nav-link" href="home.html">Home</a>
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <i class="bi bi-search"></i>
          </form>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="#"
            class="bi bi-bell"
            viewBox="0 0 16 16"
          >
            <path
              d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
            />
          </svg>
          <button
            class="btn btn-outline-warning"
            data-bs-toggle="modal"
            data-bs-target="#modaltravellinweb"
            type="button"
          >
            Sign in
          </button>
          <script>
            function changeButtonDesc() {
              let btnElement = document.getElementById("btn");
              if (btnElement.innerHTML == "LOGOUT") {
                btnElement.innerHTML = "SIGNOUT";
              } else {
                btnElement.innerHTML = "LOGOUT";
              }
            }
          </script>
          <button id="btn" class="btn btn-info" onclick="changeButtonDesc()">
            SIGNOUT
          </button>
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
      <div class="modal-dialog d-flex justify-content-center m-auto">
        <div class="modal-content w-auto w-90vw">
          <div class="modal-body">
            <div class="signin-container">
              <div style="display: flex; justify-content: space-between">
                <div class="signin-title">Sign In</div>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                  style="position: relative; bottom: 35px; left: 15px"
                ></button>
              </div>
              <div class="mb-24">
                <div>
                  <input
                    class="input-email"
                    type="text"
                    placeholder="Enter phone number or email address"
                  />
                </div>
                <div>
                  <input
                    class="input-password"
                    type="password"
                    placeholder="Enter password"
                  />
                </div>
              </div>
              <button
                type="button"
                class="btn btn-secondary btn-secondary signin-btn mb-24"
              >
                Sign in
              </button>
              <button type="button" class="btn btn-light signup-btn mb-24">
                Sign up
              </button>
              <div class="mb-24" style="text-align: center">or</div>
              <button
                type="button"
                class="btn btn-secondary btn-light sosmed-btn mb-12"
              >
                <i class="bi bi-google"></i>
                Continue with Google
              </button>
              <button
                type="button"
                class="btn btn-secondary btn-light sosmed-btn mb-12"
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
            src="asset/Banyu Urip Mangrove Center.jpg "
            width="500vw"
            height="500vx"
            class="d-block w-100"
            alt="Nusa Penida"
          />
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img
            src="asset/Dynasty Water World.jpg"
            width="500vw"
            height="500vx"
            class="d-block w-100"
            alt="Candi Borobudur"
          />
        </div>
        <div class="carousel-item" data-bs-interval="10000">
          <img
            src="asset/Pantai Karang Kering.jpg"
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
      Let's Visit Destination Of Indonesia
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
        <a href="contact-us.html" class="btn btn-link" role="button">Contact Us</a>
      </div>
      <hr />
      <p class="copyright">Psalm The Royal Company © 2022</p>
    </div>
  </section>
</html>
