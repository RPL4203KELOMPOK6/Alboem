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
            <li class="nav-item profile-nav dropdown mx-md-3 mx-0">
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
            <a class="nav-link  text-white font-weight-bold dropdown-toggle "  data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" href="#">Kategori</a>
            <div class="dropdown-menu category-menu primary-bg dropdown-menu-right pb-5 px-3" style="left: -130px;">
              <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">New Album</a>
              <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Favourite Album </a>
              <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Top Seller</a>
              <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Old Album</a>
              <a class="d-block bg-black mt-3 px-3 py-1 rounded text-white font-weight-bold" href="#">Korean Album</a>
            </div>
          </li>
        <li class="nav-item mx-md-4">
            <a class="nav-link  text-white font-weight-bold" href="#">Tentang Kami</a>
        </li>
    </ul>
    <section>
        <div class="container">
            <div class="bg-white p-3 mt-4 shadow">
                <p class="font-weight-bold"><i class="fas fa-map-marker-alt"></i> Alamat Pengiriman</p>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <p class="font-weight-bold w-50">Jhon Doe (+62)82113261721</p>
                    </div>
                    <div class="col-md-8 mt-3 mt-md-0">
                        <p class="font-weight-bold text-secondary">Jl. Telekomunikasi No. 1, Terusan Buahbatu - Bojongsoang, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 4025</p>
                    </div>
                </div>
                <button class="btn primary-bg text-white  mt-5 font-weight-bold"> Ubah
                  Alamat</button>
            </div>
            <div class="bg-white p-3 mt-4 shadow table-responsive">
              <h5 class="font-weight-bold">Produk Pesanan</h5>
              <table class="table table-borderless">
                <thead>
                  <tr class="text-muted">
                    <th scope="col"><i class="fas fa-store-alt"></i> iNeedStore</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Subtotal Produk</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- ITEM PRODUK -->
                  <tr  class="detail-produk">
                    <td class="d-flex align-item-center">
                      <img src="assets/img/detail2.png" class="produk-pesan-icon" alt="">
                      <p class="ml-3"><span class="font-weight-bold">EXO</span> Vol.3 EX'ACT Album</p>
                    </td>
                    <td class="font-weight-bold">Rp.130.000</td>
                    <td class="font-weight-bold">1</td>
                    <td class="font-weight-bold">Rp.130.000</td>
                  </tr>
                  <!-- ITEM PRODUK -->
                  <tr  class="detail-produk">
                    <td class="d-flex align-item-center">
                      <img src="assets/img/product2.png" class="produk-pesan-icon" alt="">
                      <p class="ml-3"><span class="font-weight-bold">Rihanna</span> Anti Album</p>
                    </td>
                    <td class="font-weight-bold">Rp.150.000</td>
                    <td class="font-weight-bold">1</td>
                    <td class="font-weight-bold">Rp.150.000</td>
                  </tr>
                  <!-- SELECT OPSI PENGIRIMAN -->
                  <tr class="border-bottom border-dark">
                    <td class="primary-color font-weight-bold">
                     Opsi Pengiriman:
                    </td>
                    <td class="font-weight-bold">
                      <select class="p-0 w-responsive-50 font-weight-bold text-black form-control-sm border-0">
                        <option>Reguler</option>
                        <option>Express</option>
                      </select>
                    </td>
                    <td class="font-weight-bold"></td>
                    <td class="font-weight-bold detail-produk">Rp.20.000</td>
                  </tr>
                  <!-- Total Harga -->
                  <tr >
                    <td></td>
                    <td ></td>
                    <td ></td>
                    <td class="font-weight-bold detail-produk text-red">Rp.300.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="bg-white p-3 mt-4 shadow">
              <div class="d-flex align-item-center flex-column flex-md-row border-bottom pb-3">
                <p class="d-none d-md-block">Metode <br> Pembayaran</p>
                <p class="d-block d-md-none">Metode  Pembayaran</p>
                <div class="d-flex flex-column ml-3 mt-3 mt-md-0">
                  <div class="d-flex">
                    <button class="btn primary-bg text-white method-payment"> Transfer Bank</button>
                      <button class="btn primary-bg text-white ml-3 method-payment">  COD</button> 
                  </div>
                  <div class="mt-2 d-flex">
                    <button class="btn primary-bg text-white method-payment"> Debit Online</button>
                      <button class="btn primary-bg text-white ml-3 method-payment"> Indomart/Alfamart</button>
                  </div>
                </div>
              </div>
              <div style="width: 300px;" class="d-flex  mx-auto mx-md-0 ml-md-auto  flex-column">
                <div class="d-flex mt-3">
                  <p class="mr-auto font-weight-bold">Subtotal Produk</p>
                  <p >Rp280.000</p>
                </div>
                <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Ongkos Kirim</p>
                  <p>Rp20.000</p>
                </div>
                  <div class="d-flex mt-2">
                  <p class="mr-auto font-weight-bold">Total Pembayaran:</p>
                  <p class="text-red">Rp300.000</p>
                </div>
              </div>
              <div class="border-top  mt-4">
                <button class="btn red-bg text-white  d-block ml-0 ml-md-auto  mr-4 mx-auto mx-md-0 font-weight-bold mt-4 px-5">Buat Pesanan</button>
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