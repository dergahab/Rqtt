<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Engitech</title>
    <link rel="shortcut icon" type="{{ asset('Front') }}/image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/flaticon.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/owl.theme.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/magnific-popup.css" />

    <link rel="stylesheet" href="{{ asset('Front') }}/style.css" />
    <link rel="stylesheet" href="{{ asset('Front') }}/css/royal-preload.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Front') }}/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Front') }}/plugins/revolution/revolution/css/navigation.css">
</head>

<body class="royal_preloader">
    <div id="page" class="site">
        <header id="site-header" class="site-header sticky-header header-static">
            <!-- Main Header start -->
            <div class="header-topbar style-2">
                <div class="octf-area-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="social-list">
                                    <li><a href="{{ $contact->twitter }}" target="_self"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ $contact->facebook }}" target="_self"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $contact->linkedin }}" target="_self"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{ $contact->img }}" target="_self"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="col-md-8">
                                <ul class="topbar-info align-self-end clearfix">
                                    <li><a href="tel:+1-800-456-478-23"><i class="fas fa-phone-alt"></i> {{ $contact->tel1 }}</a></li>
                                    <li><a href="mailto:engitech@mail.com"><i class="fas fa-envelope"></i> {{ $contact->email }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="{{ route('main.index') }}">
                                            <img src="{{ asset('front') }}/images/logo.svg" alt="Engitech" class="">
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu">
                                            <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                                <a href="index.html">Əsas Səhifə</a>
                                                <ul class="sub-menu">
                                                    <li class="current-menu-item"><a href="index.html">Əsas Səhifə</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Haqqımızda</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about-us.html">About us</a></li>
                                                    <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                                    <li><a href="our-team.html">Our team</a></li>
                                                    <li><a href="single-team.html">Single team</a></li>
                                                    <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="single-product.html">Single Product</a></li>
                                                            <li><a href="checkout-page.html">Checkout Page</a></li>
                                                            <li><a href="cart-page.html">Cart Page</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="typography.html">Typography</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="faq.html">FAQS</a></li>
                                                    <li><a href="404-error.html">404 Error</a></li>
                                                    <li><a href="cooming-soon.html">Coming Soon</a></li>
                                                </ul>
                                            </li>

                                            <li class="menu-item-has-children"><a href="#">Xidmətlər</a>
                                                <ul class="sub-menu">
                                                    <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                                    <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                                    <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>
                                                            <li><a href="portfolio-4-column.html">Portfolio 4 Columns</a></li>
                                                            <li><a href="portfolio-no-gap.html">Portfolio No Gap</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children"><a href="portfolio-details-1.html">Portfolio Details</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="portfolio-details-1.html">Single Layout 1</a></li>
                                                            <li><a href="portfolio-details-2.html">Single Layout 2</a></li>
                                                            <li><a href="portfolio-details-3.html">Single Layout 3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="blog.html">Layihələr</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Listing</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="post.html">Blog Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="blog.html">Qalereya</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog.html">Blog Listing</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="post.html">Blog Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Əlaqə</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="{{ route('main.index') }}">
                                <img src="{{ asset('Front') }}/images/logo.svg" alt="Engitech">
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>

                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                                <li class="menu-item-has-children current-menu-item current-menu-ancestor">
                                    <a href="index.html">Əsas Səhifə</a>
                                    <ul class="sub-menu">
                                        <li class="current-menu-item"><a href="index.html">Əsas Səhifə</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Haqqımızda</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="why-choose-us.html">Why Choose Us</a></li>
                                        <li><a href="our-team.html">Our team</a></li>
                                        <li><a href="single-team.html">Single team</a></li>
                                        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="checkout-page.html">Checkout Page</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                        <li><a href="faq.html">FAQS</a></li>
                                        <li><a href="404-error.html">404 Error</a></li>
                                        <li><a href="cooming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Xidmətlər</a>
                                    <ul class="sub-menu">
                                        <li><a href="it-services.html">It Services</a></li>
                                        <li><a href="web-development.html">Web Development</a></li>
                                        <li><a href="mobile-development.html">Mobile Development</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Layihələr</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                                        <li><a href="portfolio-carousel.html">Portfolio Carousel</a></li>
                                        <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>
                                                <li><a href="portfolio-4-column.html">Portfolio 4 Columns</a></li>
                                                <li><a href="portfolio-no-gap.html">Portfolio No Gap</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="portfolio-details-1.html">Portfolio Details</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-details-1.html">Single Layout 1</a></li>
                                                <li><a href="portfolio-details-2.html">Single Layout 2</a></li>
                                                <li><a href="portfolio-details-3.html">Single Layout 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="blog.html">Qalereya</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog Listing</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="post.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Əlaqə</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    </div>
                    </header>
