@extends('pages.master')

@section('title','Register')

@section('content')
    <!-- ======= Top Bar ======= -->


    <!-- ======= Header ======= -->
   
    <!-- End Header -->

    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <section id="login-page" class="login-page">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h1 class="text-center">Login</h1>
                        </div>

                        <form action="forms/book-a-table.php " method="post " role="form " class="php-email-form " data-aos="fade-up " data-aos-delay="100 ">
                            <div class="row ">
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                                <input type="email " class="form-control " name="email " id="email " placeholder="Enter Your Email " data-rule="email " data-msg="Please enter a valid email ">
                                <div class="validate "></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                                <input type="password " class="form-control " name="Password " id="Password " placeholder="Enter Your Password " data-rule="minlen:4 " data-msg="Please enter a valid password ">
                                <div class="validate "></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 ">
                                <input type="password " class="form-control " name="Password " id="Password " placeholder="Enter Your Password " data-rule="minlen:4 " data-msg="Please enter a valid password ">
                                <div class="validate "></div>
                            </div>
                            <div class="text-center "><button type="submit">Login</button></div>
                    </div>
                    </form>

            </div>
            </section>
            <!-- End login Section -->

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
                Designed by <a href="#">Ahmad Waleed</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div id="preloader "></div>
    <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i class="bi bi-arrow-up-short "></i></a>

@endsection