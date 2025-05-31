<!--Copyrights author: Frankline Bwire-->
<!--insurance management system-->
<!--theme copyrights Colorlib-->
<?php
include 'connect.php';
//Declare Variables
$cname='';
$cmail='';
$caddress='';
$cocity='';
$cocountry='';
$cid='';
$ename='';
$coumail='';
$cphone='';

//get form values
if(isset($_POST['cosubmit'])){
$cname=mysqli_real_escape_string($conn,$_POST['cname']);
$cmail=mysqli_real_escape_string($conn,$_POST['cmail']);
$caddress=mysqli_real_escape_string($conn,$_POST['caddress']);
$cocity=mysqli_real_escape_string($conn,$_POST['cocity']);
$cocountry=mysqli_real_escape_string($conn,$_POST['cocountry']);
$cid=mysqli_real_escape_string($conn,$_POST['cid']);
$ename=mysqli_real_escape_string($conn,$_POST['ename']);
$coumail=mysqli_real_escape_string($conn,$_POST['coumail']);
$cphone=mysqli_real_escape_string($conn,$_POST['cphone']);

    //insert values into database
$csql="insert into company_details(co_name,co_email,co_address,co_city,co_country,co_id,ename,co_umail,co_phone) values ('$cname','$cmail','$caddress','$cocity','$cocountry','$cid','$ename','$coumail','$cphone')";
$cquery=mysqli_query($conn,$csql);
if(!$cquery){
    die ('Data Entry Unsuccessful'. mysqli_error($conn));
}
}
    
//$cname,$cmail,$caddress,$cocity,$cocountry,$cid,$coumail,$cphone
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>SafeNest Insurance System</title>
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
                    <a class="navbar-brand logo_h" href="home.php">SafeNest Insurance </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="adminhome.php">Home</a></li>
                             <li class="nav-item"><a class="nav-link" href="companyreg.php">Emp Details</a></li>
                             <li class="nav-item"><a class="nav-link" href="recorde.php">View Emp Details</a></li>
                                 <li class="nav-item"><a class="nav-link" href="record.php">user application</a></li>

                        </ul>
                    </div>
                    <div class="right-button">
                        <ul>
                            <li><a class="sign_up" href="admin.php">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--================Policy Registration =================-->
    <section class="blog_area single-post-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <form action="companyreg.php" method="post">
                        <h1 style="color: black">Manage Company Employees Details
                            <hr style="color: black">
                        </h1>
                        <p style="color: black">Fill form below to apply your employer's details.</p>
                        <div class="mt-10">
                            <input type="text" name="cname" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
                        </div>


                        <div class="mt-10">
                            <input type="email" name="cmail" placeholder="Company Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <input type="text" name="caddress" placeholder="Company Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="form-select" id="default-select" align="center">
                                <select name="cocity">
                                    <option value="1">* City</option>
                                    <option>covai</option>
                                    <option>salem</option>
                                    <option>chennai</option>
                                </select>

                                <select style="margin-left: 20px" name="cocountry">
                                    <option value="1">* Country</option>
                                    <option>India</option>
                                </select>
                            </div>

                        </div>

                        <div class="mt-10">
                            <input type="text" name="cid" placeholder="Company ID Number" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="ename" placeholder="Employee name" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="coumail" placeholder="User Email Address" required class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="cphone" placeholder="Phone Number" required class="single-input-accent" maxlength="20">
                        </div>

                        <br>
                        <div class="mt-10" align="center">
                            <button type="submit" name="cosubmit" class="genric-btn success-border">Update Details
                            </button>
                            <button style="margin-left: 50px" type="reset" name="submitreg" class="genric-btn danger-border"><a href="home.html">Cancel Update</a>
                            </button>

                        </div>
                    </form>
                </div>
                <!--==End policy Registration==-->

                <!--category section-->
                
                <!--End category section-->
            </div>
        </div>
    </section>
    <!--================Blog Area end =================-->


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
