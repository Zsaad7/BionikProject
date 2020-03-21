<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bionik Project</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body onload="loaded()">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?php echo site_url('home')?>"><img src="<?php echo IMG?>/logos/logo.png" width="133px" heigth="47px"></a>
                </div>
                <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger">
                 
                    <a href="#">
                        <img src="img/icons/bag.png" alt="">
                        <span>2</span>
                    </a>
                </div>
                
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="<?php if($currentURL == 'home') echo 'current' ?>" href="<?php echo site_url('home')?>">Home</a></li>
                        <li><a  href="">Nos Gammes</a>
                        <ul class="sub-menu">
                                <li><a class="<?php if($currentURL == 'gamme') echo 'current' ?>" href="<?php echo site_url('gamme')?>">DEFENCE</a></li>
                                <li><a href="">TRIDERM</a></li>
                                <li><a href="">PROXERA</a></li>
                                <li><a href="">SHINE ON</a></li>
                                <li><a href="">AKNET</a></li>
                                <li><a href="">SO PURE</a></li>
                                <li><a href="">XSENSE</a></li>
                                <li><a href="">ONAILS</a></li>
                                <li><a href="">GYNEXELLE</a></li>
                                <li><a href="">SECTEUR SPECIALISE</a></li>
                                <li><a href="">Voir toutes nos gammes</a></li>
                            </ul>
                        </li>
                         <li><a  href="">Nos Produits</a>
                         
                         <!-- kteb hna duk les produits dialk maa les sub menus dialhum ana qadit dial d les gammes -->
                         </li>

                        <li><a href="">Makeup</a>
                             <!-- hadi tal mn b3d ta nhdro maah iqad lina catalogue dialha   -->
                        </li>
                        
                        <li><a href="./product-page.html">A Propos de Nous</a></li>
                       <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->
     <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="<?php echo IMG ?>/NavigationPhotos/1.jpg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="<?php echo IMG ?>/NavigationPhotos/2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="<?php echo IMG ?>/NavigationPhotos/3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2019</h1>
                            <h2>Lookbook.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->
