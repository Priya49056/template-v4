<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package template_v4
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #keywords -->
    <meta name="keywords" content=" FinXcart - Market Place">
    <!-- #description -->
    <meta name="description" content="FinXcart - Market Place">
    <!-- #title -->
    <title>FinXcart - Market Place</title>
    <!-- #favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.svg" type="image/x-icon">
    <!-- ==== css dependencies start ==== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/cdn.jsdelivr.net/npm/%40tabler/icons-webfont%402.36.0/tabler-icons.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">

	<?php wp_head(); ?>
</head>

<body>
     <!--  Preloader  -->
    <div class="preloader">
        <span class="loader"></span>
    </div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <button class="scrollToTop d-none d-md-flex d-center rounded" aria-label="scroll Bar Button"><i class="mat-icon fs-four nb4-color ti ti-arrow-up"></i></button>
    <!-- Scroll To Top End -->

    <!-- Start Custom Cursor -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Custom Cursor -->
 
    <!-- header-section start -->
    <header class="header-section a2-bg header-menu w-100">
        <div class="container  d-center ">
           <nav class="navbar py-2 py-xl-4 rounded-3 navbar-expand-lg w-100 justify-content-between ">
                <div class="d-flex align-items-center py-3">
                    <button class="navbar-toggler ms-4" type="button" data-bs-toggle="collapse" aria-label="Navbar Toggler"
                    data-bs-target="#navbar-content" aria-expanded="true" id="nav-icon3">
                        <span></span><span></span><span></span><span></span>
                    </button>
                    <a href="<?php echo home_url(); ?>" class="navbar-brand m-0 p-0 d-flex align-items-center gap-5 gap-xl-5 me-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-1.svg" class="logo small_logo d-sm-none" alt="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-1.svg" class="logo d-none d-sm-flex" alt="logo">
                    </a>
                </div>
                <div class="nav_alt">
                    <div class="right-area position-relative ms-0 d-center gap-1 gap-xl-4 d-lg-none">
                        <div class="single-item">
                            <a href="#" class="rotate_eff flex-nowrap py-1 px-2 px-xl-3 d-center gap-1 fw-bold nw1-color"> Login <i class="ti ti-arrow-right fs-six-up"></i></a>
                        </div>
                        <div class="single-item">
                            <a href="#" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign Up <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbar-content">
                    <ul class="navbar-nav gap-2 gap-lg-3 gap-xxl-8  align-self-center mx-auto mt-4 mt-lg-0">
						<li>
                            <a class="dropdown-item" href="<?php echo home_url(); ?>">Home</a>
                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">About</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/about-us">About Us</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Products</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/forex">Forex</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/indices">Indices</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/commodities">Commodities</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/deposits-withdrawals">Deposits & Withdrawals</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Platforms</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/metatrader-4">Metatrader 4</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/metatrader-5">Metatrader 5</a></li>
                            </ul>
                        </li>
						<li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Accounts</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/standard">Standard</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/premier">Premier</a></li>
                            </ul>
                        </li>
						<li class="dropdown show-dropdown">
                            <button type="button" aria-label="Navbar Dropdown Button"
                                class="dropdown-toggle dropdown-nav">Insights</button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/education">Education</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>/partnership">Partnership</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-area position-relative  ms-0 d-center gap-1 gap-xl-4 d-none d-lg-flex">
                    <div class="single-item">
                        <a href="#" class="cmn-btn fw-bold py-2 px-2 px-sm-3 px-lg-4 align-items-center gap-1"> Sign In <i class="ti ti-arrow-right fw-semibold fs-six-up"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header-section end --><!-- #masthead -->
