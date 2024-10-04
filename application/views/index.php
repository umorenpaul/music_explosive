<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url ();?>img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
 <!-- Site Title -->
    <title>MUSIC EXPLOSIVE INTERNATIONAL</title>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url ();?>assets/css/font-awesome.min.css""/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css"/>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css"/>
   <link href="<?php echo base_url();?>assets/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>assets/themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="<?php echo base_url();?>assets/css/generic.css" rel="stylesheet" type="text/css" />
    <!-- CSS ============================================= -->
 
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- Start header section -->
    <header class="header-area" id="header-area">
        <div class="dope-nav-container breakpoint-off">
            <div class="container">
                <div class="row">
                    <!-- dope Menu -->
                    <nav class="dope-navbar justify-content-between" id="dopeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.php">
                            <img src="<?php echo base_url ();?>assets/img/logo.png" alt="">
                        </a>

                        <!-- Navbar Toggler -->
                        <div class="dope-navbar-toggler">
                            <span class="navbarToggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <!-- Menu -->
                        <div class="dope-menu">

                            <!-- close btn -->
                            <div class="dopecloseIcon">
                                <div class="cross-wrap">
                                    <span class="top"></span>
                                    <span class="bottom"></span>
                                </div>
                            </div>
 <!-- Nav Start -->

	<?php include 'nav.php';?>
	   <!-- Nav End -->
	        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>  
<!-- BEGINNING OF MAIN CONTENTS -->
<?php include $page_name.'.php';?>

<!-- END OF MAIN CONTENTS -->


	<!-- Footer section -->
	    <footer class="footer-section section-gap-half">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 footer-left">
                    <a href="index.php">
                        <img src="<?php echo base_url ();?>assets/img/logo.png" alt="">
                    </a>
                    <p class="copyright-text">
					   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Edere Investment

                        <a href="http://dopetheme.com" target="_blank"></a>
                    </p>
                </div>
                <div class="col-lg-7">
                    <ul id="social">
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
    </footer>
 
	<!-- Footer section end-->
   <div class="scroll-top">
        <i class="ti-angle-up"></i>
    </div>


	<!--====== Javascripts & Jquery ======-->
	<script src="<?php echo base_url();?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.parallax-scroll.js"></script>
	<script src="<?php echo base_url();?>assets/js/dopeNav.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>



