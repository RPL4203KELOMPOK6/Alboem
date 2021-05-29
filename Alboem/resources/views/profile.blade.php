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
            <div class="row">
                <div class="col-md-4 p-4">
                    <div class="bg-white p-3 sticky-top ">
                        <h6 class="font-weight-bold ml-3">Akun Saya</h6>
                        <ul class="nav flex-column profile-sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="#">Akun Saya</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Wallet</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Promosi / Hot Deals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Lacak Pesanan</a>
                            </li>                                  
                            <li class="nav-item">
                                <h6 class="font-weight-bold ml-3 mt-3">Share</h6>
                               <a href="#"> <img class="mx-1 ml-3" src="assets/img/Vector.png" alt=""></a>
                               <a href="#"><img class="mx-1" src="assets/img/youtube 2.png" alt=""></a>
                               <a href="#"><img class="mx-1" src="assets/img/ig.png" alt=""></a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 p-4">
                    <div class="profile-data bg-white pb-3">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3">Data Profil</h5>
                        </div>
                        <dl class="row content data mt-3">
                            <dd class="col-md-3"><span class="ml-4">Nama</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Email</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">No Hp</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Tanggal Lahir</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                        </dl>
                        <button class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold"> Ubah
                            Profil</button>
                    </div>
                    <div class="profile-data bg-white pb-3 mt-5">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3">Alamat Pengiriman</h5>
                        </div>
                        <p class="content font-weight-bold ml-4 mt-2">Alamat 1</p>
                        <div class="row content data mt-3">
                           <div class="col-md-6">
                                <small class="text-secondary ml-4">Nama Penerima</small>
                                <p class="content data ml-4">Bidadari</p>
                           </div>
                           <div class="col-md-6">
                            <small class="text-secondary ml-4">No Hp</small>
                            <p class="content data ml-4">085262947577</p>
                        </div>
                        </div>
                        <button class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold"> Ubah
                           </button>
                    </div>
                    <a href="address.html">
                        <button class="btn add-address-bg mt-3 text-white font-weight-bold d-block mx-auto mx-md-0"> Tambah Alamat Baru </button>

                    </a>

                </div>
            </div>
        </div>
    </section>
    <section class="partner-info container border-content py-5">
    <div class="row">
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Alamat Pengiriman</h5>
            <img src="assets/img/image 4.png" class="w-75 mt-5 d-block mx-auto" alt="">
        </div>
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Jasa Pengiriman</h5>
            <img src="assets/img/image 5.png" class="w-50 mt-5 d-block mx-auto" alt="">
        </div>
        <div class="col-md-4 p-4">
            <h5 class="font-weight-bold text-center">Partner</h5>
            <img src="assets/img/image 6.png" class="w-50 mt-5 d-block mx-auto" alt="">
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
            <p class="text-center py-1 font-weight-light content"><i class="far fa-copyright mr-1"></i> 2020. Powered by
                Alboem</p>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
</body>

</html>