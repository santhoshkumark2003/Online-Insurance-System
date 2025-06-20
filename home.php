<?php
session_start();
 if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="10">
   
    <title>SafeNest Insurance </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area" style="background-color: black">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="home.php">SafeNest Insurance</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="policyreg.php">Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="price.html">Pricing</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Policies</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="auto.php">Auto/Vehicle</a></li>
                                    <li class="nav-item"><a class="nav-link" href="health.php">Health</a></li>
                                    <li class="nav-item"><a class="nav-link" href="life.php">Life</a></li>
                                </ul>
                            </li>
                           
               
                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="sign_up" href="index.php" name='logout'>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--================About  Area =================-->
    <section class="about-area area-padding-bottom" style="padding-top: 60px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="area-heading">
                        <h4 style="margin-bottom:auto">What we do:</h4>
                        <p>SafeNest Insurance is a web system which is used to tracking details on insurance policies, customer details and company details. The company tries to give insurance policy holders quick access to their insurance policy details, modify or update the datails and even renew an expired insurance policy. All this, with a single click on your computer, at the comfort of your home.</p>
                    </div>
                    <div class="row" style="margin-top: auto">
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-settings"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Easy Access</h5>
                                    <p>SafeNest Insurance provides easy access and ease of use to our clients which makes our system reliable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single-about">
                                <div class="about-icon">
                                    <i class="ti-money"></i>
                                </div>
                                <div class="single-about-content">
                                    <h5>Reduced Costs</h5>
                                    <p>This is achieved by providing a variety of easily affordable insurance policy types each having a pretty affordable price, which a client can decid to pay monthly or annually. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================About Area End =================-->

    <!--================Insurance  Area =================-->
    <section class="service-area">
        <div class="container">
            <div class="area-heading">
                <h3>Insurance Policy Categories
                    <br>
                    <hr>
                </h3>
            </div>
            <div class="row">
                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-car"></i>
                        </div>
                        <div class="service-content">
                            <h5>Auto/Vehicle Insurance</h5>
                            <p>Auto insurance protects the policyholder against financial loss in the event of an incident involving a vehicle they own, such as in a traffic collision. Coverage typically includes:
                                Property coverage, for damage to or theft of the car...</p>
                            <a href="auto.php">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-eye"></i>
                        </div>
                        <div class="service-content">
                            <h5>Health Insurance</h5>
                            <p>Health insurance policies cover the cost of medical treatments. Dental insurance, like medical insurance, protects policyholders for dental costs. In most developed countries, all citizens receive some health coverage from their governments, paid for...</p>
                            <a href="health.php">Read More</a>
                        </div>
                    </div>
                </div>


                <!-- Single service -->
                <div class="col-md-6 col-lg-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="ti-heart"></i>
                        </div>
                        <div class="service-content">
                            <h5>Life Insurance</h5>
                            <p>Life insurance provides a monetary benefit to a decedent's family or other designated beneficiary, and may specifically provide for income to an insured person's family, burial, funeral and other final expenses. Life insurance policies often allow the option of having the proceeds paid to the beneficiary either in a lump sum cash payment...</p>
                            <a href="life.php">Read More</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--================Service Area end =================-->

    <!-- ================ start footer Area ================= -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Theme:</h4>
                    <p>Assuring you a hopeful future</p>
                    <div class="footer-logo">
                        <h3 style="color: white; font-weight: bolder">SafeNest Insurance </h3>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Info</h4>
                    <div class="footer-address">
                        <p>Address : 6789 Street <br> CBE-45</p>
                        <span>Phone : +91 9898986677</span>
                        <span>Email : sfins@gmail.com</span>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Subscribe to receive our lates news letters</p>

                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                            <div class="input-group">
                                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                <div class="input-group-append">
                                    <button class="btn click-btn" type="submit">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved 
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-dribbble"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/theme.js"></script>
</body>

</html>
