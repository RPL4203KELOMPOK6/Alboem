@extends('layout/main');

@section('title','Adress')

@section('login')
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
@endsection

@section('container')
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
                   <div class="wishlist bg-white ">
                    <div class="data-header py-3 px-2 ">
                        <h5 class="font-weight-bold ml-3 mt-2">Wishlist</h5>
                    </div>
                    <div class="wishlist-item d-flex position-relative pl-5 flex-column flex-md-row py-4">
                        <i class="fa fa-times close-icon"></i>
                        <!-- GAMBAR -->
                        <img src="assets/img/detail2.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                        <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                            <!-- JUDUL PRODUK -->
                            <p class="content"><span class="font-weight-bold">EXO</span> Vol.3 EX’ACT Album </p>    
                             <!-- HARGA  -->
                            <h6 class="text-red font-weight-bold mt-4">Rp. 500.000</h6>
                            <!-- STOK -->
                            <p class="content mt-4">Stok : 56</p>
                        </div>
                        <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">
                            <a href="#" class="btn primary-bg ml-0 ml-md-auto mx-auto mx-md-0 d-block  mt-md-5 mt-2 text-white font-weight-bold"> Lihat Produk Serupa</a>
                            <!-- TANGGAL DIMASUKKAN -->
                            <p class="content mt-3  text-center text-md-left ">Tanggal dimasukkan : 05 - 05 -2021</p>
                        </div>
                    </div>
                    <div class="wishlist-item d-flex position-relative pl-5 flex-column flex-md-row py-4">
                        <i class="fa fa-times close-icon"></i>
                        <!-- GAMBAR -->
                        <img src="assets/img/product2.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                        <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                            <!-- JUDUL PRODUK -->
                            <p class="content"><span class="font-weight-bold">Rihanna</span> Anti Album </p>    
                             <!-- HARGA  -->
                            <h6 class="text-red font-weight-bold mt-4">Rp. 480.000</h6>
                            <!-- STOK -->
                            <p class="content mt-4">Stok : 20</p>
                        </div>
                        <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">
                            <a href="#" class="btn primary-bg ml-0 ml-md-auto mx-auto mx-md-0 d-block  mt-md-5 mt-2 text-white font-weight-bold"> Lihat Produk Serupa</a>
                            <!-- TANGGAL DIMASUKKAN -->
                            <p class="content mt-3  text-center text-md-left ">Tanggal dimasukkan : 04 - 05 -2021</p>
                        </div>
                    </div>
                    <div class="wishlist-item d-flex position-relative pl-5  flex-column flex-md-row py-4">
                        <i class="fa fa-times close-icon"></i>
                        <!-- GAMBAR -->
                        <img src="assets/img/product3.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                        <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                            <!-- JUDUL PRODUK -->
                            <p class="content"><span class="font-weight-bold">Valley </span> Maybe Album </p>    
                             <!-- HARGA  -->
                            <h6 class="text-red font-weight-bold mt-4">Rp. 500.000</h6>
                            <!-- STOK -->
                            <p class="content mt-4">Stok : 130</p>
                        </div>
                        <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">
                            <a href="#" class="btn primary-bg ml-0 ml-md-auto mx-auto mx-md-0 d-block  mt-md-5 mt-2 text-white font-weight-bold"> Lihat Produk Serupa</a>
                            <!-- TANGGAL DIMASUKKAN -->
                            <p class="content mt-3  text-center text-md-left ">Tanggal dimasukkan : 02 - 03 -2021</p>
                        </div>
                    </div>
                    <div class="wishlist-item d-flex position-relative pl-5 flex-column flex-md-row py-4">
                        <i class="fa fa-times close-icon"></i>
                        <!-- GAMBAR -->
                        <img src="assets/img/product 4.png" class="wishlist-img d-block mx-auto mx-md-0" alt="">
                        <div class="ml-0 ml-md-3 text-center text-md-left mt-3 mt-md-0">
                            <!-- JUDUL PRODUK -->
                            <p class="content"><span class="font-weight-bold">Jeremy Zucker & Chealse Cutler</span> Brent Album </p>    
                             <!-- HARGA  -->
                            <h6 class="text-red font-weight-bold mt-4">Rp. 500.000</h6>
                            <!-- STOK -->
                            <p class="content mt-4">Stok : 56</p>
                        </div>
                        <div class="ml-0 ml-md-auto mr-0  mr-md-4 mx-auto">
                            <a href="#" class="btn primary-bg ml-0 ml-md-auto mx-auto mx-md-0 d-block  mt-md-5 mt-2 text-white font-weight-bold"> Lihat Produk Serupa</a>
                            <!-- TANGGAL DIMASUKKAN -->
                            <p class="content mt-3  text-center text-md-left ">Tanggal dimasukkan : 05 - 05 -2021</p>
                        </div>
                    </div>
                   </div>
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
    <script src="assets/js/main.js"></script>
@endsection