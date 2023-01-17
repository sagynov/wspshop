<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <link rel="shortcut icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.png">
        <?php wp_head(); ?>
    </head>
    <body class="sticky-header newsletter-popup-modal">
    
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>
    <header class="header axil-header <?php echo is_front_page() ? 'header-style-1' : 'header-style-5' ?>">
        <?php if (is_front_page()): ?>
        <div class="header-top-campaign">
            <div class="container position-relative">
                <div class="campaign-content">
                    <p>Open Doors To A World Of Fashion <a href="#">Discover More</a></p>
                </div>
            </div>
            <button class="remove-campaign"><i class="fal fa-times"></i></button>
        </div>
        <?php endif; ?>
        <div class="axil-header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="header-top-link header-top-dropdown">
                            <ul style="justify-content: flex-start;" class="quick-link">
                                <li><a href="#">Доставка и оплата</a></li>
                                <li><a href="sign-up.html">Скидки и акции</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="header-top-link">
                            <ul class="quick-link">
                                <li><a href="#">Help</a></li>
                                <li><a href="sign-up.html">Join Us</a></li>
                                <li><a href="sign-in.html">Sign In</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mainmenu Area  -->
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-brand">
                        <a href="/" class="logo logo-dark">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                        <a href="/" class="logo logo-light">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/logo/logo-light.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav">
                            <button class="mobile-close-btn mobile-nav-toggler"><i class="fas fa-times"></i></button>
                            <div class="mobile-nav-brand">
                                <a href="/" class="logo">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/logo/logo.png" alt="Site Logo">
                                </a>
                            </div>
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location'=>'my-header-menu',
                                    'container' => false,
                                    'menu_class' => 'mainmenu',
                                    ) 
                                );
                            ?>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="action-list">
                            <li class="axil-search">
                                <a href="javascript:void(0)" class="header-search-icon" title="Search">
                                    <i class="flaticon-magnifying-glass"></i>
                                </a>
                            </li>
                            <li class="shopping-cart">
                                <a href="#" class="cart-dropdown-btn">
                                    <span id="cart-count" class="cart-count">0</span>
                                    <i class="flaticon-shopping-cart"></i>
                                </a>
                            </li>
                            <li class="axil-mobile-toggle">
                                <button class="menu-btn mobile-nav-toggler">
                                    <i class="flaticon-menu-2"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mainmenu Area -->
    </header>
<main class="main-wrapper">