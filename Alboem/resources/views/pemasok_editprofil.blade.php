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
                            <h5 class="font-weight-bold ml-3">Edit Data Profil</h5>
                        </div>
                        <div class="row data mt-3 ml-3">
                            <div class="col-3">Username</div>
                            <div class="col-1">:</div>
                            <div class="col-8"><input type="text" class="col-8" name="username" style="width:20em;" placeholder="username" required /></div>
                        </div>
                        <div class="row data mt-3 ml-3">
                            <div class="col-3">Nama</div>
                            <div class="col-1">:</div>
                            <div class="col-8"><input type="text" class="col-8" name="namaPemasok" style="width:20em;" placeholder="nama" required /></div>
                        </div>
                        <div class="row data mt-3 ml-3">
                            <div class="col-3">Alamat</div>
                            <div class="col-1">:</div>
                            <div class="col-8"><input type="text" class="col-8" name="alamatPemasok	" style="width:20em;" placeholder="alamat" required /></div>
                        </div>
                        <div class="row data mt-3 ml-3">
                            <div class="col-3">No HP</div>
                            <div class="col-1">:</div>
                            <div class="col-8"><input type="text" class="col-8" name="noTelPemasok" style="width:20em;" placeholder="No. HP" required /></div>
                        </div>
                        <div class="row data mt-3 ml-3">
                            <div class="col-3">Email</div>
                            <div class="col-1">:</div>
                            <div class="col-8"><input type="text" class="col-8" name="emailPemasok" style="width:20em;" placeholder="email@email.com" required /></div>
                        </div>
                    <button class="btn primary-bg text-white  d-block ml-auto  mr-4  font-weight-bold" style="font-size: x-small;">Update Profil</button>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
@endsection