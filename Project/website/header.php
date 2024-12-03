

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ; // current page url
  $url = end($url_array);  
  if($currect_page == $url){
	  echo 'active'; //class name in css 
  } 
}
?>
 


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laundry | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <!-- Logo -->
                <div class="header-left">
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <div class="menu-wrapper  d-flex align-items-center">
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav> 
                                <ul id="navigation">                                                                                          
                                    <li class="<?php echo active('index')?>"><a href="index">Home</a></li>
                                    <li class="<?php echo active('about')?>"><a href="about">About</a></li>
                                    <li class="<?php echo active('services')?>"><a href="services">Services</a></li>
                                    <li class="<?php echo active('blog')?>"><a href="blog">Blog</a>
                                        <ul class="submenu">
                                            <li class="<?php echo active('blog')?>"><a href="blog">Blog</a></li>
                                            <li class="<?php echo active('blog_details')?>"><a href="blog_details">Blog Details</a></li>
                                        
                                        </ul>
                                    </li>
                                    <li class="<?php echo active('contact')?>"><a href="contact">Contact</a></li>
									<?php
									if(isset($_SESSION['userid']))
									{
									?>
										<li class=""><a href="#">Hi .. <?php echo $_SESSION['username']?></a>
											<ul class="submenu">
												<li class="<?php echo active('userprofile')?>"><a href="userprofile">My Account</a></li>
											</ul>
										</li>
									<?php	
									}
									?>
									
								</ul>
                            </nav>
                        </div>
                    </div>
                </div> 
                <div class="header-right d-none d-lg-block">
                    <a href="#" class="header-btn1"><img src="assets/img/icon/call.png" alt=""> (91) 972 204-1171</a>
                    <?php
					if(isset($_SESSION['userid']))
					{
					?>
						<a href="userlogout" class="header-btn2">Logout</a>
					<?php	
					}
					else
					{
					?>
						<a href="login" class="header-btn2">Login</a>
					<?php
					}	
					?>
					
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
	