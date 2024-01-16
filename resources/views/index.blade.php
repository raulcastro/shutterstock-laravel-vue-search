<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content="Epilog Theme">
    <title>Shutter Stock Search</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css%3Fv=1.0.1.css">
    <link rel="stylesheet" href="assets/css/responsive.css%3Fv=1.0.1.css">

    <style>
        .product-item .product-image img {
            left: 0;
            right: 0;
            text-align: center;
            margin: 0 auto;
            top: 0 !important;
            width: auto;

        }

        .product-name {
            font-size: 14px!important;
        }
    </style>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="spinner-grow">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>

    <header class="header-area">
        <div class="main-navbar">
            <div class="container">
                <div class="row">
                    <div class="col-5 order-xs-1 col-sm-3 col-md-3 col-lg-3">
                        <a class="navbar-brand" href="index.html">
                            <img class="img-fluid" src="assets/images/Logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="col-sm-5 order-xs-2 col-md-6 col-lg-6">
                        <form class="searchbox">
                            <input type="search" placeholder="Search Products ...." name="search"
                                class="searchbox-input" required>
                            <button class="searchbox-submit" type="submit"><i class="bx bx-search-alt"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="product-listing">
        <div class="container">
            <div class="section-title">
                <h3>Recent Listing Product</h3>
            </div>
            <div class="row">
                @foreach ($images as $key => $image)
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="product-item">
                            <div class="product-image" style="">
                                <img class="img-fluid" src="{{ $image['url'] }}" alt="{{ $image['description'] }}"
                                    alt="Product {{ $key + 1 }}">
                            </div>
                            <div class="product-info">
                                <h4 class="product-name">
                                    <a href="#" data-toggle="modal"  data-toggle="modal" data-target="#imageModal"
                                    data-image-src="{{ $image['url'] }}" data-image-alt="{{ $image['description'] }}"
                                        data-target="#imageModal">{{ $image['description'] }}</a>
                                </h4>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="footer-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="footer-1">
                            <img src="assets/images/logo-white.png" alt="Footer Logo">
                            <ul class="social-icon">
                                <li><a href="index.html#"><i class="bx bxl-facebook-square"></i></a></li>
                                <li><a href="index.html#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="index.html#"><i class="bx bxl-linkedin-square"></i></a></li>
                                <li><a href="index.html#"><i class="bx bxl-pinterest"></i></a></li>
                                <li><a href="index.html#"><i class="bx bxl-youtube"></i></a></li>
                                <li><a href="index.html#"><i class="bx bxl-google-plus"></i></a></li>
                            </ul>
                            <div class="contact-info">
                                <p><strong>Hotline: </strong>16768</p>
                                <p><strong>Phone: </strong>(+123) 456-657878</p>
                                <p><strong>Email: </strong><a href="../../../cdn-cgi/l/email-protection.html"
                                        class="__cf_email__"
                                        data-cfemail="c9a0a7afa689acb1a8a4b9a5ace7aaa6a4">[email&#160;protected]</a>
                                </p>
                                <p><strong>Address: </strong>6757 Blvd, The Bronx, NY 1058, USA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="footer-2">
                            <h4 class="footer-title">Pages</h4>
                            <ul class="footer-menu">
                                <li><a href="about.html"><i class="bx bx-radio-circle"></i> About Us</a></li>
                                <li><a href="shop.html"><i class="bx bx-radio-circle"></i> Shop</a></li>
                                <li><a href="blog.html"><i class="bx bx-radio-circle"></i> Blog</a></li>
                                <li><a href="error-404.html"><i class="bx bx-radio-circle"></i> 404 Error</a></li>
                                <li><a href="coming-soon.html"><i class="bx bx-radio-circle"></i> Coming Soon</a>
                                </li>
                                <li><a href="faqs.html"><i class="bx bx-radio-circle"></i> FAQ's</a></li>
                                <li><a href="contact.html"><i class="bx bx-radio-circle"></i> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="footer-2">
                            <h4 class="footer-title">Support</h4>
                            <ul class="footer-menu">
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Help & FAQs</a></li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Knowledge-Based</a>
                                </li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Payment System</a></li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Privacy Policy</a></li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Terms & Conditions</a>
                                </li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Delivery
                                        Information</a></li>
                                <li><a href="index.html#"><i class="bx bx-radio-circle"></i> Order and Returns</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-xl-3">
                        <div class="footer-2">
                            <h4 class="footer-title">Subscribe</h4>
                            <p>Subscrive to our newsletter, so that you can be the first about new product offer.</p>
                            <form action="index.html" method="post">
                                <input type="text" class="form-control" placeholder="Enter Your Email Address"
                                    name="subscribe">
                                <button type="submit" class="btn btn-secondary">Subscribe Now</button>
                            </form>
                            <img class="img-fluid mt-2" src="assets/images/we-accept-payment.png" alt="We Accept">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-copyright">
                            <p class="copyright-text">Copyright &copy; 2020 MightShop. Designed By <a
                                    href="index.html#">Epilog Theme</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="top-bottom-scroll"><i class="bx bx-chevrons-up bx-fade-up"></i></div>

    <!-- Single Modal for Images -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <img class="img-fluid" id="modalImage" alt="">
                </div>

            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/velocity.min.js"></script>
    <script src="assets/js/velocity.ui.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js%3Fv=1.0.0"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="modal"]').on('click', function() {
                var imageSrc = $(this).data('image-src');
                var imageAlt = $(this).data('image-alt');

                console.log(imageAlt);

                $('#imageModal .modal-title').text(imageAlt);
                $('#imageModal #modalImage').attr('src', imageSrc);
                $('#imageModal #modalImage').attr('alt', imageAlt);

                $('#imageModal').modal('show');
            });
        });
    </script>
</body>

</html>
