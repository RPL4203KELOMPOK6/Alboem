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
    </nav>
    <div class="primary-bg">
        <table>
            <tr>
                <td class="col-6">
                    <h5 class="text-white font-weight-bold" style="padding: 10px; padding-left: 60px;">Pemasok</h5>
                </td>
                <td class="nav-item dropdown mx-md-3 mx-0" style="padding-right: 80px;">
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
                                <p class="text-gray font-weight-bold">Your Favorite Shop</p>
                            </div>
                        </a>
                        <a href="#">
                            <div  class="shadow-sm mt-2 rounded-small p-2">
                                <p class="text-gray font-weight-bold">Your Favorite Shop</p>
                            </div>
                        </a>
                          <p class="text-gray font-weight-bold text-right mt-4 cursor-pointer">Logout <i class="ml-1 fa fa-sign-out-alt"></i></p>
                    </div>
                </td>
            </tr>
        </table>
    </div>
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