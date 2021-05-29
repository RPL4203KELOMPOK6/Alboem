<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alboem</title>
  <!-- IMPORT JQUERY -->
  <script src='./assets/js/jquery-3.4.1.min.js'></script>
  <!-- IMPORT POPPER FOR DROPDOWN NAVBAR -->
  <script src='./assets/js/popper.min.js'></script>
  <!-- IMPORT POPPER FOR BOOTSTRAP JS NAVBAR -->
  <script src='./assets/js/bootstrap.min.js'></script>


  <!-- IMPORT BOOTSTRAP -->
  <link rel='stylesheet' type='text/css' media='screen' href='./assets/style/bootstrap.css'>
  <!-- IMPORT OWL CAROUSEL -->
  <link rel="stylesheet" href="./assets/style/owl.carousel.min.css">
  <link rel="stylesheet" href="./assets/style/owl.theme.default.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href='./assets/style/animate.css'>
  <script src="./assets/js/owl.carousel.min.js"></script>

  <!-- IMPORT FONT AWESOME LIBRARY ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- IMPORT MANUAL STYLE -->
  <link rel='stylesheet' type='text/css' media='screen' href='./assets/style/style.css'>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light container ">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  navbar-nav navbar-center mx-auto" id="navbarSupportedContent">
      <form class="form-inline my-2 mx-auto  my-lg-0">
        <div class="input-group">
          <input class="form-control py-0  search-bar border border-dark rounded-pill" id="example-search-input">
          <span class="input-group-append">
            <button id="filtersubmit" class="border-0"><i class="fa fa-search search-icon text-body"></i></button>

        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item active mx-md-3 mx-0">
          <a class="nav-link d-flex" href="#"><img src="assets/img/Group.png" alt=""><span class="d-block text-body mt-1 ml-2 font-weight-bold d-md-none">Cart</span></a>
        </li>
        <li class="nav-item mx-md-3 mx-0">
          <a class="nav-link d-flex" href="#"><img src="assets/img/favorite-24px 1.png" alt=""><span class="d-block  text-body mt-1 ml-2 font-weight-bold d-md-none">Favorite</span></a>
        </li>
        <li class="nav-item mx-md-3 mx-0">
          <a class="nav-link d-flex" href="#"><img src="assets/img/clarity_notification-solid-badged.png" alt=""><span class="d-block  text-body mt-1 ml-2 font-weight-bold d-md-none">Notification</span></a>
        </li>
        <li class="nav-item mx-md-3 mx-0">
          <a class="nav-link font-weight-bold form-font text-body mt-1 text-center" href="#">Login</a>
        </li>
        <li class="nav-item mx-md-3  mx-0">
          <a class="nav-link font-weight-bold form-font text-body register-button mt-1 text-center" href="#">Daftar</a>
        </li>
        <!-- UNCOMMENT UNTUK MENAMPILKAN NAVIGASI PROFILE -->

        <!-- <li class="nav-item dropdown mx-md-3 mx-0">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="assets/img/account.png" alt="">
          </a>
          <div class="dropdown-menu p-4" aria-labelledby="navbarDropdown">
           <div class="d-flex shadow-sm align-item-center rounded-small p-2">
            <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt=""> <span class="text-gray ml-3 font-weight-bold"> John Doe</span>
           </div>
           <a href="#">
             <div  class="shadow-sm mt-2 rounded-small p-2">
               <p class="text-gray font-weight-bold">Your Favorite Shop</p>
             </div>
            </a>
            <a href="#">
              <div  class="shadow-sm mt-2 rounded-small p-2">
                <p class="text-gray font-weight-bold">Your Transaction</p>
              </div>
             </a>
             <a href="#">
              <div  class="shadow-sm mt-2 rounded-small p-2">
                <p class="text-gray font-weight-bold">Setting</p>
              </div>
             </a>
             <p class="text-gray font-weight-bold text-right mt-4 cursor-pointer">Logout <i class="ml-1 fa fa-sign-out-alt"></i></p>
          </div>
        </li> -->

      </ul>

    </div>

  </nav>
  <ul class="nav justify-content-center primary-bg">
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold" href="#">Beranda</a>
    </li>
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold" href="#">Kategori</a>
    </li>
    <li class="nav-item mx-md-4">
      <a class="nav-link  text-white font-weight-bold" href="#">Tentang Kami</a>
    </li>
  </ul>
  <section>
    <!-- CAROUSEL HERO -->
    <div class="container">
      <div id="carousel-hero" class="owl-carousel owl-theme mt-5">
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <!-- GAMBAR -->
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <!-- CAPTION -->
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="item hero-img-carousel ">
          <div class="position-relative">
            <img class="w-100 " src="assets/img/highlight1 1.png" alt="">
            <p class="text-white carousel-caption font-weight-bold">Lorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white position-relative">
    <img src="assets/img/Group 8901.png" class="wave w-auto d-none d-md-block position-absolute top-right" alt="">
    <img src="assets/img/Group 525.png" class="wave w-auto d-none d-md-block position-absolute bottom-left" alt="">

    <div class="container pb-big">
      <h3 class="font-weight-bold pt-5">Rekomendasi Produk</h3>
      <p>Spesial untuk anda</p>
      <div class="primary-bg  border-header mt-3"></div>
      <div class="row mt-medium">
        <div class="col-md-6">
          <img src="assets/img/Image.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">Lovesick Girls</h4>
          <p class="text-secondary">Lorem ipsum de amet</p>
        </div>
        <div class="col-md-6 mt-4 mt-md-0">
          <img src="assets/img/Image-1.png" class="w-100" alt="">
          <h4 class="font-weight-bold mt-4">Billie ellish</h4>
          <p class="text-secondary">Lorem ipsum de amet</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4">
          <img src="assets/img/examine1.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4 ml-4">BE</h5>
          <p class="text-secondary  ml-4">BTS</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/examine2.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">Lovesick Girls</h5>
          <p class="text-secondary  ml-4">Blackpink</p>
        </div>
        <div class="col-md-4">
          <img src="assets/img/examine3.png" class="w-100" alt="">
          <h5 class="font-weight-bold mt-4  ml-4">Lorem</h5>
          <p class="text-secondary  ml-4">EXO</p>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5">
    <div class="container bg-white rounded-lg shadow-lg py-3">
      <h2 class="text-center header-color font-weight-bold mt-3">Kenapa Alboem</h2>
      <div class="row">
        <div class="col-md-4">
          <img src="assets/img/dollar.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Harga Terjangkau</h>
        </div>
        <div class="col-md-4">
          <img src="assets/img/transaction.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Transaksi Mudah</h>

        </div>
        <div class="col-md-4">
          <img src="assets/img/secure.png" class=" d-block mx-auto" alt="">
          <h4 class="text-center mt-4 font-weight-bold">Transaksi Aman</h>
        </div>
      </div>
      
    </div>
    <div class="container">
      <h2 class="text-center header-color font-weight-bold mt-5">Testimonials</h2>
<div id="carousel-review" class="owl-carousel owl-theme mt-5" >
  <!-- TAMBAHKAN DIV CLASS ITEM BARU UNTUK MENAMBAHKAN REVIEW -->
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>  
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>  
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Dadang Konelo</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Seoul, Indonesia</small>
          </div>  
            <div class="ml-auto">
            <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">"Terpercaya!"</p>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="card review">
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-1.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Wanda Wibisono</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bandung, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
        <!-- DESKRIPSI -->
        <p class="card-text mt-3">“I like it because I like to buy original music and i can explore the new album.”</p>
      </div>
    </div>
  </div>
   <div class="item">
    <div class="card review" >
      <div class="card-body">
        <div class="d-flex">
          <img src="assets/img/Ellipse 175-2.png" class="photo-profile rounded-circle" alt="">
          <div class="ml-3">
            <!-- NAMA REVIEWER -->
            <h6 class=" mt-1 card-title font-weight-bold mb-0">Raillya Rachell</h6>
            <!-- ALAMAT REVIEWER -->
            <small class="text-secondary">Bekasi, Indonesia</small>
          </div>  
            <div class="ml-auto">
              <!-- BINTANG -->
              <span class=" mr-2">4.5</span>
              <i class="fas  fa-star review-icon"></i>
            </div>    
        </div>
         <!-- DESKRIPSI -->
        <p class="card-text mt-3">“This is very good for my hobbies”.</p>
      </div>
    </div>
  </div>
</div>
    </div>
  </section>
  <section class="footer mt-3 primary-bg text-white">
    <div class="container pt-4">
      <div class="d-flex justify-content-between flex-column flex-md-row">
        <div>
          <h3 class="font-weight-bold ">Alboem</h3>
          <p class="font-weight-bold"><i>Our tim menyediakan layanan platform jual beli album</i></p>
        </div>
        <div class="mr-5 mt-3 mt-md-0">
          <h5 class="font-weight-bold ">Find Us</h5>
          <a href="#"> <img src="assets/img/facebook-24px 1.png" alt=""></a>
          <a href="#" class="ml-2"> <img src="assets/img/youtube 1.png" alt=""></a>
          <a href="#" class="ml-2"> <img src="assets/img/Frame.png" alt=""></a>
          
        </div>
      </div>
      <div class="d-flex mt-5">
        <p class="font-weight-bold">Adress</p>
        <span class="font-weight-bold ml-3">:Perumahan Buah Batu H44</span>
      </div>
      <div class="d-flex  mt-2">
        <p class="font-weight-bold">Phone</p>
        <span class="font-weight-bold ml-3">:08123456789</span>
      </div>
      <div class="d-flex mt-2">
        <p class="font-weight-bold">Email</p>
        <span class="font-weight-bold ml-3">:rpl4203kelompok6@gmail.com</span>
      </div>
  
    </div>
    <div class="disclaimer mt-5">
      <p class="text-center py-1 font-weight-light content"><i class="far fa-copyright mr-1"></i> 2020. Powered by Alboem</p>
    </div>
  </section>
  <script src="assets/js/main.js"></script>
</body>

</html>