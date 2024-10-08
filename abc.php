<?php
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "InfraKonnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT title, description, file_name, file_path, upload_date FROM uploads";
$result = $conn->query($sql);
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
<style>/* Container for all log columns */
.log-container {
    display: flex;
    flex-direction: column;
    gap: 16px; /* Space between each log column */
}

/* Style for each log column */
.log-column {
    display: flex;
    flex-direction: column;
    gap: 16px; /* Space between items within a column */
}

/* Style each log item */
.log-item {
    display: flex;
    gap: 16px; /* Space between image and content */
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    background-color: #fff;
    padding: 16px;
    margin-bottom: 16px; /* Space between each log item */
}

/* Style the thumbnail area */
.log-thumbnail {
    flex-shrink: 0; /* Prevent the thumbnail from shrinking */
}

.log-thumbnail-img {
    max-width: 150px; /* Set the maximum width of the thumbnail */
    max-height: 100px; /* Set the maximum height of the thumbnail */
}

.log-thumbnail-img img {
    width: 100%; /* Make the image fit within the thumbnail container */
    height: auto; /* Maintain aspect ratio */
    display: block;
}

/* Style the content area */
.log-content {
    flex: 1; /* Allow content to take up remaining space */
}

.log-meta {
    font-size: 0.875rem;
    color: #888;
}

.log-title {
    margin: 0;
    font-size: 1.25rem;
}

.log-title a {
    text-decoration: none;
    color: #333;
}

.log-description p {
    margin: 8px 0;
    color: #555;
}

.log-price-box {
    margin-top: 16px;
}

.log-price a {
    color: #007bff;
    text-decoration: none;
}

.log-price a:hover {
    text-decoration: underline;
}

</style>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima incidunt eaque ab cumque, porro maxime
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
      <div  class="tp-header-transparent">
         <div id="header-sticky" class="tp-header-area tp-header-ptb tp-header-style-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                     <div class="tp-header-logo">
                        <a href="index.html"><img src="assets/img/logo/dronebmart.png" width="400"></a>
                     </div>
                  </div>
                  <div class="col-xl-10 d-none d-xl-block">
                     <div class="tp-header-menu">
                        <nav class="tp-main-menu-content">
                           <ul>
                              <li><a href="Book-Drone-Services.html">Book Drone Services</a></li>
                              <li class="has-dropdown">
                               <a href="#">Dronemart</a>
                                 <ul class="submenu tp-submenu">
                                    <li><a href="Buy-Drone.html">Buy Drone</a></li>
                                    <li><a href="Buy-Drone-Parts.html">Buy Drone Parts</a></li>
                                    <li><a href="Sell-parts-Manu.html">Sell Drone Parts </a></li>
                                    
                                 </ul>
                              </li>
                              <li class="has-dropdown">
                                 <a href="#">Drone Training</a>
                                 <ul class="submenu tp-submenu">
                                    <li><a href="enroll-form.html">Enroll in training program </a></li>
                                    <li><a href="DGCA-List.html">DGCA authorized RPTO's</a></li>
                                    <li><a href="list-drone-form.html">List your drone course here</a></li>
                                 </ul>
                              </li>
                           <li class="has-dropdown">
                                 <a href="#">Drone Career</a>
                                 <ul class="submenu tp-submenu">
                                    <li><a href="Hire-Pilot.html">Hire Drone Pilots </a></li>
                                    <li><a href="Hire-Drone-Instructor.html">Hire Drone Instructor </a></li>
                                    <li><a href="Drone-pilot-registration.html"> Drone Pilot Registration  </a></li>
                                    <li><a href="drone-instructor.html">Drone Instructor Registration </a></li>
                                   </ul>
                              </li>
                              <li><a href="about-us.html">About Us</a></li>
                              <li><a href="blog-sidebar.html">Blogs</a></li>
                              <li><a href="contact.html">Contact Us</a></li>
                              
                           </ul>
                           
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-6 col-md-6 col-6">
                     <div class="tp-header-right d-flex align-items-center justify-content-end">
                        
                      
                        <div class="tp-header-bar d-xl-none">
                           <button class="tp-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header area end -->
   </header>
   <br><br><br><br>

   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area black-bg breadcrumb__height breadcrumb__border">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content text-center z-index">
                     <div class="breadcrumb__list">
                        <span><a href="index.html">Home</a></span>
                        <span class="dvdr"><i class="fa-solid fa-angle-right"></i></span>
                        <span>Search Results</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- listing area start -->
      <div class="tp-list-area pb-80">
         <div class="container">
            <div class="tp-list-top-wrap tp-list-top-border mb-100">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-3">
                     <div class="tp-list-top-left">
                        <div class="tp-list-top-text">
                           <span>Search from here</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-9">
                    <div class="tp-list-top-right">
                       <div class="tp-hero-input-wrap d-flex justify-content-between align-items-center">
                          <div class="tp-header__category-wrap">
                             <div class="tp-header__category" id="tp-header__category-toogle">
                                <ul>
                                   <li>
                                      <a href="javascript:void(0)">
                                         Category
                                         <span><i class="fa-regular fa-angle-down"></i></span>
                                      </a>
                                      <ul class="tp-header__category-submenu">
                                         <li>
                                            <a href="#">Highway Surveying</a>
                                         </li>
                                         <li>
                                            <a href="#">Survey & Mapping</a>
                                         </li>
                                         <li>
                                            <a href="#">Windturbins & Transmission Monitoring</a>
                                         </li>
                                         <li>
                                           <a href="#">Mobile Tower Inspection</a>
                                        </li>
                                        <li>
                                           <a href="#">Mining  Survey</a>
                                        </li>
                                        <li>
                                           <a href="#">Material Reconciling </a>
                                        </li>
                                        <li>
                                           <a href="#">Road Traffic Management </a>
                                        </li>
                                        <li>
                                           <a href="#">Railway Line Inspection</a>
                                        </li>
                                        <li>
                                           <a href="#">Agriculture Pesticide Spraying</a>
                                        </li>
                                        <li>
                                           <a href="#"> High Rise Building Painting </a>
                                        </li>
                                        <li>
                                           <a href="#"> Recreation & Entertainment </a>
                                        </li>
                                        <li>
                                           <a href="#">Media & Communication</a>
                                        </li>
                                      </ul>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          
                          <div class="tp-hero-input-box tp-hero-input-pl  p-relative">
                           <input type="text" placeholder="Location">
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
              </div>
           </div>
            <div class="tp-list-wrap">
               <div class="row">
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-list-left">
                        <div class="tp-list-search-box mb-40">
                           <div class="row align-items-end">
                              <div class="col-xl-6 col-sm-6">
                                 <div class="tp-list-text">
                                    <span><i>33 </i> Search Results</span>
                                 </div>
                              </div>
                              <div class="col-xl-6 col-sm-6">
                                 <div class="tp-list-tab-box">
                                </div>
                              </div>
                           </div>
                        </div>
                        <div class="log-row">
                        <?php
// Database connection (assuming $conn is your database connection)
$template = file_get_contents('listing-details-1.html');


if ($result->num_rows > 0) {
   // Output data of each row
   while ($row = $result->fetch_assoc()) {
       $unique_filename = 'listing-details-' . $row['id'] . '.html';

       // Replace placeholders with actual data
       $page_content = str_replace('{{title}}', htmlspecialchars($row['title']), $template);
       $page_content = str_replace('{{location}}', 'New York, United States', $page_content); // Replace with actual location if available
       $page_content = str_replace('{{upload_date}}', date("F j, Y, g:ia", strtotime($row['upload_date'])), $page_content);
       $page_content = str_replace('{{views}}', '4000', $page_content); // Replace with actual views if available
       $page_content = str_replace('{{description}}', htmlspecialchars($row['description']), $page_content);
       $page_content = str_replace('{{additional_description}}', 'Additional details about the log...', $page_content); // Replace with actual additional description if available
       $page_content = str_replace('{{file_path}}', htmlspecialchars($row['file_path']), $page_content);
       $page_content = str_replace('{{file_name}}', htmlspecialchars($row['file_name']), $page_content);

       // Save the page content to a new HTML file
       file_put_contents($unique_filename, $page_content);

       // Output the log item with a link to the generated page
       echo '<div class="log-item">';
       echo '<div class="log-thumbnail">';
       echo '<div class="log-thumbnail-img">';
       echo '<img src="' . htmlspecialchars($row['file_path']) . '" alt="">';
       echo '</div>';
       echo '</div>';
       echo '<div class="log-content">';
       echo '<div class="log-meta">';
       echo '<span>' . date("F j, Y", strtotime($row['upload_date'])) . '</span>'; // Format date as needed
       echo '</div>';
       echo '<h4 class="log-title"><a href="' . $unique_filename . '">' . htmlspecialchars($row['title']) . '</a></h4>';
       echo '<div class="log-description">';
       echo '<p>' . htmlspecialchars($row['description']) . '</p>';
       echo '</div>';
       echo '<div class="log-price-box">';
       echo '<div class="log-price">';
       echo '<a href="' . htmlspecialchars($row['file_path']) . '" download="' . htmlspecialchars($row['file_name']) . '">Download Document</a>';
       echo '</div>';
       echo '</div>';
       echo '</div>';
       echo '</div>';
   }
} else {
   echo '<p>No logs found.</p>';
}
?>
</div>

                        <div class="basic-pagination text-center pagination-style-2 pt-35">
                           <nav>
                              <ul>
                                 <li>
                                    <a href="listing-list.html">
                                       <i class="fa-regular fa-arrow-left"></i>
                                    </a>
                                 </li>
                                 <li class="current">
                                    <a href="listing-list.html">1</a>
                                 </li>
                                 <li>
                                    <a href="listing-list.html">2</a>
                                 </li>
                                 <li>
                                    <span>---</span>
                                 </li>
                                 <li>
                                    <a href="listing-list.html">6</a>
                                 </li>
                                 <li>
                                    <a href="listing-list.html">
                                       <i class="fa-regular fa-arrow-right"></i>
                                    </a>
                                 </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                      <div class="tp-list-sidebar-widget mb-40">
                        <h4 class="tp-list-sidebar-widget-title">More Category</h4>
                        <div class="tp-list-sidebar-category">
                           <ul>
                              <li>
                                 <a href="#">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Highway Surveying</span>
                                    </div>
                                 </a>
                                 <span>23</span>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span> Survey & Mapping</span>
                                    </div>
                                 </a>
                                 <span>10</span>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Windturbins & Transmission</span>
                                    </div>
                                 </a>
                                 <span>33</span>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Mobile Tower Inspection</span>
                                    </div>
                                 </a>
                                 <span>51</span>
                              </li>
                              <li>
                                 <a href="#">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Mining Survey</span>
                                    </div>
                                 </a>
                                 <span>19</span>
                              </li>
                              <li>
                                 <a href="Road-Traffic-Management.html">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Road Traffic Management</span>
                                    </div>
                                 </a>
                                 <span>41</span>
                              </li>
                              <li>
                                <a href="Agriculture.html">
                                   <div class="tp-listing-product-info d-flex align-items-center">
                                    <div class="tp-listing-product-icon product-icon-color-7">
                                       <span>
                                         <img src="assets/img/drone-3.png" width="25px">
                                       </span>
                                    </div>
                                      <span>Agriculture Pesticide Spraying</span>
                                   </div>
                                </a>
                                <span>41</span>
                             </li>
                             <li>
                                <a href=" Building-Painting.html">
                                   <div class="tp-listing-product-info d-flex align-items-center">
                                    <div class="tp-listing-product-icon product-icon-color-7">
                                       <span>
                                         <img src="assets/img/drone-3.png" width="25px">
                                       </span>
                                    </div>
                                      <span> High Rise Building Painting</span>
                                   </div>
                                </a>
                                <span>41</span>
                             </li>
                             <li>
                                <a href="Recreation-Entertainment.html">
                                   <div class="tp-listing-product-info d-flex align-items-center">
                                    <div class="tp-listing-product-icon product-icon-color-7">
                                       <span>
                                         <img src="assets/img/drone-3.png" width="25px">
                                       </span>
                                    </div>
                                      <span>Recreation & Entertainment</span>
                                   </div>
                                </a>
                                <span>41</span>
                             </li>
                             <li>
                                <a href="Media-Communications.html">
                                   <div class="tp-listing-product-info d-flex align-items-center">
                                    <div class="tp-listing-product-icon product-icon-color-7">
                                       <span>
                                         <img src="assets/img/drone-3.png" width="25px">
                                       </span>
                                    </div>
                                      <span>Media & Communication</span>
                                   </div>
                                </a>
                                <span>41</span>
                             </li>
                            
                              <li>
                                 <a href="Material-reconciling.html">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Material Reconciling</span>
                                    </div>
                                 </a>
                                 <span>22</span>
                              </li>
                              <li>
                                 <a href="railway-inspection.html">
                                    <div class="tp-listing-product-info d-flex align-items-center">
                                       <div class="tp-listing-product-icon product-icon-color-7">
                                          <span>
                                            <img src="assets/img/drone-3.png" width="25px">
                                          </span>
                                       </div>
                                       <span>Railway Line Inspection</span>
                                    </div>
                                 </a>
                                 <span>30</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- listing area end -->

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
                                  <li><a href="login.html">List your drone course here</a></li>
                                  <li><a href="about-us.html">Hire Drone Pilots </a></li>
                                  <li><a href="faq.html">Hire Drone Instructor </a></li>
                                  <li><a href="about-us.html"> Drone Pilot Registration  </a></li>
                                   <li><a href="drone-instructor.html">Drone Instructor Registration </a></li>
                                  <li><a href="Book-Drone-Services.html">Book Drone Services</a></li>
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="blog-slidebar.html">Blogs</a></li>
                                  <li><a href="contact.html">Contact Us</a></li>
                         </ul>
                      </div>
                      <div class="tp-footer-content tp-footer-content-border">
                         <p><i>Listbnb</i> a Largest Classified Listing Marketplace offers perfect WordPress Ads
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