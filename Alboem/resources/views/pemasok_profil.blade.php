@extends('layout/pemasok');

@section('container')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-4">
                    <div class="bg-white p-3 sticky-top ">
                        <ul class="nav flex-column profile-sidebar">
                            <li class="nav-item">
                                <a class="nav-link " href="#">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kelola Produk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Transaksi Penjualan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 p-4">
                    <div class="profile-data bg-white pb-3">
                        <div class="data-header py-3 px-2 ">
                            <h5 class="font-weight-bold ml-3">Data Profil</h5>
                        </div>
                        <dl class="row content data mt-3" style="font-size: medium;">
                            <dd class="col-md-12 font-weight-bold"><span class="ml-4">Selamat Datang!</span></dd><br>
                            <dd class="col-md-3"><span class="ml-4">Username</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Nama</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Alamat</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">No Hp</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                            <dd class="col-md-3"><span class="ml-4">Email</span></dd>
                            <dd class="col-md-9"><span class="ml-4 ml-md-0">:</span></dd>
                        </dl>
                    <button class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold" style="font-size: x-small;"> Ubah Profil</button>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
@endsection
