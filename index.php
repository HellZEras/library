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
                    <li class="menu-item-has-children"><a href="activites.php">Activities</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul>
                            <li><a href="activites.php">Activities</a></li>
                            <li><a href="shop.php">Book Shop</a></li>
                            <li><a href="reservation.php">Book Reservation</a></li>
                            <li><a href="donation.php">Donation</a></li>
                            <li><a href="contact.php">Contact us</a></li>
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
                <div class="header-links">
                    <ul>
                        <li class="d-none d-xl-inline-block"><i class="fa-sharp fa-regular fa-location-dot"></i>
                            <span>15 rue bizerte tunise</span>
                        </li>
                        <li class="d-none d-xl-inline-block"><i class="fa-regular fa-clock"></i> <span> 24/7
                                from 8:00 to 16:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto">
                <div class="header-right">
                    <div class="header-links">
                        <ul>
                            <?php if (isset($_SESSION['username'])): ?>
                                <li>
                                    Hello, 
                                    <a href="profile.php?username=<?php echo urlencode($_SESSION['username']); ?>" style="color: cyan; text-decoration: underline;">
                                        <?php echo htmlspecialchars($_SESSION['username']); ?>
                                    </a>!
                                </li>
                                <a href="/libary/php/logout.php">Logout</a>
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
                            <div class="header-logo"><a href="index.php"><img
                                        src="assets/images/spl-stickylogo.png" alt="Tourm"></a></div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li><a href="activites.php">Activities</a></li>
                                    <li><a href="shop.php">Book Shop</a></li>
                                    <li><a href="reservation.php">Book Reservation</a></li>
                                    <li><a href="donation.php">Donation</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="reservation.php" class="th-btn style3 th-icon">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1"
            data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/menu.jpg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get ready to read more book</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">explore the world of
                                    books</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="shop_book.php"
                                        class="th-btn th-icon">Explore</a> <a href="activites.php"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/menu2.jpeg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get ready to read more book</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">the best library
                                    website</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.php"
                                        class="th-btn th-icon">Explore </a> <a href="service.php"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="assets/img/hero/menu33.jpeg"></div>
                        <div class="container">
                            <div class="hero-style1"><span class="sub-title style1" data-ani="slideinup"
                                    data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">Explore the beauty of
                                    new books</h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s"><a href="tour.php"
                                        class="th-btn th-icon">Explore </a> <a href="service.php"
                                        class="th-btn style2 th-icon">Our Services</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-swiper-custom"><button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img
                        src="assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div><button data-slider-next="#heroSlide1"
                    class="slider-arrow slider-next"><img src="assets/img/icon/left-arrow.svg" alt=""></button>
            </div>
        </div>
    </div>
    <div class="booking-sec">
        <div class="container">
            <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                class="booking-form ajax-contact">
                <div class="input-wrap">
                    <div class="row align-items-center justify-content-between">
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-route"></i></div>
                            <div class="search-input"><label>Destination</label> <select name="subject" id="subject"
                                    class="form-select nice-select">
                                    <option value="Select Destination" selected="selected" disabled="disabled">Select
                                        Destination</option>
                                    <option value="Beja">Beja</option>
                                    <option value="Tunis">Tunis</option>
                                    <option value="Kef">Kef</option>
                                    <option value="Manouba">Manouba</option>
                                    <option value="Ariana">Ariana</option>
                                    <option value="Nabel">Nabel</option>
                                    <option value="Bizerte">Bizerte</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-regular fa-person-hiking"></i></div>
                            <div class="search-input"><label>books</label> <select class="nice-select" name="Adventure"
                                    id="Adventure">
                                    <option value="Adventure" selected="selected" disabled="disabled">Adventure</option>
                                    <option value="Beach">romance</option>
                                    <option value="Group Tour">mystery</option>
                                    <option value="Couple Tour">fantacy</option>
                                    <option value="Family Tour">historical</option>
                                </select></div>
                        </div>
                        <div class="form-group col-md-6 col-lg-auto">
                            <div class="icon"><i class="fa-light fa-clock"></i></div>
                            <div class="search-input"><label>reservation</label> <select class="form-select nice-select"
                                    name="Duration" id="Duration">
                                    <option value="Normal" selected="selected" disabled="disabled">Duration</option>
                                    <option value="1">5 days</option>
                                    <option value="2">7 days</option>
                                    <option value="3">12 days</option>
                                    <option value="4">14 days</option>
                                    <option value="5">17 days</option>
                                    <option value="6">24 days</option>
                                    <option value="7">1 month</option>
                                </select></div>
                        </div>

                        <div class="form-btn col-md-12 col-lg-auto"><button class="th-btn"><img
                                    src="assets/img/icon/search.svg" alt="">Search</button></div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </div>
            </form>
        </div>
    </div>
    <section class="category-area bg-top-center" data-bg-src="assets/img/bg/category_bg_1.png">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Wornderful books to read</span>
                <h2 class="sec-title">Categories</h2>
            </div>
            <div class="swiper categorySlider" id="categorySlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/adventures_of_tom.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Cruises</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/and_then_she_fell.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Hiking</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/ashes.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Airbirds</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/bad_cree.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Wildlife</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/blood_sisters.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Walking</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/bud_not_buddy.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Cruises</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/buffalo_dreamer.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Wildlife</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/chains.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Walking</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/coup!.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Cruises</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/department_q.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Hiking</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/indian_burial_ground.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Airbirds</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/dog_flowers.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Wildlife</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="category-card single">
                            <div class="box-img global-img"><img src="assets/images/books/kristin_kannah.jpeg" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.php">Walking</a></h3><a class="line-btn"
                                href="destination.php">See more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <div class="destination-area position-relative overflow-hidden">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">children </span>
                <h2 class="sec-title">Popular books for children</h2>
            </div>
            <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/little_big_bully.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Maldives</a></h4><span
                                            class="destination-subtitle">15 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/moon_over_manifest.jpeg" alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Thailand</a></h4><span
                                            class="destination-subtitle">22 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/never_whistle_at_night.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Belgium</a></h4><span
                                            class="destination-subtitle">25 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/poukahangatus.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Island</a></h4><span
                                            class="destination-subtitle">28 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/probably_ruby.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Maldives</a></h4><span
                                            class="destination-subtitle">30 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/shadow_and_bone.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Maldives</a></h4><span
                                            class="destination-subtitle">15 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/she_persisted.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Thailand</a></h4><span
                                            class="destination-subtitle">22 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/stamped.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Belgium</a></h4><span
                                            class="destination-subtitle">25 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/the_art_of_war.jpeg"
                                    alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Island</a></h4><span
                                            class="destination-subtitle">28 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img"><img src="assets/images/books/the_boyfriend.jpeg" alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title"><a href="destination-details.php">Maldives</a></h4><span
                                            class="destination-subtitle">30 Listing</span>
                                    </div>
                                    <div class=""><a href="destination-details.php" class="th-btn style2 th-icon">View
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1"><img src="assets/images/aaaaaa.jpg" alt="About"></div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5"><span class="sub-title style1">Let’s Go
                                Together</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">know more about us</h2>
                            <p class="sec-text mb-30">A library is a gateway to a world of knowledge and imagination,
                                offering a vast collection of books, journals, and digital resources for readers and
                                researchers alike. It serves as a community hub, where individuals can explore
                                literature, enhance learning, and connect with others who share a love for reading and
                                discovery. In a library, everyone has access to resources that inspire curiosity, foster
                                lifelong learning, and support intellectual growth.</p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">location</h5>
                                    <p class="about-item_text">we have different location around tunise : beja , tunise
                                        , bizerte ...</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">books</h5>
                                    <p class="about-item_text">we have more than 1000 books from different catagories
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="faq.php" class="th-btn style3 th-icon">see More</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%"><i
                class="fa-sharp fa-solid fa-star"></i><span>4.9k</span></div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img
                src="assets/img/icon/emoji.png" alt=""></div>
    </div>
    <section class="position-relative bg-top-center overflow-hidden space" id="service-sec"
        data-bg-src="assets/img/bg/tour_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center"><span class="sub-title">Best Place For You</span>
                        <h2 class="sec-title">Most selling books</h2>
                        <p class="sec-text">this are books from differenet catagories that was selled in the last 2
                            month</p>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider">
                <div class="swiper th-slider has-shadow slider-drag-wrap"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/the_truth_according_to_ember.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/the_ultimate_hidden_truth_of_the_world.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/to_shape_dragons_breath.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/where_the_red_fern_grows.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/woman_of_light.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img"><img src="assets/images/books/ashes.jpeg"
                                        alt="image"></div>
                                <div class="tour-content">
                                    <h3 class="box-title"><a href="tour-details.php">catagories : adventure</a></h3>
                                    <div class="tour-rating">
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span
                                                style="width:100%">Rated <strong class="rating">5.00</strong> out of 5
                                                based on <span class="rating">4.8</span>(4.8 Rating)</span></div><a
                                            href="tour-details.php" class="woocommerce-review-link">(<span
                                                class="count">4.8</span> Rating)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="gallery-area">
        <div class="container th-container">
            <div class="title-area text-center"><span class="sub-title">Activities</span>
                <h2 class="sec-title">Recent Activities</h2>
            </div>
            <div class="row gy-10 gx-10 justify-content-center align-items-center">
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/images/Library-activities-header.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/Library-activities-header.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/images/istockphoto-1188728777-612x612.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/istockphoto-1188728777-612x612.jpg" alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/images/47433.jpg" class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/47433.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a href="assets/images/library-activity-day-stockcake.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/library-activity-day-stockcake.jpg" alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a
                                href="assets/images/End-Panels_Activity_Hero_Woodridge_edit-768x576.jpg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/End-Panels_Activity_Hero_Woodridge_edit-768x576.jpg"
                                    alt="gallery image">
                            </a></div>
                    </div>
                    <div class="gallery-card">
                        <div class="box-img global-img"><a
                                href="assets/images/library-bulletin-board-ideas-for-elementary-school-library-activities-for-elementary-school-02-2757.jpeg"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/library-bulletin-board-ideas-for-elementary-school-library-activities-for-elementary-school-02-2757.jpeg"
                                    alt="gallery image">
                            </a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="gallery-card">
                        <div class="box-img global-img"><a
                                href="assets/images/Library-Activities-for-Reading-Comprehension.png"
                                class="popup-image">
                                <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div><img
                                    src="assets/images/Library-Activities-for-Reading-Comprehension.png"
                                    alt="gallery image">
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-top="-25%" data-left="0%"><img src="assets/img/shape/line.png"
                alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="3%"><img class="gmovingX"
                src="assets/img/shape/shape_4.png" alt="shape"></div>
    </div>
    <div class="counter-area space">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">10</span></h3>
                            <h6 class="counter-title">Years Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">1655</span></h3>
                            <h6 class="counter-title">book</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number">620</span>m</h3>
                            <h6 class="counter-title">membership</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <div class="counter-shape"><span></span></div>
                        <div class="media-body">
                            <h3 class="box-number"><span class="counter-number"></span>8.30/10</h3>
                            <h6 class="counter-title">rate</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="2%"><img
                src="assets/img/shape/shape_1.png" alt="shape"></div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="2%"><img
                src="assets/img/shape/shape_2.png" alt="shape"></div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="7%"><img
                src="assets/img/shape/shape_3.png" alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-left="3%"><img
                src="assets/img/shape/shape_6.png" alt="shape"></div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="5%" data-right="5%"><img
                src="assets/img/shape/shape_5.png" alt="shape"></div>
    </div>
    <section class="bg-smoke space" data-bg-src="assets/img/bg/team_bg_1.png">
        <div class="container z-index-common">
            <div class="title-area text-center"><span class="sub-title">web site builder</span>
                <h2 class="sec-title">devolepper</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/images/etu4.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">youssef mejri</a></h3>
                                        <span class="team-desig">front-end devolepper</span>
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
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/images/etu2.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">ihsen mrade</a></h3>
                                        <span class="team-desig">back-end devolepper</span>
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
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/images/etu3.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">adem nasri</a></h3>
                                        <span class="team-desig">front-end devolepper</span>
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
                            <div class="th-team team-box">
                                <div class="team-img"><img src="assets/images/etu1.jpg" alt="Team"></div>
                                <div class="team-content">
                                    <div class="media-body">
                                        <h3 class="box-title"><a href="tour-guider-details.php">sirine</a></h3>
                                        <span class="team-desig">back-end devolepper</span>
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
    <section class="testi-area overflow-hidden space" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center"><span class="sub-title">client</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">Une excellente sélection de livres et un personnel toujours prêt
                                à aider. J'ai découvert des œuvres incroyables grâce à leurs recommandations</p>
                            <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Angelina Rose</h3>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">L'organisation de la bibliothèque est top, et le site web rend la
                                recherche de livres très facile. Un vrai plaisir pour les passionnés de lecture !</p>
                            <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">“Le site est très intuitif, et j'adore les événements littéraires
                                qu'ils proposent chaque mois. C'est vraiment un endroit où on se sent bien”</p>
                            <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_2.jpg"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Andrew Simon</h3>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">Un large choix d'ouvrages dans différents genres et toujours des
                                nouveautés. Le personnel est sympathique et compétent. Je recommande</p>
                            <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile">
                                    <div class="testi-card_avater"><img src="assets/img/testimonial/testi_1_1.jpg"
                                            alt="testimonial"></div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Jordan</h3>
                                    </div>
                                </div>
                                <div class="testi-card_review"><i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                        class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                            </div>
                            <p class="testi-card_text">"Facilité de navigation sur le site, et les critiques de livres
                                m'aident souvent à choisir mes prochaines lectures. Une super bibliothèque en ligne !"
                            </p>
                            <div class="testi-card-quote"><img src="assets/img/icon/testi-quote.svg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%"><img
                src="assets/img/shape/line2.png" alt="shape"></div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%"><img
                src="assets/img/shape/shape_7.png" alt="shape"></div>
    </section>


    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-capitalize mb-0">get updated the latest newsletter</h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form"><input class="form-control" type="email"
                                        placeholder="Enter Email" required=""> <button type="submit"
                                        class="th-btn style3">Subscribe Now <img src="assets/img/icon/plane.svg"
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="contact.php">Terms of Service</a></li>
                                    <li><a href="contact.php">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Address</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+216 56 645 774</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+216 00 000 000</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo00@tourm.com"
                                                class="info-box_link">mail1@library.com</a></p>
                                        <p><a href="mailto:support24@tourm.com"
                                                class="info-box_link">mail2@library.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                                    <div class="details">
                                        <p>789 Inner Lane, Holy park, California, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap" data-bg-src="assets/img/bg/copyright_bg_1.jpg">
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
                <div class="error-message" style="color: red; display: none;"></div>
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="" method="POST" class="login-form">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Username or email</label>
                                <input type="text" class="form-control" name="email" id="email" required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pasword" id="pasword" required="required">
                            </div>
                            <div class="form-btn mb-20 col-12">
                                <button type="button" class="th-btn btn-fw th-radius2" onclick="handleLoginClick(event)">Login</button>
                            </div>
                        </div>
                        <div id="forgot_url"><a href="my-account.php">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="error-message" style="color: red; display: none;"></div>
                <h3 class="th-form-title mb-30">Sign up to your account</h3>
                <form action="" method="POST" class="login-form">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="username" id="username" required="required"></div>
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
                        type="password" class="form-control" name="password" id="pass"
                        required="required"></div>

                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2" onclick=handleRegistrationSubmit(event)>Sign up</button>
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
    <script src="assets/js/forms.js" defer></script>
</body>


</html>