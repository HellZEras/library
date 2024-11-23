<?php
    require_once('php/config.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="magic-cursor relative z-10">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>

            <div class="th-mobile-menu">
                <ul>
                    <img src="assets/images/spl-stickylogo.png" alt="">
                    <li class="menu-item-has-children mega-menu-wrap"><a class="active" href="index_adult.php">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index_kids.php">kids page</a></li>
                            <li><a href="index_adult.php">adult page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="activitiess.php">Activities</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="#">Shop adult</a>
                                <ul class="sub-menu">
                                    <li><a href="shop_book_adult.php">Shop</a></li>
                                    <li><a href="shop-details_adult.php">Shop Details</a></li>
                                    <li><a href="cart_adult.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist_adult.php">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop kids</a>
                                <ul class="sub-menu">
                                    <li><a href="shop_book_kids.php">Shop</a></li>
                                    <li><a href="shop-details_kids.php">Shop Details</a></li>
                                    <li><a href="cart_kids.php.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist_kids.php">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation_kids.php">book reservation kids</a></li>
                            <li><a href="reservation_adult.php">book reservation adult</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="donation.php">donation</a>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="header-links">
                                <ul>
                                    <?php if (isset($_SESSION['username'])): ?>
                                        <li>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                                    <?php else: ?>
                                        <li class="d-none d-md-inline-block"><a href="faq.php">FAQ</a></li>
                                        <li class="d-none d-md-inline-block"><a href="contact.php">Support</a></li>
                                        <li><a href="#login-form" class="popup-content">Sign In / Register<i class="fa-regular fa-user"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="index_adult.php"><img
                                        src="assets/images/spl-stickylogo.png" alt="Tourm"></a></div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li class="menu-item-has-children mega-menu-wrap"><a class="active"
                                            href="index_kids.php">Home</a>
                                        <ul class="mega-menu mega-menu-content">
                                            <li>
                                                <div class="container">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img"><img
                                                                        src="assets/img/hero/aaaa.png" alt="Home One">
                                                                    <div class="btn-wrap"><a target="_blank"
                                                                            href="index_adult.php" class="th-btn">View
                                                                            page</a></div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a
                                                                        href="index_adult.php"><span>01.</span>adult
                                                                        book</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img"><img
                                                                        src="assets/images/pic2.png" alt="Home Two">
                                                                    <div class="btn-wrap"><a target="_blank"
                                                                            href="index_kids.php" class="th-btn">View
                                                                            page</a></div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a
                                                                        href="index_adult.php"><span>02.</span>kids
                                                                        book</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="activites.php">Activities</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Shop adult</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop_book_adult.php">Shop</a></li>
                                                    <li><a href="shop-details_adult.php">Shop Details</a></li>
                                                    <li><a href="cart_adult.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="wishlist_adult.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Shop kids</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop_book_kids.php">Shop</a></li>
                                                    <li><a href="shop-details_kids.php">Shop Details</a></li>
                                                    <li><a href="cart_kids.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="wishlist_kids.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="reservation_kids.php">book reservation kids</a></li>
                                            <li><a href="reservation_adult.php">book reservation adult</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donation.php">donation</a>
                                    </li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="contact.php" class="th-btn style3 th-icon">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/hero/menu2.jpeg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Wishlist</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.php">Home</a></li>
                    <li>Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Wishlist</h2>
                </div>
                <form action="#" method="post" autocomplete="off">
                    <table class="tinvwl-table-manage-list">
                        <thead>
                            <tr>
                                <th class="product-cb"><input type="checkbox" class="global-cb"
                                        title="Select all for bulk action"></th>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail">product</th>
                                <th class="product-name"><span class="tinvwl-full">Product Name</span><span
                                        class="tinvwl-mobile">Product</span></th>
                                <th class="product-price">Unit Price</th>
                                <th class="product-date">Date Added</th>
                                <th class="product-stock">Stock Status</th>
                                <th class="product-action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="wishlist_item">
                                <td class="product-cb"><input type="checkbox" name="wishlist_pr[]" value="58"
                                        title="Select for bulk action"></td>
                                <td class="product-remove">
                                    <button type="button" name="tinvwl-remove" value="58" title="Remove"
                                        onclick="removeProduct(this)">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail"><a href="shop-details.php"><img
                                            src="assets/images/Jacket (45).jpeg"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt="image"></a></td>
                                <td class="product-name"><a href="shop-details.php">war</a></td>
                                <td class="product-price"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">18</span>dt</bdi></span></td>
                                <td class="product-date"><time class="entry-date"
                                        datetime="2021-11-21 03:54:24">November 21, 2024</time></td>
                                <td class="product-stock">
                                    <p class="stock in-stock"><span><i class="fas fa-check"></i></span><span
                                            class="tinvwl-txt">In stock</span></p>
                                </td>
                                <td class="product-action"><button class="button th-btn" name="tinvwl-add-to-cart"
                                        value="58" title="Add to Cart"><i class="fal fa-shopping-cart"></i><span
                                            class="tinvwl-txt">Add to Cart</span></button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div class="social-buttons"><span>Share on</span>
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=permalink"
                                class="social social-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://twitter.com/share?url=permalink" class="social social-twitter"
                                title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://pinterest.com/pin/create/button/?url=permalink"
                                class="social social-pinterest" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li><a href="https://api.whatsapp.com/send?text=permalink" class="social social-whatsapp"
                                title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://vecurosoft.com/products/wordpress/foodelio/wishlist/974b61/"
                                class="social social-clipboard" title="Clipboard"><i class="far fa-clipboard"></i></a>
                        </li>
                        <li><a href="mailto:?body=permalink" class="social social-email" title="Email"><i
                                    class="far fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-white text-capitalize mb-0">don't forgette to join us
                                </h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form style2"><input class="form-control" type="email"
                                        placeholder="Enter Email" required=""> <button type="submit"
                                        class="th-btn style1">Subscribe Now <img src="assets/img/icon/plane2.svg"
                                            alt=""></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">

                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="index_adult.php">Home</a></li>
                                    <li><a href="contact.php">Terms of Service</a></li>
                                    <li><a href="contact.php">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+01 234 567 890</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+09 876 543 210</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo00@tourm.com"
                                                class="info-box_link">support1@gmail.com</a></p>
                                        <p><a href="mailto:support24@tourm.com"
                                                class="info-box_link">support2@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                                    <div class="details">
                                        <p>bizerte , tunisia</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2024 <a href="home-travel.php">Tourm</a>. All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card"><span class="title">We Accept</span> <img
                                src="assets/img/shape/cards.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%"><img
                src="assets/img/shape/shape_8.png" alt="shape"></div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
        <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="false">Login</button></li>
            <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                    aria-controls="pills-profile" aria-selected="true">Register</button></li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                        class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12"><label>Username or email</label> <input type="text"
                                    class="form-control" name="email" id="email" required="required"></div>
                            <div class="form-group col-12"><label>Password</label> <input type="password"
                                    class="form-control" name="pasword" id="pasword" required="required"></div>
                            <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                    Message</button></div>
                        </div>
                        <div id="forgot_url"><a href="my-account.php">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                    class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="usename" id="usename" required="required"></div>
                        <div class="form-group col-12"><label>First name*</label> <input type="text"
                                class="form-control" name="firstname" id="firstname" required="required"></div>
                        <div class="form-group col-12"><label>Last name*</label> <input type="text" class="form-control"
                                name="lastname" id="lastname" required="required"></div>
                        <div class="form-group col-12"><label for="new_email">Your email*</label> <input type="text"
                                class="form-control" name="new_email" id="new_email" required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Confirm email*</label> <input
                                type="text" class="form-control" name="new_email_confirm" id="new_email_confirm"
                                required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Password*</label> <input
                        type="text" class="form-control" name="passwordf" id="pass"
                        required="required"></div>

                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/matter.min.js"></script>
    <script src="assets/js/matterjs-custom.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/controle.js"></script>
</body>

</html>