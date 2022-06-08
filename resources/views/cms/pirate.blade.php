<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurant</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Untitled-2.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- =======================================================
  * Template Name: Restaurant - v3.7.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <header style="background-color: rgba(35, 43, 56, 0);">
        <div class="container">
            <div class="top-head">
                <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <ul class="top-menu">
                    <li><a href="login.html"><i class="fas fa-user"></i>Log In</a></li>
                    <li><a href="register.html"><i class="fas fa-edit"></i>Register Now</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-cente">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html">Restaurant</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="index.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
                    <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
                    <li><a class="nav-link scrollto" href="#events">Events</a></li>
                    <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#delivery">Delivery</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Book a table</a>

        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <!-- ======= Delivery Section ======= -->
                <section id="delivery" class="delivery section-bg">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Pirate</h2>
                            <p>Check Our Tasty Menu Pirate</p>
                        </div>

                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <ul id="menu-flters">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-starters">Starters</li>
                                    <li data-filter=".filter-salads">Salads</li>
                                    <li data-filter=".filter-specialty">Specialty</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                            <div class="col-lg-6 menu-item filter-starters">
                                <a href="assets/img/menu/lobster-bisque.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/lobster-bisque.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname">Lobster Bisque</a><span>$<span id="price">5.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>

                            </div>

                            <div class="col-lg-6 menu-item filter-specialty">
                                <a href="assets/img/menu/bread-barrel.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/bread-barrel.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname1">Bread Barrel</a><span>$<span class="price">6.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-starters">
                                <a href="assets/img/menu/cake.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/cake.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname2">Crab Cake</a><span>$<span class="price">7.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-salads">
                                <a href="assets/img/menu/caesar.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/caesar.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname3">Caesar Selections</a><span>$<span class="price">8.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="addtocart btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-specialty">
                                <a href="assets/img/menu/tuscan-grilled.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/tuscan-grilled.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname4">Tuscan Grilled</a><span>$<span class="price">9.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-starters">
                                <a href="assets/img/menu/mozzarella.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/mozzarella.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname5">Mozzarella Stick</a><span>$<span class="price">4.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Lorem, deren, trataro, filede, nerada
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-salads">
                                <a href="assets/img/menu/greek-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/greek-salad.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname6">Greek Salad</a><span>$<span class="price">9.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Fresh spinach, crisp romaine, tomatoes, and Greek olives
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-salads">
                                <a href="assets/img/menu/spinach-salad.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/spinach-salad.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname7">Spinach Salad</a><span>$<span class="price">9.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                            <div class="col-lg-6 menu-item filter-specialty">
                                <a href="assets/img/menu/lobster-roll.jpg" class="menu-img gallery-lightbox" data-gall="gallery-item">
                                    <img src="assets/img/menu/lobster-roll.jpg" alt="" class="img-fluid">
                                </a>
                                <div class="menu-content">
                                    <a href="#" id="proname8">Lobster Roll</a><span>$<span class="price">12.95</span></span>
                                </div>
                                <div class="menu-ingredients">
                                    Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                                </div>
                                <div class="buy d-flex justify-content-end">
                                    <input type="number" id="countPro" class="border-0 rounded-1 m-2 w-25 d-block link-light" style="background: #0c0b09; border-color: #625b4b;">
                                    <button type="button" onclick="addList(this)" class="btn d-block" style="background-color: #cda45e; color: white;">Add Cart</button>
                                </div>
                            </div>

                        </div>

                        <hr>


                        <div class="row">
                            <table>
                                <thead>
                                    <th>product</th>
                                    <th>price</th>
                                    <th>count</th>
                                    <th>total</th>
                                    <th><button type=" button" id="dALL" class="btn" style="background-color: #cda45e; color: white;">delete All</button></th>
                                </thead>
                                <tbody id="tableShow">


                                </tbody>
                            </table>

                        </div>
                    </div>


            </div>
            </section>
            <!-- End Delivery Section -->

            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Restaurant</h3>
                            <p>
                                A108 Adam Street <br> NY 535022, USA<br><br>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Restaurant</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by
                <a href="#">Ahmad Waleed</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader "></div>
    <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js "></script>
    <script src="assets/vendor/php-email-form/validate.js "></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js "></script>
    <script src="assets/js/app.js "></script>


</body>

</html>