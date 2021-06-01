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
                                <a class="nav-link" href="#">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="#">Kelola Produk</a>
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
                            <h5 class="font-weight-bold ml-3">Kelola Produk</h5>
                        </div>
                        <div style="padding: 20px 10px 0px 25px;">
                            <div class="btn text-white font-weight-bold" role="group" >
                                <button type="button" class="btn" style="background: -webkit-linear-gradient(#C39AC6, #AB7EAE, #956498);  /* Chrome 10-25, Safari 5.1-6 */
                                background: linear-gradient(270deg, #C39AC6, #AB7EAE, #956498); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                color: #fff; padding: 20px; width:300px; text-align: left;">
                                    <h1 class="font-weight-bold">20</h1>
                                    <h5 class="font-weight-bold">KPOP</h5>
                                </button>
                            </div>
                            <div class="btn text-white font-weight-bold" role="group" >
                                <button type="button" class="btn" style="background: -webkit-linear-gradient(#E7649E, #E03C85);  /* Chrome 10-25, Safari 5.1-6 */
                                background: linear-gradient(270deg, #E7649E, #E03C85); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                color: #fff; padding: 20px; width:300px; text-align: left;">
                                    <h1 class="font-weight-bold">21</h1>
                                    <h5 class="font-weight-bold">Indonesia</h5>
                                </button>
                            </div>
                            <div class="btn text-white font-weight-bold" role="group" >
                                <button type="button" class="btn" style="background: -webkit-linear-gradient(#FECDCD, #FFB8B8);  /* Chrome 10-25, Safari 5.1-6 */
                                background: linear-gradient(270deg, #FECDCD, #FFB8B8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                color: #fff; padding: 20px; width:300px; text-align: left;">
                                    <h1 class="font-weight-bold">22</h1>
                                    <h5 class="font-weight-bold">Western</h5>
                                </button>
                            </div>
                            <div class="btn text-white font-weight-bold" role="group" >
                                <button type="button" class="btn" style="background: -webkit-linear-gradient(#CFD5F2, #ACB6E5);  /* Chrome 10-25, Safari 5.1-6 */
                                background: linear-gradient(270deg, #CFD5F2, #ACB6E5); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                                color: #fff; padding: 20px; width:300px; text-align: left;">
                                    <h1 class="font-weight-bold">23</h1>
                                    <h5 class="font-weight-bold">JPOP</h5>
                                </button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/main.js"></script>
@endsection
