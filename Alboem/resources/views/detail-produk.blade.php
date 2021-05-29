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
  <!-- IMPORT ANIMATE ON SCREEN  -->

  <!-- IMPORT MANUAL STYLE -->
  <link rel='stylesheet' type='text/css' media='screen' href='./assets/style/style.css'>
</head>

<body >
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
        <!-- UNCOMMENT UNTUK MENAMPILKAN TOMBOL LOGIN/DAFTAR -->

        <!-- <li class="nav-item mx-md-3 mx-0">
          <a class="nav-link font-weight-bold form-font text-body mt-1 text-center" href="#">Login</a>
        </li>
        <li class="nav-item mx-md-3  mx-0">
          <a class="nav-link font-weight-bold form-font text-body register-button mt-1 text-center" href="#">Daftar</a>
        </li> -->
        <li class="nav-item dropdown mx-md-3 mx-0">
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
        </li>

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
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <img src="assets/img/detail.png" class="w-100" alt="">
                <div id="product-carousel" class="owl-carousel owl-theme mt-4 mx-md-5 mx-auto  w-25">
                  <div class="item"><img src="assets/img/detail2.png" class="w-100" alt=""></div>
                  <div class="item"><img src="assets/img/detail2.png" class="w-100" alt=""></div>
                  <div class="item"><img src="assets/img/detail2.png" class="w-100" alt=""></div>    
              </div>
            </div>
            <div class="col-md-6 mt-3 mt-md-0">
                <h5 class="font-weight-bold">BTS<h5>
                <div>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <i class="far fa-star star-icon"></i>
                    <small class="text-secondary">( 3 costumer review )</small>
                </div>
                <h5 class="font-weight-bold text-red">Rp 500.000<h5>
                <div class="content w-responsive-75 mb-3 border-content pt-4 mt-3">
                Capture the memories with this reusable film camera that uses 35mm film. Just like it's range of disposable cameras, M35 has fixed focus lens, manual film winding an....
                  
              </div>
              <a href="#" class="content text-dark"><u> SEE MORE</u></a>
              <div class="mt-3 border-content pt-4  w-responsive-75">
                <form action="" class="d-flex">
                  <input value="1" type="number" class="qty-form text-center">
                  <button class="btn primary-bg text-white ml-3 font-weight-bold">Tambah Ke Keranjang</button>
                </form>
              </div>
              <h5 class="text-red font-weight-bold cursor-pointer"><i class="fas fa-heart mr-3"></i>Add to Wishlist</h5>
              <div class="content border-content w-responsive-75 pt-4 mt-4">
                <p>Categories: KPOP</p>
                <p class="mt-1"> Tags: EXO</p>
               
              </div>
            </div>
        </div>
    </div>
</section>
<section>
  <div class="container">
    <nav>
      <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <a class="nav-link active font-weight-bold" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
        <a class="nav-link  font-weight-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
     
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active content w-responsive-75 py-3 border-content w-100" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        Meet the M35 - it's Kodak's all-new beginner friendly 35mm point and shoot film camera!! <br>
        With its eye-catching modern retro design, the M35 is Kodak's answer to the growing analogue photography revival! 
        <br><br><br>
        They've taken it back to basics & created a super simple to use compact with manual film loading /wind /rewind & a flash! It's suitable for complete beginners & long term film enthusiasts of ALL levels 🙌. You'll simply load your batteries & film, point...& shoot! 📸
        <br><br>
        Also in: Green, Yellow & Red
        <br>
        ⚒ Specs:
        <ul>
          <li>31mm f10 fixed focus lens</li>
          <li>Shutter: 1/120secs</li>
          <li>Flash</li>
          <li>Manual wind/rewind</li>
        </ul> 
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    </div>
    <div class="border-content pt-3">
      <h4 class="font-weight-bold text-center">Produk Serupa</h4>
      <div class="row mt-5">
      
        <div class="col-md-4 p-5">
          <img src="assets/img/another1.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">new series blackpink</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">Blackpink</p>
          <p class="font-weight-bold text-red mt-2">Rp 325.000</p>
        </div>
        <div class="col-md-4 p-5">
          <img src="assets/img/another2.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">New album of billie</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">Billie Eilish</p>
          <p class="font-weight-bold text-red mt-2">Rp 455.000</p>
        </div>
        <div class="col-md-4 p-5  ">
          <img src="assets/img/another3.png" class="w-100 d-block mx-auto" alt="">
          <div class="d-flex justify-content-between mt-2">
            <p class="text-secondary">See new of jastin</p>
            <div>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon"></i>
              <i class="far fa-star star-icon disabled"></i>
              <!-- TAMBAHKAN CLASS DISABLED JIKA BINTANG BERWARNA ABU  -->
              <i class="far fa-star star-icon disabled"></i>
            </div>
          </div>
          <p class="mt-2">JASTIN BIBER </p>
          <p class="font-weight-bold text-red mt-2">Rp 275.000</p>
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