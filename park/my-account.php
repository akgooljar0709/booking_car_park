<?php
include("config.php");
include("firebaseRDB.php");
session_start();
if(!isset($_SESSION['user'])){
    header("location:sign-up.php");
}else{
   $username = $_SESSION['user']['customer_name'];
} 

$db = new firebaseRDB($databaseURL);
?>


<!DOCTYPE html>
<html lang="en">


<!-- sign-up.html  22 Nov 2019 04:18:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Drivon - Swimming School HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-wrapper">
            <img src="assets/css/ajax-loader.gif" alt="ajax-loader">
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========scrolltotop========== -->
    <a href="#0" class="scrollToTop" title="ScrollToTop">
        <img src="assets/images/rocket.png" alt="rocket">
    </a>
    <!-- ==========scrolltotop========== -->

    <!-- ==========header-section========== -->
    <header class="header-section">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9">
                        <ul class="header-top-info">
                            <li>
                                <div class="left">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="right">
                                    <span class="d-block">Call Now</span>
                                    <a href="Tel:9393993">222444999</a>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="right">
                                    <span class="d-block">location</span>
                                    <a href="#0">Minnie Downs QLD 4478</a>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="right">
                                    <span class="d-block">Office Hours</span>
                                    <a href="#0">9:00am - 5:00 pm ( Sunday Closed )</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="d-flex justify-content-end account">
                            <li>
                                <a href="sign-in.html">Login</a>
                            </li>
                            <li>
                                <a href="#0">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-wrapper">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <ul class="menu ml-auto">
                        <li>
                            <a href="#0">Home</a>
                            <ul class="submenu">
                                <li>
                                    <a href="index.html">Home One</a>
                                </li>
                                <li>
                                    <a href="index-two.html">Home Two</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="#0">Courses</a>
                            <ul class="submenu">
                                <li>
                                    <a href="course.html">Course</a>
                                </li>
                                <li>
                                    <a href="course-details.html">Course Details</a>
                                </li>
                                <li>
                                    <a href="classes-schedule.html">Class Schedule</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Shop</a>
                            <ul class="submenu">
                                <li>
                                    <a href="shop.html">Shop</a>
                                </li>
                                <li>
                                    <a href="offer.html">Offer</a>
                                </li>
                                <li>
                                    <a href="cart.html">Cart</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Pages</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#0">Instructors</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="instructors.html">Instructors</a>
                                        </li>
                                        <li>
                                            <a href="instructor-profile.html">Instructors Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="gallery.html">Gallery</a>
                                </li>
                                <li>
                                    <a href="#0">Event</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="event.html">Event</a>
                                        </li>
                                        <li>
                                            <a href="event-details.html">Event Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="admission.html">admission</a>
                                </li>
                                <li>
                                    <a href="wish-list.html">our wish list</a>
                                </li>
                                <li>
                                    <a href="privacy.html">privacy</a>
                                </li>
                                <li>
                                    <a href="faq.html">faq</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Blog</a>
                            <ul class="submenu">
                                <li>
                                    <a href="blog-grid.html">blog grid</a>
                                </li>
                                <li>
                                    <a href="blog-classic.html">blog classic</a>
                                </li>
                                <li>
                                    <a href="blog-details.html">blog details</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#0">Account</a>
                            <ul class="submenu">
                                <li>
                                    <a href="sign-in.html">sign in</a>
                                </li>
                                <li>
                                    <a href="sign-up.html">sign up</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <ul class="search-area">
                        <li>
                            <a class="search-bar" href="#0">
                                <i class="flaticon-magnifying-glass"></i>
                            </a>
                        </li>
                        <li>
                            <a id="cart-button" href="#0">
                                <i class="flaticon-shopping-cart"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="search-form-area">
        <span class="hide-form">
            <i class="fas fa-times"></i>
        </span>
        <form class="search-form">
            <input type="text" placeholder="Search Here">
            <button type="submit"><i class="flaticon-search"></i></button>
        </form>
    </div>
    <!-- ===========Header Cart=========== -->
    <div id="body-overlay" class="body-overlay"></div>
    <div class="cart-sidebar-area" id="cart-sidebar-area">
        <div class="top-content">
            <a href="index.html" class="logo">
                <img src="assets/images/logo/footer-logo.png" alt="logo">
            </a>
            <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
        </div>
        <div class="bottom-content">
            <div class="cart-products">
                <h4 class="title">Shopping cart</h4>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop01.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Swimming Shoes</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop02.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Water Glass</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop03.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Support Suit</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop06.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Stop Watch</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="single-product-item">
                    <div class="thumb">
                        <img src="assets/images/shop/shop05.png" alt="shop">
                    </div>
                    <div class="content">
                        <h4 class="title">Support Ring</h4>
                        <div class="price"><span class="pprice">$80.00</span> <del class="dprice">$120.00</del></div>
                        <a href="#" class="remove-cart">Remove</a>
                    </div>
                </div>
                <div class="btn-wrapper text-center">
                    <a href="checkout.html" class="custom-button active">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ===========Header Cart=========== -->
    <!-- ==========header-section========== -->

    <!-- ==========hero-area========== -->
    <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title">MY ACCOUNT</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    My Account
                </li>
            </ul>
        </div>
    </section>
    <!-- ==========hero-area========== -->


    <!-- ==========privacy-section========== -->
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                    <div class="sign-in-form-area">
                        <h3 class="title">Welcome <?php echo $username ;?></h3>
                            <div class="col-md-4">
                    <!-- checkout-progress-sidebar -->
<div class="checkout-progress-sidebar ">
    <div class="panel-group">
        <div class="panel panel-default">
            
            <div class="panel-body">
                <ul class="nav nav-checkout-progress list-unstyled">
                    <li><a href="my-account.php" >My Account</a></li>
                
                    <li><a href="order-history.php">Order History</a></li>
                    <br>
                    <li><a href="logout.php">Log Out</a></li>
                    
                </ul>       
            </div>
        </div>
    </div>
</div> 
<!-- checkout-progress-sidebar -->              </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="different-sign-in">
                        

                        <h4>Personal info</h4>
                <?php
session_start();
if(isset($_SESSION['user'])){
    $customer_email = $_SESSION['user']['email'];

    $rdb = new FirebaseRDB($databaseURL);
    $retrieve = $rdb-> retrieve ("/user" , "email" , "EQUAL" , $customer_email);
    $data = json_decode($retrieve, 1);
    if(count($data) > 0 ){
        $customer = array_values($data)[0];
        // Display the customer details
        echo "<form class=\"sign-in-form\" action=\"action_login.php\" method=\"POST\">";

            echo "<div class=\"form-group\">";
                echo "<label for=\"email\" style =\"color:white\">Customer Name</label>";
                echo "<input type=\"text\" name=\"email\" id=\"email03\" value=\"".$customer['customer_name']."\">";
                
            echo "</div>";

            echo "<div class=\"form-group\">";
                echo "<label for=\"email\" style =\"color:white\">Email</label>";
                echo "<input type=\"text\" name=\"email\" id=\"email03\" value=\"".$customer['email']."\">";
                
            echo "</div>";

            
        echo "</form>";

    } else {
        echo "Customer not found";
    }
}
?>



                    
                 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========privacy-section========== -->

    <!-- ==========call-in-action-section========== -->
    <section class="call-in-action padding-bottom padding-top bg-ash">
        <div class="container">
            <div class="call-in-area">
                <h2 class="title">Have Any Questions About drivon</h2>
                <p>Amet consectetur adipiscing elit, sed do eiutempor incididunt ut labore et dolore magna aliquaad
                    minvenia quis nosta</p>
                <a href="contact.html" class="custom-button active">contact us</a>
            </div>
        </div>
    </section>
    <!-- ==========call-in-action-section========== -->

    <!-- ==========footer-section========== -->
    <footer>
        <div class="footer-top padding-top padding-bottom theme-overlay bg_img"
            data-background="assets/images/footer.jpg">
            <div class="container">
                <div class="row mb-40-none">
                    <div class="col-md-4 col-sm-8">
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo/footer-logo.png" alt="logo">
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, porta feugiat odio nam ut magnis tempor. Vitae quis nisl
                                viverra adipiscing in, integer penatibus elit luctus </p>
                            <ul>
                                <li>
                                    <a href="tel:80930458459">
                                        <!-- <i class="fas fa-phone"></i> -->
                                        <i class="flaticon-telephone-handle-silhouette"></i>
                                        9999 3333 8888
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="flaticon-maps-and-flags"></i>
                                        <!-- <i class="fas fa-map-marker-alt"></i>  -->
                                        Minnie Downs QLD 4478
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-widget link-widget pl-lg-4">
                            <h4 class="title">Our Branches</h4>
                            <ul>
                                <li>
                                    <a href="#0">Alberta</a>
                                </li>
                                <li>
                                    <a href="#0">Columbia</a>
                                </li>
                                <li>
                                    <a href="#0">Manitoba</a>
                                </li>
                                <li>
                                    <a href="#0">Nunavut</a>
                                </li>
                                <li>
                                    <a href="#0">Yukon</a>
                                </li>
                                <li>
                                    <a href="#0">Onturio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="footer-widget footer-schedule">
                            <h4 class="title">Opening Hours</h4>
                            <ul>
                                <li>
                                    <a href="#0">
                                        <span>Sat-Tues</span>
                                        <span>08:00am-01:00pm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Wed-Thurs</span>
                                        <span>12:00am-03:00pm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Friday</span>
                                        <span>07:00am-09:00pm</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span>Sunday</span>
                                        <span>08:00am-01:00pm</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="text-right calendar">
                                <a href="#0">Go to Calendar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-4 bg-theme text-center">
            <div class="container">
                <p class="m-0"><a href="templateshub.net">Templateshub</a></p>
            </div>
        </div>
    </footer>
    <!-- ==========footer-section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.ripples-min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- sign-up.html  22 Nov 2019 04:18:19 GMT -->
</html>