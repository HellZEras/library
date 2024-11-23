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
                    <li class="menu-item-has-children"><a href="activities.php">Activities</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="#">Shop adult</a>
                                <ul class="sub-menu">
                                    <li><a href="shop_book_adult.php">Shop</a></li>
                                    <li><a href="shop-details_adult">Shop Details</a></li>
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
                    <li class="menu-item-has-children"><a href="blog.php">Blog</a>
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
                                                                        href="index_kids.php"><span>02.</span>kids
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
    <div class="th-hero-wrapper hero-8" id="hero" data-bg-src="assets/img/bg/hero_bg_8_1.png">
        <div class="swiper th-slider hero-slider-5" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style8"><span class="sub-title style1 text-white" data-ani="slideinleft"
                                    data-ani-delay="0.4s">Enjoy reading</span>
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.5s">Discover
                                    more about our library</h1>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.6s"><a href="shop_book_adult.php"
                                        class="th-btn style1 th-icon">Explore library</a></div>
                            </div>
                        </div>
                        <div class="th-hero-image">
                            <div class="hero-img" data-ani="slideinright" data-ani-delay="0.8s"><img
                                    src="assets/img/hero/menu.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-sec">
            <div class="container">
                <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                    class="booking-form style3 ajax-contact">
                    <div class="input-wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="booking-client-box mb-sm-0 mb-3">
                                    <div class="client-thumb-group">
                                        <div class="thumb"><img src="assets/img/shape/client-img-1-1.png" alt="avater">
                                        </div>
                                        <div class="thumb"><img src="assets/img/shape/client-img-1-2.png" alt="avater">
                                        </div>
                                        <div class="thumb"><img src="assets/img/shape/client-img-1-3.png" alt="avater">
                                        </div>
                                        <div class="thumb icon"><i class="fa-light fa-plus"></i></div>
                                    </div>
                                    <h4 class="cilent-box_counter"><span class="counter-number">2</span>k+ people visite
                                        this website
                                    </h4>
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-route"></i></div>
                                <div class="search-input"><label>Destination</label> <select name="subject" id="subject"
                                        class="form-select nice-select">
                                        <option value="Select Destination" selected="selected" disabled="disabled">
                                            Select Destination</option>
                                        <option value="Australia">tunise</option>
                                        <option value="Dubai">nabel</option>
                                        <option value="England">bizerte</option>
                                        <option value="Sweden">el kef</option>
                                        <option value="Thailand">beja </option>
                                        <option value="Egypt">algerie</option>
                                        <option value="Saudi Arab">marroc</option>
                                    </select></div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-regular fa-person-hiking"></i></div>
                                <div class="search-input"><label>Type</label> <select class="nice-select"
                                        name="Adventure" id="Adventure">
                                        <option value="Adventure" selected="selected" disabled="disabled">Adventure
                                        </option>
                                        <option value="Beach">Beach</option>
                                        <option value="Group Tour">romance</option>
                                        <option value="Couple Tour">fantasy</option>
                                        <option value="Family Tour">action</option>
                                    </select></div>
                            </div>
                            <div class="form-group col-md-6 col-lg-auto">
                                <div class="icon"><i class="fa-light fa-clock"></i></div>
                                <div class="search-input"><label>Duration</label> <select
                                        class="form-select nice-select" name="Duration" id="Duration">
                                        <option value="Normal" selected="selected" disabled="disabled">Duration</option>
                                        <option value="1">1 days</option>
                                        <option value="2">2 days</option>
                                        <option value="3">5 days</option>
                                        <option value="4">12 days</option>
                                        <option value="5">14 days</option>
                                        <option value="6">20 days</option>
                                        <option value="7">1 month</option>
                                    </select></div>
                            </div>
                            <div class="form-btn col-md-12 col-lg-auto"><button class="th-btn style3"><img
                                        src="assets/img/icon/search.svg" alt="">Search</button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area mb-20"><span class="sub-title style1">Who We Are</span>
                        <h2 class="sec-title mb-20">Discover why this library is your ultimate option to read books</h2>
                        <p class="sec-text mb-50">At Tourm, our passion for the wilderness is the heart of everything we
                            do. We believe that everyone deserves to experience the magic of the forest. Our expert
                            guides are committed to creating unforgettable adventures tailored to your desires. From
                            thrilling hikes to peaceful retreats, we offer a diverse range of tours that cater to all
                            ages and interests.</p>
                    </div>
                    <div class="img-box7">
                        <div class="img1 global-img"><img
                                src="assets/images/End-Panels_Activity_Hero_Woodridge_edit-768x576.jpg" alt="About">
                        </div>
                        <div class="img2 global-img"><img src="assets/images/istockphoto-1188728777-612x612.jpg"
                                alt="About"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="img-box8">
                        <div class="img3 global-img"><img src="assets/images/library-activity-day-stockcake.jpg"
                                alt="About" style="height:400px ;"></div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">destination</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Guide</h5>
                                    <p class="about-item_text">There are many variations of passages of available but
                                        the majority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="about.php" class="th-btn style3 th-icon">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="position-relative bg-smoke overflow-hidden space" id="service-sec"
        data-bg-src="assets/img/bg/shape_bg_1.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-3">
                    <div class="title-area text-center"><span class="sub-title">Immerse Yourself in the world of
                            books</span>
                        <h2 class="sec-title">Your perfect library</h2>
                        <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider">
                <div class="swiper th-slider has-shadow slider-drag-wrap"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (40).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book1</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency"> 54.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (33).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book2</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">40.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (35).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book 3</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">30.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (43).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book 4</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">70.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (39).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book 5</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">80.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box style4 th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/Jacket (44).jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">book 6</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                    <h4 class="tour-box_price"><span class="currency">65.00 dt</span>/Person</h4>
                                    <div class="tour-action"><span><i class="fa-light fa-clock"></i>7 Days</span> <a
                                            href="tour-guider-details.php" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative overflow-hidden bg-top-center space-top" id="destination-sec"
        data-bg-src="assets/img/bg/destination_bg_1.png">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title text-white">Top books</span>
                <h2 class="sec-title text-white">Discover Our most popular bokks</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="destinationSlider6"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/Jacket (30).jpeg" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">the child</a></h3>
                                    <p class="box-text">125 reader</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/Jacket (24).jpeg" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">the ultimate hidden
                                            truth</a>
                                    </h3>
                                    <p class="box-text">145 reader</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/libr9.jpg" alt="image"></div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">rise above wilderness</a>
                                    </h3>
                                    <p class="box-text">185 reader</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/Jacket (31).jpeg" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">the thing they carried</a>
                                    </h3>
                                    <p class="box-text">205 reader</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/Jacket (49).jpeg" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">the odorfe boonie</a>
                                    </h3>
                                    <p class="box-text">209 reader</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="destination-item2 th-ani">
                                <div class="box-img global-img"><img src="assets/images/Jacket (54).jpeg" alt="image">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="destination-details.php">night of the living rez</a>
                                    </h3>
                                    <p class="box-text">195 reader</p>
                                </div>
                            </div>
                        </div>
                    </div><button data-slider-prev="#destinationSlider6" class="slider-arrow slider-prev"><img
                            src="assets/img/icon/right-arrow2.svg" alt=""></button> <button
                        data-slider-next="#destinationSlider6" class="slider-arrow slider-next"><img
                            src="assets/img/icon/left-arrow2.svg" alt=""></button>
                </div>
            </div>
        </div>
    </section>
    <section class="testi-area7 bg-smoke overflow-hidden space" id="testi-sec" data-bg-src="assets/img/bg/map.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="title-area mb-40"><span class="sub-title">Testimonial</span>
                        <h2 class="sec-title">What Our Clients Think</h2>
                    </div>
                    <div class="swiper th-slider testiSlide5" id="testiSlide7"
                        data-slider-options='{"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid2-thumb"}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“A home that perfectly blends sustainability with luxury
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community, I knew it was where I wanted to live. The commitment to
                                            eco-friendly living”</p>
                                        <h6 class="box-title">Sarah Rahman</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“The home boasts sleek, contemporary architecture with clean
                                            lines and expansive windows, allowing natural light to flood the interiors
                                            architecture with clean lines and expansive It incorporates passive design
                                            principles”</p>
                                        <h6 class="box-title">Angelina Rose</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“Solar panels adorn the roof, harnessing renewable energy to
                                            power the home and even feed excess electricity back into the grid.
                                            harnessing renewable energy to power the High-performance insulation and
                                            triple-glazed”</p>
                                        <h6 class="box-title">Michel Smith</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">A sophisticated rainwater harvesting system collects and
                                            filters rainwater for irrigation and non-potable uses, reducing reliance on
                                            municipal water sources. rainwater harvesting system collects and Greywater
                                            systems</p>
                                        <h6 class="box-title">Jesmen</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">Throughout the interior, eco-friendly materials like
                                            reclaimed wood, bamboo flooring, and recycled glass countertops create a
                                            luxurious yet interior eco-friendly materials like reclaimed wood,
                                            sustainable ambiance.</p>
                                        <h6 class="box-title">Sarah Rahman</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid2">
                                    <div class="box-content">
                                        <p class="box-text">“A home that perfectly blends sustainability with luxury
                                            until I discovered Ecoland Residence. From the moment I stepped into this
                                            community, I knew it was where I wanted to live. The commitment to
                                            eco-friendly living”</p>
                                        <h6 class="box-title">Angelina Rose</h6><span class="box-desig">Traveller</span>
                                        <div class="box-review"><i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper th-slider testi-grid2-thumb style2"
                        data-slider-options='{"effect":"slide","slidesPerView":"6","spaceBetween":7,"loop":false}'>

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-img"><img src="assets/img/testimonial/testi_4_1.png" alt="Image"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img src="assets/img/testimonial/testi_4_2.png" alt="Image"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img src="assets/img/testimonial/testi_4_3.png" alt="Image"></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-img"><img src="assets/img/testimonial/testi_4_4.png" alt="Image"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="space">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title">Meet with Guide</span>
                <h2 class="sec-title">Our Experienced Guide</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider5 has-shadow" id="teamSlider5"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-box style2">
                                <div class="team-img"><img src="assets/images/etu4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">youssef mejri</a></h3>
                                        <span class="team-desig">front-end devolepeur</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box style2">
                                <div class="team-img"><img src="assets/images/etu3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">adem</a></h3>
                                        <span class="team-desig">front-end devolepeur</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box style2">
                                <div class="team-img"><img src="assets/images/etu2.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">ihsen mrade</a></h3>
                                        <span class="team-desig">back-end devolepeur</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-team team-box style2">
                                <div class="team-img"><img src="assets/images/etu1.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">sirine</a></h3>
                                        <span class="team-desig">back-end devolepeur</span>
                                        <div class="th-social"><a target="_blank" href="https://facebook.com/"><i
                                                    class="fab fa-facebook-f"></i></a> <a target="_blank"
                                                href="https://twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                                target="_blank" href="https://instagram.com/"><i
                                                    class="fab fa-instagram"></i></a> <a target="_blank"
                                                href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="counter-sec2 space">
        <div class="container">
            <div class="row gy-4 align-items-center justify-content-center">
                <div class="col-md-6 col-xl-3">
                    <div class="counter-card style3">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">10</span></h3>
                            <h6 class="counter-title">Years Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="counter-card style3">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">1260</span></h3>
                            <h6 class="counter-title">books</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="counter-card style3">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">620</span>m</h3>
                            <h6 class="counter-title">member</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="counter-card style3">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number"></span>8.5/10</h3>
                            <h6 class="counter-title">rate</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="40%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="50%" data-left="2%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="47%" data-left="7%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xl-block" data-bottom="9%" data-left="5%"><img
                src="assets/img/shape/shape_2_3.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="30%" data-right="4%"><img
                src="assets/img/shape/shape_2_2.png" alt="shape"></div>
        <div class="shape-mockup spin d-none d-xl-block" data-bottom="10%" data-right="3%"><img
                src="assets/img/shape/shape_2_5.png" alt="shape"></div>
    </div>


    <footer class="footer-wrapper bg-title footer-layout2 footer-layout5 space-top"
        data-bg-src="assets/img/bg/footer_bg-2.png">
        <div class="container">
            <div class="title-area text-center mt-n3">
                <h2 class="sec-title text-white">Instagram Post</h2>
            </div>
            <div class="gallery-area3">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow"
                        data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"6"}}}'>

                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
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
                                        <p><a href="tel:+01234567890" class="info-box_link">+216 56 645 774</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+000 00 000 000</a></p>
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
                                        <p>manzel abd rahmen , bizerte , tunise</p>
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
        <div class="shape-mockup spin d-none d-xxl-block" data-top="10%" data-left="4%"><img
                src="assets/img/shape/shape_2_11.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="20%" data-right="5%"><img
                src="assets/img/shape/shape_2_2.png" alt="shape"></div>
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
</body>

</html>