<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alboem</title>
    <!-- IMPORT JQUERY -->
    <script src="{{asset('admin/assets/js/jquery-3.4.1.min.js')}}"></script>
    <!-- IMPORT POPPER FOR DROPDOWN NAVBAR -->
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <!-- IMPORT POPPER FOR BOOTSTRAP JS NAVBAR -->
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>


    <!-- IMPORT BOOTSTRAP -->
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('admin/assets/style/bootstrap.css')}}">
    <!-- IMPORT OWL CAROUSEL -->
    <link rel="stylesheet" href="{{asset('admin/assets/style/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/style/owl.theme.default.min.css')}}">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('admin/assets/style/animate.css')}}">
    <script src="{{asset('admin/assets/js/owl.carousel.min.js')}}"></script>

    <!-- IMPORT FONT AWESOME LIBRARY ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <!-- IMPORT MANUAL STYLE -->
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('admin/assets/style/style.css')}}">
</head>

<body class="bg-white">
  <section class="sign-up container-fluid" >
    <div class="row" style="height: 100vh;">
        <div class="col-md-4 primary-bg d-md-flex d-none " >
            <div class=" align-self-center " >
            <img class=" w-auto" src="{{asset('admin/assets/img/sign_up_hero.png')}}"   alt="">
        </div>

        </div>
        <div class="col-md-8 my-auto">
            <div class="w-50 m-auto">
                <h3 class="header-color form-font font-weight-lighter">Sign up To Alboem</h3>
                <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC;"><img src="{{asset('admin/assets/img/icongoogle.png')}}" alt=""> Sign up with google</button>
            <form>
                <hr />
                <a class="form-text form-font text-center my-3">or</a>
                <hr />
                <div class="form-group">
                    <div class="input-container">
                        <img class="user-icon" src="{{asset('admin/assets/img/user-icon.jpg')}}" alt="" >
                        <input placeholder="Username" type="username" class="form-control  py-4" id="username-input">
                    </div>
                  </div>
                <div class="form-group">
                <div class="form-group">
                    <div class="input-container">
                        <img class="email-icon" src="{{asset('admin/assets/img/email-icon.png')}}" alt="" >
                        <input placeholder="Email" type="email" class="form-control  py-4" id="email-input">
                    </div>
                </div>
            
                <div class="form-group">
                    <div class="input-container">
                        <img class="key-icon" src="{{asset('admin/assets/img/pass-icon.png')}}" alt="" >
                        <input placeholder="Password" type="password" class="form-control  py-4" id="password-input">
                    <img class="visibility-icon cursor-pointer" src="{{asset('admin/assets/img/visibility.png')}}" alt="" >
                    </div>
                    <br>
                    <div class="input-container">
                        <img class="key-icon" src="{{asset('admin/assets/img/pass-icon.png')}}" alt="" >
                        <input placeholder="Verify Password" type="password" class="form-control  py-4" id="password-input">
                    <img class="visibility-icon cursor-pointer" src="{{asset('admin/assets/img/visibility.png')}}" alt="" >
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn text-white px-4 py-2 shadow" style="background-color: #4B97BC; width: 625px;">Sign Up</button>
                </div>
                  
            </form>
        </div>
        </div>
    </div>
  </section>
    <script src="{{asset('admin/assets/js/main.js')}}"></script>
</body>

</html>