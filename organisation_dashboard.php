<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:loggin.html");
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ListBnb - Classified Ads listing HTML Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-are">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo-white.png" alt="">
                </a>
            </div>
            <div class="tpoffcanvas__title">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque ab cumque, porro
                    maxime
                    autem sed.</p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5>Contact us</h5>
                </div>
                <ul>
                    <li>
                        <i class="fa-light fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Melbone st,
                            Australia, Ny 12099</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:solaredge@gmail.com">themepure@gmail.com</a>
                    </li>
                    <li>
                        <i class="fal fa-phone-alt"></i>
                        <a href="tel:+48555223224">+48 555 223 224</a>
                    </li>
                </ul>
            </div>
            <div class="tpoffcanvas__input">
                <div class="tpoffcanvas__input-title">
                    <h4>Get UPdate</h4>
                </div>
                <form action="#">
                    <div class="p-relative">
                        <input type="text" placeholder="Enter mail">
                        <button>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->
    <header class="tp-header-height">
        <!-- header area start -->
       
        <div id="header-sticky" class="tp-header-area tp-header-inner-style">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-logo">
                     <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-4 d-none d-xl-block">
                  <div class="tp-header-menu">
                     <nav class="tp-main-menu-content">
                        <ul>
                           <li class="has-dropdown">
                              <a href="index.html">Home</a>
                              <div class="tp-submenu submenu has-homemenu">
                                 <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-3">
                                    <div class="col homemenu">
                                       <div class="homemenu-thumb mb-15">
                                          <img src="assets/img/menu/home-1.jpg" alt="">
                                          <div class="homemenu-btn">
                                             <a class="tp-menu-btn" href="index.html">Demo page</a>
                                          </div>
                                       </div>
                                       <div class="homemenu-content text-center">
                                          <h4 class="homemenu-title">
                                             <a href="index.html">Home 01</a>
                                          </h4>
                                       </div>
                                    </div>
                                    <div class="col homemenu">
                                       <div class="homemenu-thumb mb-15">
                                          <img src="assets/img/menu/home-2.jpg" alt="">
                                          <div class="homemenu-btn">
                                             <a class="tp-menu-btn" href="index-2.html">Demo page</a>
                                          </div>
                                       </div>
                                       <div class="homemenu-content text-center">
                                          <h4 class="homemenu-title">
                                             <a href="index-2.html">Home 02</a>
                                          </h4>
                                       </div>
                                    </div>
                                    <div class="col homemenu">
                                       <div class="homemenu-thumb mb-15">
                                          <img src="assets/img/menu/home-3.jpg" alt="">
                                          <div class="homemenu-btn">
                                             <a class="tp-menu-btn" href="index-3.html">Demo page</a>
                                          </div>
                                       </div>
                                       <div class="homemenu-content text-center">
                                          <h4 class="homemenu-title">
                                             <a href="index-3.html">Home 03</a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="has-dropdown">
                            <a href="listing-grid.html">Listings</a>
                              <ul class="submenu tp-submenu">
                                 <li><a href="listing-grid.html">Listings Grid</a></li>
                                 <li><a href="listing-list.html">Listings List</a></li>
                                 <li><a href="listing-ads.html">Listings Ads</a></li>
                                 <li><a href="listing-details-1.html">Listings Details 01</a></li>
                                 <li><a href="listing-details-2.html">Listings Details 02</a></li>
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Pages</a>
                              <ul class="submenu tp-submenu">
                                 <li><a href="about-us.html">About Us</a></li>
                                 <li><a href="faq.html">Faq</a></li>
                                 <li><a href="login.html">Login</a></li>
                                 <li><a href="register.html">Register</a></li>
                                 <li><a href="conversation.html">Chat</a></li>
                                 <li><a href="profile.html">Profile</a></li>
                                 <li><a href="store.html">Store</a></li>
                                 <li><a href="store-list.html">Store List</a></li>
                                 <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                 <li><a href="blog-details.html">Blog Details</a></li>
                                 <li><a href="404.html">404</a></li>
                                 <li><a href="coming-soon.html">Coming Soon</a></li>
                              </ul>
                           </li>
                           <li><a href="price.html">Plans</a></li>
                           <li class="has-dropdown">
                              <a href="contact.html">Contact</a>
                              <ul class="submenu tp-submenu">
                                 <li><a href="contact.html">Contact</a></li>
                                 <li><a href="contact-2.html">Contact 02</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                  <div class="tp-header-right d-flex align-items-center justify-content-end">
                     <div class="tp-header-sign-box d-none d-sm-block">
                        <a href="login.html"><i class="fa-light fa-user"></i>Sign In</a>
                     </div>
                     <div class="tp-header-btn d-none d-xl-block">
                        <a class="tp-btn-theme" href="listing-ads.html"><span>Post Your Ad <i
                                 class="fa-sharp fa-regular fa-arrow-right-long"></i></span></a>
                     </div>
                     <div class="tp-header-bar d-xl-none">
                        <button class="tp-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i></button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
        <!-- header area end -->
    </header>
    <!-- <br><br><br><br> -->



    <main>

        <!-- category area start -->
        <div class="tp-category-area tp-category-border fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-category-wrap">
                            <div class="tp-category-slider-active">
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="Buy-Drone.html" class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-1.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Buy Drone</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="Buy-Drone-Parts.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Buy Drone Parts</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="Sell-parts-Manu.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Sell Drone Parts</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="enroll-form.html" class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Enroll in Training Program</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="indian_drone_companies_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">DGCA Authorized RPTO's</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="indian_drone_companies_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Drone Instructor Registration</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="indian_drone_companies_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Drone Pilot Registration</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="indian_drone_companies_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Hire Drone Instructor</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="indian_drone_companies_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-2.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">Hire Drone Pilot</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="tp-category-main">
                                    <div class="tp-category-item-wrap">
                                        <a href="india_guide_page.html"
                                            class="tp-category-item d-flex align-items-center">
                                            <div class="tp-category-thumb">
                                                <img src="assets/img/category/category-sm-1-3.png" alt="">
                                            </div>
                                            <div class="tp-category-content">
                                                <h6 class="tp-category-title">List Your Drone Course Here</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- category area end -->

        <!-- hero area start -->
        <div class="tp-hero-area fix p-relative pb-120">
            <div class="tp-hero-shape-3">
                <img src="assets/img/hero/shape-1-3.png" alt="">
            </div>
            <div class="tp-hero-big-text d-none d-lg-block">
                <span>Dronebmart</span>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="tp-hero-left">
                            <div class="tp-hero-title-box pb-60">
                                <h1 class="tp-hero-title"> Your One-Stop Hub<br>for Drone <span>Solutions</span></h1>
                            </div>
                            <p>Hello Maaz, <?php echo $_SESSION['user']; ?></p>
                            <!-- <div class="tp-hero-tab d-flex align-items-center">
                        <ul class="nav nav-tab" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                 type="button" role="tab" aria-controls="home" aria-selected="true">Buy</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                 type="button" role="tab" aria-controls="profile" aria-selected="false">sell</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                 type="button" role="tab" aria-controls="contact" aria-selected="false">rent</button>
                           </li>
                        </ul>
                        <div class="tp-hero-text d-none d-md-block">
                           <span><i>50k+</i> thing is waiting for you</span>
                        </div>
                     </div> -->
                            <!-- <div class="tp-hero-content-wrap z-index-3">
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <div class="tp-hero-input-wrap d-flex justify-content-between align-items-right">
                                 <div class="tp-hero-input-box p-relative">
                                    <input type="text" placeholder="Keyword...">
                                    <div class="tp-hero-input-text">
                                       <span>Find</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-input-box tp-hero-input-pl  p-relative">
                                    <input type="text" placeholder="City or zipcode">
                                    <div class="tp-hero-input-text">
                                       <span>Where</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-button">
                                    <button class="tp-btn-black"><span>Search Now <i
                                             class="fa-sharp fa-regular fa-arrow-right-long"></i></span></button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <div class="tp-hero-input-wrap d-flex justify-content-between align-items-center">
                                 <div class="tp-hero-input-box p-relative">
                                    <input type="text" placeholder="Keyword...">
                                    <div class="tp-hero-input-text">
                                       <span>Find</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-input-box tp-hero-input-pl  p-relative">
                                    <input type="text" placeholder="City or zipcode">
                                    <div class="tp-hero-input-text">
                                       <span>Where</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-button">
                                    <button class="tp-btn-black"><span>Search Now <i
                                             class="fa-sharp fa-regular fa-arrow-right-long"></i></span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="tp-hero-input-wrap d-flex justify-content-between align-items-center">
                                 <div class="tp-hero-input-box p-relative">
                                    <input type="text" placeholder="Keyword...">
                                    <div class="tp-hero-input-text">
                                       <span>Find</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-input-box tp-hero-input-pl  p-relative">
                                    <input type="text" placeholder="City or zipcode">
                                    <div class="tp-hero-input-text">
                                       <span>Where</span>
                                    </div>
                                 </div>
                                 <div class="tp-hero-button">
                                    <button class="tp-btn-black"><span>Search Now <i
                                             class="fa-sharp fa-regular fa-arrow-right-long"></i></span></button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> -->
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div
                            class="tp-hero-thumb-wrap p-relative d-flex justify-content-lg-between justify-content-center">
                            <div class="tp-hero-shape-1 d-none d-md-block tp-pulse">
                                <img src="assets/img/Untitled design.gif" width="140px" alt="">
                            </div>
                            <div class="tp-hero-thumb-1">
                                <img src="assets/img/314x500 Home pg.jpg" alt="">
                            </div>
                            <div class="tp-hero-thumb-box">
                                <div class="tp-hero-thumb-2 fix p-relative mb-10">
                                    <img src="assets/img/hero/hero-1-3.jpg" alt="">
                                    <div class="tp-hero-shape-2">
                                        <img src="assets/img/hero/shape-1-2.png" alt="">
                                    </div>
                                    <div class="tp-hero-thumb-text">
                                        <h6><i class="purecounter" data-purecounter-duration="1"
                                                data-purecounter-end="5000">0</i>
                                            +</h6>
                                        <span>Daily Ads Listing</span>
                                    </div>
                                </div>
                                <div class="tp-hero-thumb-3">
                                    <img src="assets/img/300x300 home pg.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero area end -->

        <!-- location area start -->
        <div class="tp-location-area fix grey-bg pt-120 pb-90">
            <div class="container">
                <div class="tp-location-title-wrap pb-60">
                    <div class="row align-items-center">
                        <div class="col-xl-8">
                            <div class="tp-location-title-box">
                                <span class="tp-section-subtitle">Services</span>
                                <h4 class="tp-section-title">Elevate Your Operations with Drone Services</h4>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="tp-location-tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-location-content">
                        <div class="tab-content" id="myTabContent2">
                            <div class="tab-pane fade show active" id="asia" role="tabpanel" aria-labelledby="asia-tab">
                                <div class="tp-location-wrap">
                                    <div class="row gx-30">
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Aerial Photography & Videography.jpg"
                                                        alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a href="Arieal-details.html">Aerial
                                                            Photography & Videography</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Agriculture.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="Agri-details.html">Agriculture</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Disaster Management.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="Disaster-details.html">Disaster Management</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Healthcare.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="healthcare-details.html">Healthcare</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Livestock Management.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="Livestock-details.html">Livestock Management</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Logistic.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="Logistic-details.html">Logistics</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/Survey & Mapping.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a href="Survey-details.html">Survey &
                                                            Mapping</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/Services/UAV Engineering Consultancy.jpg"
                                                        alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>366+ listing</span>
                                                    <h4 class="tp-location-title"><a href="UAV-details.html">UAV
                                                            Engineering Consultancy</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="usa" role="tabpanel" aria-labelledby="usa-tab">
                                <div class="tp-location-wrap">
                                    <div class="row gx-30">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-3.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>500+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Dhaka</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-4.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>299+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Mumbai</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-1.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>230+ ads</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Tokyo</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-2.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="listing-grid.html">Bangkok</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-5.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Hanoi</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-2.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>366+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Astoi</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="europe" role="tabpanel" aria-labelledby="europe-tab">
                                <div class="tp-location-wrap">
                                    <div class="row gx-30">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-3.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>500+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Dhaka</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-4.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>299+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Mumbai</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-1.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>230+ ads</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Tokyo</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-2.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a
                                                            href="listing-grid.html">Bangkok</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-5.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">

                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Hanoi</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="tp-location-thumb-box p-relative">
                                                <div class="tp-location-thumb">
                                                    <img src="assets/img/location/thumb-1-2.jpg" alt="">
                                                </div>
                                                <div class="tp-location-thumb-text">
                                                    <span>366+ listing</span>
                                                    <h4 class="tp-location-title"><a href="listing-grid.html">Astoi</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- location area end -->

        <!-- listing area start -->
        <div class="tp-listing-area pt-120 pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-listing-title-box text-center mb-65">
                            <span class="tp-section-subtitle">hand-picked listing</span>
                            <h4 class="tp-section-title">View, Compare & Buy Drones from Indian manufacturers</h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".3s">
                        <div class="tp-listing-item">
                            <div class="tp-listing-figure p-relative">
                                <div class="tp-listing-thumbnail">
                                    <a href="listing-details-1.html"><img src="assets/img/listing/listing-1-1.jpg"
                                            alt=""></a>
                                </div>
                                <div class="tp-listing-favourite-icon">
                                    <span>
                                        <svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.6328 1.47266C15.3555 2.94922 15.4375 5.57422 13.9062 7.16016L8.60156 12.6289C8.27344 12.9844 7.69922 12.9844 7.37109 12.6289L2.06641 7.16016C0.535156 5.57422 0.617188 2.94922 2.33984 1.47266C3.84375 0.1875 6.08594 0.433594 7.45312 1.85547L8 2.40234L8.51953 1.85547C9.91406 0.433594 12.1289 0.1875 13.6328 1.47266Z"
                                                fill="currentcolor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="tp-listing-avatar-box">
                                    <ul>
                                        <li>
                                            <div class="tp-listing-avatar-thumb">
                                                <a href="#"><img src="assets/img/avata/avata-sm-1-1.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-listing-content-box">
                                <div class="tp-listing-meta">
                                    <span><i class="fa-light fa-clock"></i> 30 min ago</span>
                                </div>
                                <h4 class="tp-listing-title"><a href="Thanos-Details.html"> Thanos SEYNA - H10 </a>
                                </h4>
                                <div class="tp-listing-location">
                                    <span><i class="fa-light fa-check"></i> Verified</span>
                                    <span><i class="fa-light fa-location-dot"></i> India</span>
                                </div>
                                <div class="tp-listing-bottom-metas d-flex justify-content-between">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                        <div class="tp-listing-product-icon product-icon-color-1">
                                            <span>
                                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.6953 2.625C12.8828 2.625 13.0234 2.8125 12.9766 2.97656L12.8359 3.53906C12.8125 3.67969 12.6953 3.75 12.5781 3.75H12.0859C12.4141 4.03125 12.625 4.42969 12.625 4.875V6C12.625 6.39844 12.4609 6.72656 12.25 6.98438V8.25C12.25 8.67188 11.8984 9 11.5 9H10.75C10.3281 9 10 8.67188 10 8.25V7.5H4V8.25C4 8.67188 3.64844 9 3.25 9H2.5C2.07812 9 1.75 8.67188 1.75 8.25V6.98438C1.51562 6.72656 1.375 6.39844 1.375 6V4.875C1.375 4.42969 1.5625 4.03125 1.89062 3.75H1.42188C1.28125 3.75 1.16406 3.67969 1.14062 3.53906L1 2.97656C0.953125 2.8125 1.09375 2.625 1.28125 2.625H2.66406L3.0625 1.66406C3.46094 0.65625 4.42188 0 5.5 0H8.47656C9.55469 0 10.5156 0.65625 10.9141 1.66406L11.3125 2.625H12.6953ZM4.44531 2.22656L4 3.375H10L9.53125 2.22656C9.34375 1.78125 8.94531 1.5 8.47656 1.5H5.5C5.03125 1.5 4.63281 1.78125 4.44531 2.22656ZM3.25 6C3.69531 6 4.375 6.07031 4.375 5.625C4.375 5.17969 3.69531 4.5 3.25 4.5C2.78125 4.5 2.5 4.80469 2.5 5.25C2.5 5.71875 2.78125 6 3.25 6ZM10.75 6C11.1953 6 11.5 5.71875 11.5 5.25C11.5 4.80469 11.1953 4.5 10.75 4.5C10.2812 4.5 9.625 5.17969 9.625 5.625C9.625 6.07031 10.2812 6 10.75 6Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span>car & parts</span>
                                    </div>
                                    <div class="tp-listing-details-box">
                                        <a href="listing-details-1.html">Details <i
                                                class="fa-regular fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".5s">
                        <div class="tp-listing-item">
                            <div class="tp-listing-figure p-relative">
                                <div class="tp-listing-thumbnail">
                                    <a href="listing-details-1.html"><img src="assets/img/listing/listing-1-2.jpg"
                                            alt=""></a>
                                </div>
                                <div class="tp-listing-avatar-box">
                                    <ul>
                                        <li>
                                            <div class="tp-listing-avatar-icon">
                                                <a class="favourite-icon" href="#">
                                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.20703 1.24219C7.53516 0.585938 8.46484 0.613281 8.76562 1.24219L10.5703 4.87891L14.5625 5.45312C15.2734 5.5625 15.5469 6.4375 15.0273 6.95703L12.1562 9.77344L12.8398 13.7383C12.9492 14.4492 12.1836 14.9961 11.5547 14.668L8 12.7812L4.41797 14.668C3.78906 14.9961 3.02344 14.4492 3.13281 13.7383L3.81641 9.77344L0.945312 6.95703C0.425781 6.4375 0.699219 5.5625 1.41016 5.45312L5.42969 4.87891L7.20703 1.24219Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-listing-avatar-icon">
                                                <a href="#">
                                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.21875 5.125C8.71094 5.125 9.03906 5.69922 8.76562 6.10938L3.95312 14.4219C3.84375 14.6406 3.625 14.75 3.37891 14.75C2.96875 14.75 2.66797 14.3672 2.75 13.957L4.00781 8.625H0.78125C0.371094 8.625 0.0703125 8.29688 0.125 7.88672L1 1.32422C1.02734 0.996094 1.32812 0.75 1.65625 0.75H5.59375C6.00391 0.75 6.33203 1.16016 6.22266 1.59766L5.04688 5.125H8.21875Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-listing-avatar-thumb">
                                                <a href="#"><img src="assets/img/avata/avata-sm-1-2.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-listing-content-box">
                                <div class="tp-listing-meta">
                                    <span><i class="fa-light fa-clock"></i> 30 min ago</span>
                                </div>
                                <h4 class="tp-listing-title"><a href="kisan-details.html">Kisan Agri Drone V.1 </a></h4>
                                <div class="tp-listing-location">
                                    <span><i class="fa-light fa-check"></i> Verified</span>
                                    <span><i class="fa-light fa-location-dot"></i> India</span>
                                </div>
                                <div class="tp-listing-bottom-metas metas-color-2 d-flex justify-content-between">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                        <div class="tp-listing-product-icon product-icon-color-2">
                                            <span>
                                                <svg width="17" height="13" viewBox="0 0 17 13" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.7891 2.77344C15.9766 2.86719 16.0469 3.10156 15.9531 3.26562L14.6172 5.96094C14.5234 6.14844 14.2891 6.21875 14.1016 6.125L12.7656 5.46875C12.5312 5.35156 12.2266 5.53906 12.2266 5.82031V11.75C12.2266 12.1719 11.8984 12.5 11.4766 12.5H5.47656C5.07812 12.5 4.72656 12.1719 4.72656 11.75V5.82031C4.72656 5.53906 4.44531 5.35156 4.1875 5.46875L2.875 6.125C2.6875 6.21875 2.45312 6.14844 2.35938 5.96094L1.02344 3.26562C0.929688 3.10156 1 2.86719 1.1875 2.77344L5.75781 0.5C6.22656 1.15625 7.28125 1.625 8.5 1.625C9.69531 1.625 10.75 1.15625 11.2188 0.5L15.7891 2.77344Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span>clothing</span>
                                    </div>
                                    <div class="tp-listing-price-box">
                                        <span>₹580</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".7s">
                        <div class="tp-listing-item">
                            <div class="tp-listing-figure p-relative">
                                <div class="tp-listing-thumbnail">
                                    <a href="listing-details-1.html"><img src="assets/img/listing/listing-1-8.jpg"
                                            alt=""></a>
                                </div>
                                <div class="tp-listing-avatar-box">
                                    <ul>
                                        <li>
                                            <div class="tp-listing-avatar-icon">
                                                <a href="#">
                                                    <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.21875 5.125C8.71094 5.125 9.03906 5.69922 8.76562 6.10938L3.95312 14.4219C3.84375 14.6406 3.625 14.75 3.37891 14.75C2.96875 14.75 2.66797 14.3672 2.75 13.957L4.00781 8.625H0.78125C0.371094 8.625 0.0703125 8.29688 0.125 7.88672L1 1.32422C1.02734 0.996094 1.32812 0.75 1.65625 0.75H5.59375C6.00391 0.75 6.33203 1.16016 6.22266 1.59766L5.04688 5.125H8.21875Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-listing-avatar-thumb">
                                                <a href="#"><img src="assets/img/avata/avata-sm-1-3.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-listing-content-box">
                                <div class="tp-listing-meta">
                                    <span><i class="fa-light fa-clock"></i> 30 min ago</span>
                                </div>
                                <h4 class="tp-listing-title"><a href="Thanos-details.html">Thanos SEYNA - H10</a></h4>
                                <div class="tp-listing-location">
                                    <span><i class="fa-light fa-check"></i> Verified</span>
                                    <span><i class="fa-light fa-location-dot"></i> India</span>
                                </div>
                                <div class="tp-listing-bottom-metas d-flex justify-content-between">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                        <div class="tp-listing-product-icon product-icon-color-3">
                                            <span>
                                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.6953 2.625C12.8828 2.625 13.0234 2.8125 12.9766 2.97656L12.8359 3.53906C12.8125 3.67969 12.6953 3.75 12.5781 3.75H12.0859C12.4141 4.03125 12.625 4.42969 12.625 4.875V6C12.625 6.39844 12.4609 6.72656 12.25 6.98438V8.25C12.25 8.67188 11.8984 9 11.5 9H10.75C10.3281 9 10 8.67188 10 8.25V7.5H4V8.25C4 8.67188 3.64844 9 3.25 9H2.5C2.07812 9 1.75 8.67188 1.75 8.25V6.98438C1.51562 6.72656 1.375 6.39844 1.375 6V4.875C1.375 4.42969 1.5625 4.03125 1.89062 3.75H1.42188C1.28125 3.75 1.16406 3.67969 1.14062 3.53906L1 2.97656C0.953125 2.8125 1.09375 2.625 1.28125 2.625H2.66406L3.0625 1.66406C3.46094 0.65625 4.42188 0 5.5 0H8.47656C9.55469 0 10.5156 0.65625 10.9141 1.66406L11.3125 2.625H12.6953ZM4.44531 2.22656L4 3.375H10L9.53125 2.22656C9.34375 1.78125 8.94531 1.5 8.47656 1.5H5.5C5.03125 1.5 4.63281 1.78125 4.44531 2.22656ZM3.25 6C3.69531 6 4.375 6.07031 4.375 5.625C4.375 5.17969 3.69531 4.5 3.25 4.5C2.78125 4.5 2.5 4.80469 2.5 5.25C2.5 5.71875 2.78125 6 3.25 6ZM10.75 6C11.1953 6 11.5 5.71875 11.5 5.25C11.5 4.80469 11.1953 4.5 10.75 4.5C10.2812 4.5 9.625 5.17969 9.625 5.625C9.625 6.07031 10.2812 6 10.75 6Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span>electronics</span>
                                    </div>
                                    <div class="tp-listing-price-box">
                                        <span>₹470</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30  wow tpfadeUp" data-wow-duration=".9s"
                        data-wow-delay=".9s">
                        <div class="tp-listing-item">
                            <div class="tp-listing-figure p-relative">
                                <div class="tp-listing-thumbnail">
                                    <a href="listing-details-1.html"><img src="assets/img/listing/listing-1-3.jpg"
                                            alt=""></a>
                                </div>
                                <div class="tp-listing-avatar-box">
                                    <ul>
                                        <li>
                                            <div class="tp-listing-avatar-icon">
                                                <a class="favourite-icon" href="#">
                                                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.20703 1.24219C7.53516 0.585938 8.46484 0.613281 8.76562 1.24219L10.5703 4.87891L14.5625 5.45312C15.2734 5.5625 15.5469 6.4375 15.0273 6.95703L12.1562 9.77344L12.8398 13.7383C12.9492 14.4492 12.1836 14.9961 11.5547 14.668L8 12.7812L4.41797 14.668C3.78906 14.9961 3.02344 14.4492 3.13281 13.7383L3.81641 9.77344L0.945312 6.95703C0.425781 6.4375 0.699219 5.5625 1.41016 5.45312L5.42969 4.87891L7.20703 1.24219Z"
                                                            fill="currentcolor" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tp-listing-avatar-thumb">
                                                <a href="#"><img src="assets/img/avata/avata-sm-1-4.png" alt=""></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tp-listing-content-box">
                                <div class="tp-listing-meta">
                                    <span><i class="fa-light fa-clock"></i> 30 min ago</span>
                                </div>
                                <h4 class="tp-listing-title"><a href="Kisan-Agri-Details.html">Kisan Agri Drone V.1</a>
                                </h4>
                                <div class="tp-listing-location">
                                    <span><i class="fa-light fa-check"></i> Verified</span>
                                    <span><i class="fa-light fa-location-dot"></i> India</span>
                                </div>
                                <div class="tp-listing-bottom-metas d-flex justify-content-between">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                        <div class="tp-listing-product-icon product-icon-color-4">
                                            <span>
                                                <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.6953 2.625C12.8828 2.625 13.0234 2.8125 12.9766 2.97656L12.8359 3.53906C12.8125 3.67969 12.6953 3.75 12.5781 3.75H12.0859C12.4141 4.03125 12.625 4.42969 12.625 4.875V6C12.625 6.39844 12.4609 6.72656 12.25 6.98438V8.25C12.25 8.67188 11.8984 9 11.5 9H10.75C10.3281 9 10 8.67188 10 8.25V7.5H4V8.25C4 8.67188 3.64844 9 3.25 9H2.5C2.07812 9 1.75 8.67188 1.75 8.25V6.98438C1.51562 6.72656 1.375 6.39844 1.375 6V4.875C1.375 4.42969 1.5625 4.03125 1.89062 3.75H1.42188C1.28125 3.75 1.16406 3.67969 1.14062 3.53906L1 2.97656C0.953125 2.8125 1.09375 2.625 1.28125 2.625H2.66406L3.0625 1.66406C3.46094 0.65625 4.42188 0 5.5 0H8.47656C9.55469 0 10.5156 0.65625 10.9141 1.66406L11.3125 2.625H12.6953ZM4.44531 2.22656L4 3.375H10L9.53125 2.22656C9.34375 1.78125 8.94531 1.5 8.47656 1.5H5.5C5.03125 1.5 4.63281 1.78125 4.44531 2.22656ZM3.25 6C3.69531 6 4.375 6.07031 4.375 5.625C4.375 5.17969 3.69531 4.5 3.25 4.5C2.78125 4.5 2.5 4.80469 2.5 5.25C2.5 5.71875 2.78125 6 3.25 6ZM10.75 6C11.1953 6 11.5 5.71875 11.5 5.25C11.5 4.80469 11.1953 4.5 10.75 4.5C10.2812 4.5 9.625 5.17969 9.625 5.625C9.625 6.07031 10.2812 6 10.75 6Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </div>
                                        <span>property</span>
                                    </div>
                                    <div class="tp-listing-price-box">
                                        <span>₹499k</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <!-- category area start -->
                <div class="tp-category-2-area p-relative black-bg z-index fix pt-120 pb-120">
                    <div class="tp-category-2-big-text">
                        <span>Category</span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-3 col-lg-4">
                                <div class="tp-category-2-left">
                                    <div class="tp-category-2-title-box pb-20">
                                        <span class="tp-section-subtitle-2">Training </span>
                                        <h4 class="tp-section-title text-white">DCGA Authorized RPTOs</h4>
                                    </div>
                                    <div class="tp-category-2-text pb-40">
                                        <p>Master the Skies with Expert Training </p>
                                    </div>
                                    <div class="tp-category-2-arrow-box">
                                        <button class="category-next">
                                            <span>
                                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.90625 9.64453C4.76562 9.82031 4.48438 9.82031 4.34375 9.64453L0.230469 5.56641C0.0546875 5.39062 0.0546875 5.14453 0.230469 4.96875L4.34375 0.890625C4.48438 0.714844 4.76562 0.714844 4.90625 0.890625L5.1875 1.13672C5.32812 1.3125 5.32812 1.55859 5.1875 1.73438L2.23438 4.65234H15.4531C15.6641 4.65234 15.875 4.86328 15.875 5.07422V5.42578C15.875 5.67188 15.6641 5.84766 15.4531 5.84766H2.23438L5.1875 8.80078C5.32812 8.97656 5.32812 9.22266 5.1875 9.39844L4.90625 9.64453Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </button>
                                        <button class="category-prev">
                                            <span>
                                                <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.0586 0.890625C11.1992 0.714844 11.4805 0.714844 11.6562 0.890625L15.7344 4.96875C15.9102 5.14453 15.9102 5.39062 15.7344 5.56641L11.6562 9.64453C11.4805 9.82031 11.1992 9.82031 11.0586 9.64453L10.7773 9.39844C10.6367 9.22266 10.6367 8.97656 10.7773 8.80078L13.7305 5.84766H0.546875C0.300781 5.84766 0.125 5.67188 0.125 5.42578V5.07422C0.125 4.86328 0.300781 4.65234 0.546875 4.65234H13.7305L10.7773 1.73438C10.6367 1.55859 10.6367 1.3125 10.7773 1.13672L11.0586 0.890625Z"
                                                        fill="currentcolor" />
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-8 col-xl-9 col-lg-8">
                                <div class="tp-category-2-slider-box">
                                    <div class="swiper-container tp-category-2-active">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/UAV Simulator Training.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a href="UAV-Training.html"> UAV
                                                                Simulator Training</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/UAV Technician Course.jpg" alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a href="UAV-Course.html">UAV
                                                                Technician Course</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/UAV Maintainance & Repair Course.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">

                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a href="UAV-repair.html">UAV
                                                                Maintainance & Repair Course</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/Drone Building Course.jpg" alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a
                                                                href="Drone-Building.html">Drone Building Course</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/UAV Data Processing.jpg" alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a href="UAV-Data.html">UAV Data
                                                                Processing</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/Aerial Cinema & Film Making.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a
                                                                href="Aerial-training.html">Aerial Cinematography And
                                                                Film Making</a></h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/UAV Industrial Appln.jpg" alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a
                                                                href="UAV-Applications.html">UAV Industrial
                                                                Applications</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tp-category-2-item p-relative">
                                                    <div class="tp-category-2-thumb">
                                                        <img src="assets/img/training/Software codes for UAV appln.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="tp-category-2-content">
                                                        <div class="tp-category-2-icon">
                                                            <span>
                                                                <img src="assets/img/drone-3.png" width="45">
                                                            </span>
                                                        </div>
                                                        <h4 class="tp-category-2-title"><a
                                                                href="Software-Codes.html">Software Codes For UAV
                                                                Applications</a></h4>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- category area end -->



                <!-- category area start -->
                <div class="tp-category-3-area pt-120 pb-67">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="tp-category-3-title-box pb-70">
                                    <span class="tp-section-subtitle-3">Hand-Picked Category</span>
                                    <h4 class="tp-section-title">Browse items by <span>category</span></h4>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1 justify-content-center">
                            <div class="col mb-30">
                                <a href="highway-survey.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Highway Surveying </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Highway survey.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="surveymapping.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Survey & Mapping </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Survey.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="wind-turbine.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Windturbins & Transmission </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/wind-farm.png" width="60px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="mobile-tower.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Mobile Tower Inspection</h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/MObile Tower.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="mining-survey.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Mining Survey </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/mining survey.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="Road-Traffic-Management.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Road Traffic Management</h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Road traffic mang.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="Material-reconciling.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Material Reconciling </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Material reconciling.png"
                                                    width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="railway-inspection.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Railway Line Inspection </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Railway line insp.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="Agriculture.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Agriculture Pesticide Spraying </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/drone-4.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href=" Building-Painting.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">High Rise Building Painting </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/High rise building.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="Recreation-Entertainment.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Recreation & Entertainment</h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Recreation & entr.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col mb-30">
                                <a href="Media-Communications.html">
                                    <div class="tp-category-3-item d-flex align-items-center justify-content-between">
                                        <div class="tp-category-3-text">
                                            <h5 class="tp-category-3-title">Media & Communication </h5>

                                        </div>
                                        <div class="tp-category-3-icon">
                                            <span>
                                                <img src="assets/img/Category Icon/Media & comm.png" width="50px">
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- category area end -->










            <!-- brand area start -->
            <div class="tp-brand-area tp-brand-ptb fix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-brand-title-box text-center mb-65">
                                <span class="tp-section-subtitle">brand base ads</span>
                                <h4 class="tp-section-title">Search through brands</h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="row gx-10 row-cols-xl-5 row-cols-lg-5  row-cols-md-3 row-cols-sm-2  row-cols-1 justify-content-center">
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-1.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>300+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-2.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>400+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-3.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>100+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-4.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>600+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-5.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>20+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-6.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>19+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-7.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>52+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-8.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>100+</i> ads</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="tp-brand-item text-center">
                                <div class="tp-brand-thumb">
                                    <img src="assets/img/brand/brand-1-9.png" alt="">
                                </div>
                                <div class="tp-brand-text">
                                    <span><i>500+</i> ads</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand area end -->

            <!-- testimonial area start -->
            <div class="tp-testimonial-area p-relative grey-bg pt-120 pb-140">
                <div class="tp-testimonial-big-text d-none d-lg-block">
                    <span>Feedback</span>
                </div>
                <div class="tp-testimonial-arrow-box">
                    <button class="test-next">
                        <span>
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.90625 9.64453C4.76562 9.82031 4.48438 9.82031 4.34375 9.64453L0.230469 5.56641C0.0546875 5.39062 0.0546875 5.14453 0.230469 4.96875L4.34375 0.890625C4.48438 0.714844 4.76562 0.714844 4.90625 0.890625L5.1875 1.13672C5.32812 1.3125 5.32812 1.55859 5.1875 1.73438L2.23438 4.65234H15.4531C15.6641 4.65234 15.875 4.86328 15.875 5.07422V5.42578C15.875 5.67188 15.6641 5.84766 15.4531 5.84766H2.23438L5.1875 8.80078C5.32812 8.97656 5.32812 9.22266 5.1875 9.39844L4.90625 9.64453Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                    </button>
                    <button class="test-prev">
                        <span>
                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.0586 0.890625C11.1992 0.714844 11.4805 0.714844 11.6562 0.890625L15.7344 4.96875C15.9102 5.14453 15.9102 5.39062 15.7344 5.56641L11.6562 9.64453C11.4805 9.82031 11.1992 9.82031 11.0586 9.64453L10.7773 9.39844C10.6367 9.22266 10.6367 8.97656 10.7773 8.80078L13.7305 5.84766H0.546875C0.300781 5.84766 0.125 5.67188 0.125 5.42578V5.07422C0.125 4.86328 0.300781 4.65234 0.546875 4.65234H13.7305L10.7773 1.73438C10.6367 1.55859 10.6367 1.3125 10.7773 1.13672L11.0586 0.890625Z"
                                    fill="currentcolor" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-brand-title-box text-center mb-60">
                                <span class="tp-section-subtitle">testimonials</span>
                                <h4 class="tp-section-title">Users feedback</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="tp-testimonial-slider-box">
                                <div class="swiper-container tp-testimonial-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tp-testimonial-item p-relative d-flex align-items-start">
                                                <div class="tp-testimonial-number">
                                                    <h6>01</h6>
                                                </div>
                                                <div class="tp-testimonial-avata-box p-relative">
                                                    <div class="tp-testimonial-avata">
                                                        <img src="assets/img/avata/avata-2-1.png" alt="">
                                                    </div>
                                                    <div class="tp-testimonial-quote">
                                                        <span>
                                                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.82812 14V9.54307C9.82812 6.99126 10.4302 4.89388 11.6344 3.25093C12.874 1.57303 14.6625 0.489388 17 0V2.8839C15.8667 3.16355 14.9813 3.68789 14.3438 4.45693C13.7063 5.19101 13.3167 6.09988 13.175 7.18352H15.9375V14H9.82812ZM0 14V9.54307C0 6.99126 0.602083 4.89388 1.80625 3.25093C3.04583 1.57303 4.83437 0.489388 7.17187 0V2.8839C6.03854 3.16355 5.15313 3.68789 4.51562 4.45693C3.87812 5.19101 3.48854 6.09988 3.34687 7.18352H6.10938V14H0Z"
                                                                    fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="tp-testimonial-content">
                                                    <div class="tp-testimonial-rate pb-15">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="tp-testimonial-text pb-10">
                                                        <p>“ Listbnb is a hidden gem for sell, buy tech
                                                            enthusiasts. They offer an array of unique
                                                            and niche gadgets. ”</p>
                                                    </div>
                                                    <div class="tp-testimonial-author-info">
                                                        <span>Alonso D. Dowson</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-testimonial-item p-relative d-flex align-items-start">
                                                <div class="tp-testimonial-number">
                                                    <h6>02</h6>
                                                </div>
                                                <div class="tp-testimonial-avata-box p-relative">
                                                    <div class="tp-testimonial-avata">
                                                        <img src="assets/img/avata/avata-2-2.png" alt="">
                                                    </div>
                                                    <div class="tp-testimonial-quote">
                                                        <span>
                                                            <svg width="17" height="14" viewBox="0 0 17 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.82812 14V9.54307C9.82812 6.99126 10.4302 4.89388 11.6344 3.25093C12.874 1.57303 14.6625 0.489388 17 0V2.8839C15.8667 3.16355 14.9813 3.68789 14.3438 4.45693C13.7063 5.19101 13.3167 6.09988 13.175 7.18352H15.9375V14H9.82812ZM0 14V9.54307C0 6.99126 0.602083 4.89388 1.80625 3.25093C3.04583 1.57303 4.83437 0.489388 7.17187 0V2.8839C6.03854 3.16355 5.15313 3.68789 4.51562 4.45693C3.87812 5.19101 3.48854 6.09988 3.34687 7.18352H6.10938V14H0Z"
                                                                    fill="currentcolor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="tp-testimonial-content">
                                                    <div class="tp-testimonial-rate pb-15">
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                        <i class="fa-solid fa-star"></i>
                                                    </div>
                                                    <div class="tp-testimonial-text pb-10">
                                                        <p>“ Providing false information about a product can harm both
                                                            consumers and
                                                            manufacturers. ”</p>
                                                    </div>
                                                    <div class="tp-testimonial-author-info">
                                                        <span>Miranda h. Halim</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- testimonial area end -->

            <!-- blog area start -->
            <div class="tp-blog-area fix pt-140 pb-90">
                <div class="container">
                    <div class="row gx-45">
                        <div class="col-xl-12">
                            <div class="tp-blog-title-box mb-65">
                                <span class="tp-section-subtitle">insights</span>
                                <h4 class="tp-section-title">Company blogs</h4>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div class="tp-blog-item">
                                <div class="tp-blog-thumb-box">
                                    <div class="tp-blog-thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/thumb-1-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-blog-badge">
                                        <span>Travel</span>
                                    </div>
                                </div>
                                <div class="tp-blog-content">
                                    <div class="tp-blog-meta">
                                        <span class="color">By <i>Alson D.</i></span>
                                        <span><i class="fa-thin fa-calendar-days"></i> Nov 21, 2023</span>
                                    </div>
                                    <h4 class="tp-blog-title"><a class="text-anim" href="blog-details.html">The website
                                            is well-organized, &
                                            making it easy to discover...</a></h4>
                                    <div class="tp-blog-link-box d-flex justify-content-between">
                                        <div class="tp-blog-link">
                                            <a href="blog-details.html"><i class="fa-light fa-arrow-right-long"></i>Read
                                                More</a>
                                        </div>
                                        <div class="tp-blog-icon">
                                            <span><i class="fa-thin fa-comments"></i> 12</span>
                                            <span><i class="fa-regular fa-eye"></i> 1520</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".5s">
                            <div class="tp-blog-item">
                                <div class="tp-blog-thumb-box">
                                    <div class="tp-blog-thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/thumb-1-2.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-blog-badge">
                                        <span>Accessories</span>
                                    </div>
                                </div>
                                <div class="tp-blog-content">
                                    <div class="tp-blog-meta">
                                        <span class="color">By <i>Alson D.</i></span>
                                        <span><i class="fa-thin fa-calendar-days"></i> Nov 21, 2023</span>
                                    </div>
                                    <h4 class="tp-blog-title"><a class="text-anim" href="blog-details.html">If you have
                                            concerns about a product or
                                            want...</a></h4>
                                    <div class="tp-blog-link-box d-flex justify-content-between">
                                        <div class="tp-blog-link">
                                            <a href="blog-details.html"><i class="fa-light fa-arrow-right-long"></i>Read
                                                More</a>
                                        </div>
                                        <div class="tp-blog-icon">
                                            <span><i class="fa-thin fa-comments"></i> 12</span>
                                            <span><i class="fa-regular fa-eye"></i> 1520</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".7s">
                            <div class="tp-blog-item">
                                <div class="tp-blog-thumb-box">
                                    <div class="tp-blog-thumb">
                                        <a href="blog-details.html"><img src="assets/img/blog/thumb-1-1.jpg" alt=""></a>
                                    </div>
                                    <div class="tp-blog-badge">
                                        <span>Property</span>
                                    </div>
                                </div>
                                <div class="tp-blog-content">
                                    <div class="tp-blog-meta">
                                        <span class="color">By <i>Alson D.</i></span>
                                        <span><i class="fa-thin fa-calendar-days"></i> Nov 21, 2023</span>
                                    </div>
                                    <h4 class="tp-blog-title"><a class="text-anim" href="blog-details.html">To share
                                            your experiences, it's best to
                                            provide genuine...</a></h4>
                                    <div class="tp-blog-link-box d-flex justify-content-between">
                                        <div class="tp-blog-link">
                                            <a href="blog-details.html"><i class="fa-light fa-arrow-right-long"></i>Read
                                                More</a>
                                        </div>
                                        <div class="tp-blog-icon">
                                            <span><i class="fa-thin fa-comments"></i> 12</span>
                                            <span><i class="fa-regular fa-eye"></i> 1520</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog area end -->

    </main>

    <footer>

        <!-- footer area start -->
        <div class="tp-footer-area z-index black-bg fix p-relative pt-115 pb-70">
            <div class="tp-footer-big-text d-none d-md-block">
                <span>Dronebmart</span>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-footer-widget">
                            <div class="tp-form-box">
                                <div class="tp-footer-title-box pb-50">
                                    <span class="tp-section-subtitle-2 mb-10">support email</span>
                                    <h4 class="tp-form-title">
                                        <a href="mailto:info@listbnb.com">info@listbnb.com</a>
                                    </h4>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="tp-form-input-box">
                                                <label>full name</label>
                                                <input type="text" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                            <div class="tp-form-input-box">
                                                <label>email address</label>
                                                <input type="email" placeholder="Your email">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="tp-form-textarea-box">
                                                <label>message</label>
                                                <textarea placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="tp-form-button">
                                    <button class="tp-btn-black theme-bg" type="submit">
                                        <span>
                                            Submit
                                            <i class="fa-sharp fa-regular fa-arrow-right-long"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-50 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tp-footer-widget">
                            <div class="tp-footer-right">
                                <h4 class="tp-form-title pb-30">Essential</h4>
                                <div class="tp-footer-list pb-65">
                                    <ul>
                                        <li><a href="Buy-Drone.html">Buy Drone</a></li>
                                        <li><a href="Buy-Drone-Parts.html">Buy Drone Parts</a></li>
                                        <li><a href="Sell-parts-Manu.html">Sell Drone Parts [Manufracturer]</a></li>
                                        <li><a href="Sell-parts-Manu.html">Sell Drone Parts [Reseller]</a></li>
                                        <li><a href="about-us.html">Enroll in training program </a></li>
                                        <li><a href="DGCA-List.html">DGCA authorized RPTO's</a></li>
                                        <li><a href="enroll-form.html">List your drone course here</a></li>
                                        <li><a href="Hire-Pilot.html">Hire Drone Pilots </a></li>
                                        <li><a href="faq.html">Hire Drone Instructor </a></li>
                                        <li><a href="about-us.html"> Drone Pilot Registration </a></li>
                                        <li><a href="drone-instructor.html">Drone Instructor Registration </a></li>
                                        <li><a href="Book-Drone-Services.html">Book Drone Services</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="blog-slidebar.html">Blogs</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="tp-footer-content tp-footer-content-border">
                                    <p><i>Listbnb</i> a Largest Classified Listing Marketplace offers perfect WordPress
                                        Ads
                                        classified Themes to build your own classified websites.</p>
                                    <a href="contact.html"><i class="fal fa-arrow-right-long"></i> Get It Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area end -->

        <!-- copy-right area start -->
        <div class="tp-copyright-area black-bg">
            <div class="container">
                <div class="tp-copyright-ptb">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-7 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div
                                class="tp-copyright-left d-flex align-items-center justify-content-center justify-content-md-start">
                                <div class="tp-copyright-logo d-none d-xl-block">
                                    <a href="index.html"><img src="assets/img/logo/logo-white-2.png" alt=""></a>
                                </div>
                                <div class="tp-copyright-text text-center text-md-start">
                                    <p>Copyright & Design by <a href="#">@ThemePure</a> - 2024</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-5 wow tpfadeUp" data-wow-duration=".9s"
                            data-wow-delay=".3s">
                            <div
                                class="tp-copyright-right justify-content-center d-flex justify-content-sm-end align-items-center">
                                <div class="tp-copyright-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-behance"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <div class="tp-copyright__lang d-none d-md-block">
                                    <ul>
                                        <li>
                                            <a id="tp-copyright__lang-toogle" href="javascript:void(0)">
                                                English
                                                <span><i class="fa-regular fa-angle-up"></i></span>
                                            </a>
                                            <ul class="tp-copyright__lang-submenu">
                                                <li>
                                                    <a href="#">Arabic</a>
                                                </li>
                                                <li>
                                                    <a href="#">Spanish</a>
                                                </li>
                                                <li>
                                                    <a href="#">Mandarin</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copy-right area end -->

    </footer>


    <!-- JS here -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>