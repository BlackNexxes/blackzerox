<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from epiktheme.com/demos/html/Gamix-Preview/demos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 23:55:11 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BLACK NEXXS</title>

    <!--font-awesome icons link-->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/venobox.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <!--main style file-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body id="darkmode">
    <!-- <audio id="myAudio" autoplay>
        <source src="WhatsApp Ptt 2023-05-05 at 3.41.40 AM.ogg" type="audio/ogg">
      </audio>
       -->
      
    <!-- Preloader -->
    <div class="loader_screen preloader" id="preloader">
        <div class="loader loader-box">
            <svg viewBox="0 0 80 80">
                <rect x="8" y="8" width="64" height="64"></rect>
            </svg>
        </div>
    </div>
    <!-- Preloader -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cart <b>.</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row cart-item">
                        <div class="col-sm-4 col-lg-4 cart-img">
                            <img src="images/product1.png" alt="product" class="img-fluid">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-sm-8 col-lg-8">
                            <h3>Ober Headset</h3>
                            <span>1 x $135</span>
                        </div>
                    </div>
                    <div class="row cart-item">
                        <div class="col-sm-4 col-lg-4 cart-img">
                            <img src="images/product3.png" alt="product" class="img-fluid">
                            <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-sm-8 col-lg-8">
                            <h3>Wired Earphone</h3>
                            <span>2 x $99</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="cart.html" class="main-btn model-btn">Checkout $320</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Modal -->

    <div class="modal fade" id="free_fire" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title">  اندرويد <b>  ريجديت</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row contact-box">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <select name="product product1" id="product product1" class="form-control " onchange="updateSelectedText()">
                                        <option class="form-control" value="100l.e" >Reg 60%</option>
                                        <option class="form-control" value="REG 90% = 200L.E">REG 90% = 200L.E</option>
                                        <option class="form-control" value="REG 80% = 150L.E">REG 80% = 150L.E</option>
                                        <option class="form-control" value="REG 65% = 100L.E">REG 65% = 100L.E</option>
                                        <option class="form-control" value="REG 40% = 70L.E">REG 40% = 70L.E</option>
                                        <option class="form-control" value="BANNEL 90% = 250L.E">BANNEL 90% = 250L.E</option>
                                        <option class="form-control" value="BANNEL AIMBOT= 500L.E">BANNEL AIMBOT= 500L.E</option>
                                        <option class="form-control" value="NORMAL SENSI = 100L.E">NORMAL SENSI = 100L.E</option>
                                        <option class="form-control" value="CRAZY SENSI = 150L.E">CRAZY SENSI = 150L.E</option>
                                        <option class="form-control" value="NORMAL FIXLAG = 85L.E">NORMAL FIXLAG = 85L.E</option>
                                        <option class="form-control" value="CRAZY FIXLAG = 150L.E">CRAZY FIXLAG = 150L.E</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="selected-text" style="color: white;"></div>
                    </div>
    
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var selectElement = document.getElementById("product product1");
                            selectElement.addEventListener("change", updateSelectedText);
                        });
                    
                        function updateSelectedText() {
                            var selectedOption = document.getElementById("product product1").value;
                            document.querySelector(".selected-text").textContent = selectedOption;
                        }
                    
                        function sendMessage() {
                            var product = document.getElementById("product product1").value;
                            var phoneNumber = "+201070065250";
                            var message = encodeURIComponent(product);
                            var whatsappLink = "https://api.whatsapp.com/send/?phone=+201070065250" ;
                    
                            window.open(whatsappLink);
                        }
                    </script>
                    
                    
    
                    <div class="modal-footer">
                        <button onclick="sendMessage()"   class="main-btn model-btn">ابعت طلب الشحن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->

    <!-- HEADER AREA START -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="navber">
        <div class="container">
            <a class="navbar-brand" href="index.html">BLACK <span> NEXXS</span></a>
            <div class="menu-main" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu-item">
                    <li class="nav-item">
                        <a class="nav-link nl-m-top abc mobile-content-hide"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="search top-search">
                            <button type="button" class="close fix-close">×</button>
                            <form>
                                <input type="search" value="" placeholder="Search Here" />
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link nl-m-top account-icon" href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="custom-menubar">
            <ul class="nav-link-block">
                <li>
                    <a href="#banner" class="menu-link">Home</a>
                </li>
                <li>
                    <a href="#about" class="menu-link">About Us</a>
                </li>
            </ul>
            <ul class="responsive-nav">
                <li>
                    <a class="nav-link nl-m-top abc"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <div class="search top-search">
                        <button type="button" class="close fix-close">×</button>
                        <form>
                            <input type="search" value="" placeholder="Search Here" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                    </div>
                </li>
              
                <li>
                    <a class="nav-link nl-m-top" href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                </li>
            </ul>
            <div class="menu-close">
                <a class="hide-menu-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>
    <!-- HEADER AREA END -->

    <!-- BANNER AREA START -->
    <section id="banner">
        <div class="backtotop">
            <a href="#banner"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
        </div>
        <div class="follow-us">
            <span>Follow us</span>
            <a href="#"><i class="fa fa-twitch" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
        </div>
        <div class="banner-arrow">
            <i class="fa fa-angle-left arrow-al" aria-hidden="true"></i>
            <i class="fa fa-angle-right arrow-ar" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-8 col-md-6 landscape-m-auto tab-m-auto banner-img">
                    <img src="logo.png" alt="banner-img" class="img-fluid">
                    <a class="vid-btn venobox" data-autoplay="true" data-vbtype="video" href="../../../../../www.youtube.com/watch50f3.html?v=ClUFJlGBuME"><i class="fa fa-play" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-5 m-auto banner-txt">
                    <div class="banner-main">
                        <div class="banner-item">
                            <h3>Regdits</h3>
                            <h3>  & Hacks </h3>
                            <p>متنساش يخويا لو هتشتري تبعت سكرين التحويل</p>
                            <a href="https://api.whatsapp.com/send/?phone=%2B201070065250&text&type=phone_number&app_absent=0" class="main-btn">Whatsapp</a>
                        </div>
                        <div class="banner-item">
                            <h3>Gaming</h3>
                            <h3>Online Shop</h3>
                            <p>متنساش يخويا لو هتشحن تبعت سكرين التحويل</p>
                            <a href="https://api.whatsapp.com/send/?phone=%2B201070065250&text&type=phone_number&app_absent=0" class="main-btn">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- GAMES AREA START -->
    <section id="games">
        <div class="container game-line">
            <div class="gl-one gl"></div>
            <div class="gl-two gl"></div>
            <div class="row game-pa">
                <div class="col-lg-4 col-md-11 tab-m-auto">
                    <div class="game-box">
                        <span>Today's</span>
                        <h3>Games Collection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, dolores.</p>
                        <a href="#" class="main-btn">Browse All</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="game-main">
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="freefire.png" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#free_fire" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">Free Fire</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="pubg.png" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#pubg_mobile" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">Pubg Mobile</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="fifa.png" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">Fifa Mobile</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="pes.png" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">Pes Mobile</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GAMES AREA END -->
 
  <section id="games">
<!-- MODAL 1 -->
<div class="modal fade" id="pup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Android <b>Regedit</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row contact-box">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="product product1" id="product1" class="form-control" onchange="updateSelectedText1()">
                                    <option class="form-control" value="100L.E">Reg 40%</option>
                                    <option class="form-control" value="150L.E">REG 65%</option>
                                    <option class="form-control" value="300L.E">REG 80%</option>
                                    <option class="form-control" value="400L.E">REG 90%</option>
                                    <option class="form-control" value="300L.E">AIMBOT 65%</option>
                                    <option class="form-control" value="400L.E">AIMBOT 85%</option>
                                    <option class="form-control" value="200L.E">BANNEL 90%</option>
                                    <option class="form-control" value="100L.E">HEAD</option>
                                    <option class="form-control" value="100L.E">MACRO</option>
                                    <option class="form-control" value="100L.E">NORMAL SENSI</option>
                                    <option class="form-control" value="150L.E">CRAZY SENSI</option>
                                    <option class="form-control" value="100L.E">NORMAL FIX</option>
                                    <option class="form-control" value="150L.E">CRAZY FIX</option>
                                    <!-- More options... -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="selected-text1" style="color: white;"></div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var selectElement = document.getElementById("product1");
                        selectElement.addEventListener("change", updateSelectedText1);
                    });

                    function updateSelectedText1() {
                        var selectedOption = document.getElementById("product1").value;
                        document.querySelector(".selected-text1").textContent = selectedOption;
                    }

                    function sendMessage1() {
                        var product = document.getElementById("product1").value;
                        var phoneNumber = "+201070065250";
                        var message = encodeURIComponent(product);
                        var whatsappLink = "https://api.whatsapp.com/send/?phone=%2B201070065250&text=" + message + "&type=phone_number&app_absent=0";
                        window.open(whatsappLink);
                    }
                </script>
                <div class="modal-footer">
                    <button onclick="sendMessage1()" class="main-btn model-btn">WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL 2 -->
<div class="modal fade" id="pup1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">IOS <b>Regedit</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row contact-box">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="product product2" id="product2" class="form-control" onchange="updateSelectedText2()">
                                    <option class="form-control" value="100L.E">Reg 40%</option>
                                    <option class="form-control" value="200L.E">REG 80%</option>
                                    <option class="form-control" value="400L.E">AIMBOT REG</option>
                                    <option class="form-control" value="700L.E">BLACK BANNEL</option>
                                    <option class="form-control" value="1100L.E">NEXXS BANNEL</option>
                                    <option class="form-control" value="150L.E">CRAZY SENSI</option>
                                    <!-- More options... -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="selected-text2" style="color: white;"></div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var selectElement = document.getElementById("product2");
                        selectElement.addEventListener("change", updateSelectedText2);
                    });

                    function updateSelectedText2() {
                        var selectedOption = document.getElementById("product2").value;
                        document.querySelector(".selected-text2").textContent = selectedOption;
                    }

                    function sendMessage2() {
                        var product = document.getElementById("product2").value;
                        var phoneNumber = "+201070065250";
                        var message = encodeURIComponent(product);
                        var whatsappLink = "https://api.whatsapp.com/send/?phone=%2B201070065250&text=" + message + "&type=phone_number&app_absent=0";
                        window.open(whatsappLink);
                    }
                </script>
                <div class="modal-footer">
                    <button onclick="sendMessage2()" class="main-btn model-btn">WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- MODAL 3 -->
<div class="modal fade" id="pup2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">PC <b>Regedit</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row contact-box">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="product product3" id="product3" class="form-control" onchange="updateSelectedText3()">
                                    <option class="form-control" value="150L.E">REG MOUSE + EMULATOR 40%</option>
                                    <option class="form-control" value="250L.E">REG MOUSE + EMULATOR 65%</option>
                                    <option class="form-control" value="400L.E">REG MOUSE + EMULATOR 80%</option>
                                    <option class="form-control" value="200L.E">AIM REG</option>
                                    <option class="form-control" value="700L.E">EASY BANNEL</option>
                                    <option class="form-control" value="150L.E">BLACK BANNEL</option>
                                    <option class="form-control" value="1100L.E">NEXXS BANNEL</option>
                                    <option class="form-control" value="1500L.E">CRAZY BANNEL</option>
                                    <option class="form-control" value="150L.E">FRAMESETTING & SPEED IT UP</option>
                                    <!-- More options... -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="selected-text3" style="color: white;"></div>
                </div>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        var selectElement = document.getElementById("product3");
                        selectElement.addEventListener("change", updateSelectedText3);
                    });

                    function updateSelectedText3() {
                        var selectedOption = document.getElementById("product3").value;
                        document.querySelector(".selected-text3").textContent = selectedOption;
                    }

                    function sendMessage3() {
                        var product = document.getElementById("product3").value;
                        var phoneNumber = "+201070065250";
                        var message = encodeURIComponent(product);
                        var whatsappLink = "https://api.whatsapp.com/send/?phone=%2B201070065250&text=" + message + "&type=phone_number&app_absent=0";
                        window.open(whatsappLink);
                    }
                </script>
                <div class="modal-footer">
                    <button onclick="sendMessage3()" class="main-btn model-btn">WhatsApp</button>
                </div>
            </form>
        </div>
    </div>
</div>

        <div class="container game-line">
            <div class="gl-one gl"></div>
            <div class="gl-two gl"></div>
            <div class="row game-pa">
                <div class="col-lg-4 col-md-11 tab-m-auto">
                    <div class="game-box">
                        <span>Today's</span>
                        <h3>Regdit Collection</h3>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="game-main">
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="bg1.jpg" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#pup" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">ANDROID REGEDIT </a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="bg2.jpg" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#pup1" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">IOS REGEDIT</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="col-lg-4 game-item text-center">
                            <div class="game-img">
                                <img src="bg3.jpg" alt="game-img" class="img-fluid">
                                <div class="lightbox-overlay">
                                    <a data-toggle="modal" data-target="#pup2" data-lightbox="roadtrip" data-title="Gallery"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <a href="#">PC REGEDIT</a>
                            <div class="star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- JavaScript -->
    <script>
        var myAudio = document.getElementById("myAudio");
        myAudio.onended = function() {
          myAudio.pause();
        };
      </script>

      
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <!-- <script src="js/lightbox.min.js"></script> -->
    <script src="js/counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/custom.js"></script>

</body>


</html>
