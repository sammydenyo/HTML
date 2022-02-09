<?php
/*
 Template Name: website
 Template Post Type: post, page
*/
?>
<?php get_header(); ?>

<div class="page_loader"></div>
<!-- Top header start -->
<header class="top-header bg-active" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i><?php _e( 'Need Support? 1-8X0-666-8X88', 'cars' ); ?></a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i><?php _e( 'info@themevessel.com', 'cars' ); ?></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> <?php _e( 'Login', 'cars' ); ?></a>
                    </li>
                    <li>
                        <a href="signup.html" class="sign-in"><i class="fa fa-user"></i> <?php _e( 'Register', 'cars' ); ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->
<!-- Main header start -->
<header class="main-header sticky-header sh-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo-2" href="index.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/black-logo.png" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Home', 'cars' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="index.html"><?php _e( 'Home 1', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-2.html"><?php _e( 'Home 2', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html"><?php _e( 'Home 3', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html"><?php _e( 'Home 4', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html"><?php _e( 'Home 5', 'cars' ); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Car Listing', 'cars' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'List Layout', 'cars' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="car-list-rightside.html"><?php _e( 'List Right Sidebar', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-list-leftsidebar.html"><?php _e( 'List Left Sidebar', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-list-fullWidth.html"><?php _e( 'List FullWidth', 'cars' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Grid Layout', 'cars' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="car-grid-rightside.html"><?php _e( 'Grid Right Sidebar', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-grid-leftside.html"><?php _e( 'Grid Left Sidebar', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-grid-fullWidth.html"><?php _e( 'Grid FullWidth', 'cars' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Car Details', 'cars' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="car-details.html"><?php _e( 'Car Details 1', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-details-2.html"><?php _e( 'Car Details 2', 'cars' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="car-details-3.html"><?php _e( 'Car Details 3', 'cars' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php _e( 'Pages', 'cars' ); ?></a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'cars' ); ?></h6>
                                            <a class="dropdown-item" href="about.html"><?php _e( 'About Us', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="agent.html"><?php _e( 'Agent', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="agent-detail.html"><?php _e( 'Agent Details', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="services.html"><?php _e( 'Services', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="services-2.html"><?php _e( 'Services 2', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="car-comparison.html"><?php _e( 'Car Compare', 'cars' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'cars' ); ?></h6>
                                            <a class="dropdown-item" href="pricing-tables.html"><?php _e( 'Pricing Tables', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="gallery.html"><?php _e( 'Gallery', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="typography.html"><?php _e( 'Typography', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="elements.html"><?php _e( 'Elements', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="faq.html"><?php _e( 'Faq', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="search-brand.html"><?php _e( 'Car Brands', 'cars' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'cars' ); ?></h6>
                                            <a class="dropdown-item" href="icon.html"><?php _e( 'Icons', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="coming-soon.html"><?php _e( 'Coming Soon', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="404.html"><?php _e( 'Error Page', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="login.html"><?php _e( 'login', 'cars' ); ?></a>
                                            <a class="dropdown-item" href="signup.html"><?php _e( 'Register', 'cars' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Blog', 'cars' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="blog-post.html"><?php _e( 'Blog Post', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-sidebar.html"><?php _e( 'Blog Sidebar', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="blog-details.html"><?php _e( 'Blog Details', 'cars' ); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Shop', 'cars' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="shop-list.html"><?php _e( 'Shop List', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="shop-cart.html"><?php _e( 'Shop Cart', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="shop-checkout.html"><?php _e( 'Shop Checkout', 'cars' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="shop-details.html"><?php _e( 'Shop Details', 'cars' ); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="contact.html"><?php _e( 'Contact', 'cars' ); ?></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#full-page-search" class="nav-link h-icon"> <i class="fa fa-search"></i> </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
<!-- Banner start -->
<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner banner-slider-inner text-center">
            <div class="carousel-item banner-max-height active item-bg">
                <img class="d-block w-100 h-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-1_002.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2">
                    <h2><?php _e( 'Find your Dream Car', 'cars' ); ?></h2>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
                    <a href="#" class="btn btn-lg btn-round btn-theme"><?php _e( 'Get Started Now', 'cars' ); ?></a>
                    <a href="#" class="btn btn-round btn-white-lg-outline"><?php _e( 'Learn More', 'cars' ); ?></a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-2_002.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-l">
                    <h2><?php _e( 'Welcome to Auto Car', 'cars' ); ?></h2>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
                    <a href="#" class="btn btn-lg btn-round btn-theme"><?php _e( 'Get Started Now', 'cars' ); ?></a>
                    <a href="#" class="btn btn-round btn-white-lg-outline"><?php _e( 'Learn More', 'cars' ); ?></a>
                </div>
            </div>
            <div class="carousel-item banner-max-height item-bg">
                <img class="d-block w-100 h-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-3.jpg" alt="banner">
                <div class="carousel-content container banner-info-2 bi-2 text-r">
                    <h2><?php _e( 'Best place for sell car!', 'cars' ); ?></h2>
                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
                    <a href="#" class="btn btn-lg btn-round btn-theme"><?php _e( 'Get Started Now', 'cars' ); ?></a>
                    <a href="#" class="btn btn-round btn-white-lg-outline"><?php _e( 'Learn More', 'cars' ); ?></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev none-580" href="#bannerCarousole" role="button" data-slide="prev"> <span class="slider-mover-left" aria-hidden="true"> <i class="fa fa-angle-left"></i> </span> </a>
        <a class="carousel-control-next none-580" href="#bannerCarousole" role="button" data-slide="next"> <span class="slider-mover-right" aria-hidden="true"> <i class="fa fa-angle-right"></i> </span> </a>
    </div>
</div>
<!-- Banner end -->
<!-- Search box 2 start -->
<div class="search-box-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inline-search-area">
                    <div class="row row-3">
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <select class="selectpicker search-fields" name="select-brand">
                                <option>
                                    <?php _e( 'Select Brand', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Audi', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'BMW', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Honda', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Nissan', 'cars' ); ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <select class="selectpicker search-fields" name="select-make">
                                <option>
                                    <?php _e( 'Select Make', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'BMW', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Honda', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Lamborghini', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Sports Car', 'cars' ); ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <select class="selectpicker search-fields" name="select-location">
                                <option>
                                    <?php _e( 'Select Location', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'United States', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'United Kingdom', 'cars' ); ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <select class="selectpicker search-fields" name="select-year">
                                <option>
                                    <?php _e( 'Select Year', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( '2016', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( '2017', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( '2018', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( '2019', 'cars' ); ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <select class="selectpicker search-fields" name="select-type">
                                <option>
                                    <?php _e( 'Select Type Of Car', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'New Car', 'cars' ); ?>
                                </option>
                                <option>
                                    <?php _e( 'Used Car', 'cars' ); ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col">
                            <button class="btn white-btn btn-search btn-block">
                                <i class="fa fa-search"></i>
                                <strong><?php _e( 'Find', 'cars' ); ?></strong>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search box 2 end -->
<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><?php _e( 'Featured Car', 'cars' ); ?></h1>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="for">
                                <?php _e( 'For Sale', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$950.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$1050.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-1.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Lamborghini</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Porsche Cayen Last</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Lamborghini', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="tag-2 bg-active">
                                <?php _e( 'Featured', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$805.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$780.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-2.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Porsche Cayen Last</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Ferrari Red Car', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="for">
                                <?php _e( 'For Rent', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$830.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$940.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-3_002.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Lamborghini</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Porsche Cayen Last</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Bmw e46 m3 Diski Serie', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="tag-2 bg-active">
                                <?php _e( 'Featured', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$950.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$1050.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-4.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Lamborghini</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Porsche Cayen Last</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Volkswagen Scirocco 2016', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="for">
                                <?php _e( 'For Sale', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$805.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$780.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-5.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Porsche Cayen Last</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Lamborghini</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Porsche Cayen Last', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car-box-3">
                    <div class="car-thumbnail">
                        <a href="car-details.html" class="car-img"> <div class="tag-2 bg-active">
                                <?php _e( 'Featured', 'cars' ); ?>
                            </div> <div class="price-box">
                                <span class="del"><del><?php _e( '$830.00', 'cars' ); ?></del></span>
                                <br>
                                <span><?php _e( '$940.00', 'cars' ); ?></span>
                            </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-6.jpg" alt="car"> </a>
                        <div class="carbox-overlap-wrapper">
                            <div class="overlap-box">
                                <div class="overlap-btns-area">
                                    <a class="overlap-btn" data-toggle="modal" data-target="#carOverviewModal"> <i class="fa fa-eye-slash"></i> </a>
                                    <a class="overlap-btn wishlist-btn"> <i class="fa fa-heart-o"></i> </a>
                                    <a class="overlap-btn compare-btn"> <i class="fa fa-balance-scale"></i> </a>
                                    <div class="car-magnify-gallery">
                                        <a href="http://placehold.it/750x500" class="overlap-btn" data-sub-html="<h4>Lexus GS F</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <i class="fa fa-expand"></i> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Ferrari Red Car</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Bmw e46 m3 Diski Serie</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Volkswagen Scirocco 2016</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                        <a href="http://placehold.it/750x500" class="hidden" data-sub-html="<h4>Lamborghini</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy....</p>"> <img class="hidden" src="http://placehold.it/80x58" alt="hidden-img"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <h1 class="title"> <a href="car-details.html"><?php _e( 'Lexus GS F', 'cars' ); ?></a> </h1>
                        <ul class="custom-list">
                            <li>
                                <a href="#"><?php _e( 'New Car', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Automatic', 'cars' ); ?></a> /
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Sports', 'cars' ); ?></a>
                            </li>
                        </ul>
                        <ul class="facilities-list clearfix">
                            <li>
                                <i class="flaticon-fuel"></i> 
                                <?php _e( 'Petrol', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-way"></i> 
                                <?php _e( '4,000 km', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-manual-transmission"></i> 
                                <?php _e( 'Manual', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-car"></i> 
                                <?php _e( 'Sport', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-gear"></i> 
                                <?php _e( 'Blue', 'cars' ); ?>
                            </li>
                            <li>
                                <i class="flaticon-calendar-1"></i> 
                                <?php _e( '2019', 'cars' ); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer clearfix">
                        <div class="pull-left ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span><?php _e( '(65 Reviews)', 'cars' ); ?></span>
                        </div>
                        <ul class="pull-right icon">
                            <li>
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-share-square-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured car end -->
<!-- Service section start -->
<div class="service-section content-area-2">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?php _e( 'We Are The Best', 'cars' ); ?></h1>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5><?php _e( 'Highly  Secured', 'cars' ); ?></h5>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.', 'cars' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5><?php _e( 'Trusted Agents', 'cars' ); ?></h5>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.', 'cars' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5><?php _e( 'Get an Offer', 'cars' ); ?></h5>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.', 'cars' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5><?php _e( 'Free Support', 'cars' ); ?></h5>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt.', 'cars' ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a href="services.html" class="btn btn-theme important-btn"><?php _e( 'Read more', 'cars' ); ?></a>
            </div>
        </div>
    </div>
</div>
<!-- Service section end -->
<!-- Latest offers Start -->
<div class="latest-offers categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1><?php _e( 'Latest Offers', 'cars' ); ?></h1>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
        </div>
        <div class="row row-2">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-1-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <div class="new">
                                            <?php _e( 'New', 'cars' ); ?>
                                        </div>
                                        <div class="lo-text clearfix">
                                            <div class="price-box-2">
                                                <sup>$</sup>
                                                <?php _e( '650', 'cars' ); ?>
                                                <span><?php _e( '/month', 'cars' ); ?></span>
                                            </div>
                                            <h3 class="category-title"> <a href="car-details.html"><?php _e( 'Toyota Prius', 'cars' ); ?></a> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-2-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <div class="new">
                                            <?php _e( 'New', 'cars' ); ?>
                                        </div>
                                        <div class="lo-text clearfix">
                                            <div class="price-box-2">
                                                <sup>$</sup>
                                                <?php _e( '740', 'cars' ); ?>
                                                <span><?php _e( '/month', 'cars' ); ?></span>
                                            </div>
                                            <h3 class="category-title"> <a href="car-details.html"><?php _e( 'Lamborghini Huracan', 'cars' ); ?></a> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-pad">
                        <div class="category">
                            <div class="category_bg_box cat-3-bg">
                                <div class="category-overlay">
                                    <div class="category-content">
                                        <div class="new">
                                            <?php _e( 'New', 'cars' ); ?>
                                        </div>
                                        <div class="lo-text clearfix">
                                            <div class="price-box-2">
                                                <sup>$</sup>
                                                <?php _e( '950', 'cars' ); ?>
                                                <span><?php _e( '/month', 'cars' ); ?></span>
                                            </div>
                                            <h3 class="category-title"> <a href="car-details.html"><?php _e( 'Lamborghini', 'cars' ); ?></a> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-pad">
                <div class="category">
                    <div class="category_bg_box category_long_bg cat-4-bg">
                        <div class="category-overlay">
                            <div class="category-overlay">
                                <div class="category-content">
                                    <div class="new">
                                        <?php _e( 'New', 'cars' ); ?>
                                    </div>
                                    <div class="lo-text clearfix">
                                        <div class="price-box-2">
                                            <sup>$</sup>
                                            <?php _e( '480', 'cars' ); ?>
                                            <span><?php _e( '/month', 'cars' ); ?></span>
                                        </div>
                                        <h3 class="category-title"> <a href="car-details.html"><?php _e( 'Red ferrari Car 2018', 'cars' ); ?></a> </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest offers end -->
<!-- Our team start -->
<div class="our-team content-area-3">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><?php _e( 'Our Agent', 'cars' ); ?></h1>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 'cars' ); ?></p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area clearfix">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="team-3">
                        <div class="photo">
                            <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-12.jpg" alt="team-3" class="img-fluid"> </a>
                            <div class="social-list clearfix">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h4><a href="agent-detail.html"><?php _e( 'Brandon Miller', 'cars' ); ?></a></h4>
                            <h5><?php _e( 'Manager', 'cars' ); ?></h5>
                            <h6><?php _e( '+1 204 777 0187', 'cars' ); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="team-3">
                        <div class="photo">
                            <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-9.jpg" alt="team-3" class="img-fluid"> </a>
                            <div class="social-list clearfix">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h4><a href="agent-detail.html"><?php _e( 'Michelle Nelson', 'cars' ); ?></a></h4>
                            <h5><?php _e( 'Support Manager', 'cars' ); ?></h5>
                            <h6><?php _e( '+1 204 777 0187', 'cars' ); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="team-3">
                        <div class="photo">
                            <a href="#"> <img src="http://placehold.it/350x379" alt="team-3" class="img-fluid"> </a>
                            <div class="social-list clearfix">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h4><a href="agent-detail.html"><?php _e( 'Stone Carolyn', 'cars' ); ?></a></h4>
                            <h5><?php _e( 'Creative Director', 'cars' ); ?></h5>
                            <h6><?php _e( '+1 204 777 0187', 'cars' ); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="team-3">
                        <div class="photo">
                            <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-9.jpg" alt="team-3" class="img-fluid"> </a>
                            <div class="social-list clearfix">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h4><a href="agent-detail.html"><?php _e( 'Martin Smith', 'cars' ); ?></a></h4>
                            <h5><?php _e( 'Web Developer', 'cars' ); ?></h5>
                            <h6><?php _e( '+1 204 777 0187', 'cars' ); ?></h6>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="team-3">
                        <div class="photo">
                            <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-11.jpg" alt="team-3" class="img-fluid"> </a>
                            <div class="social-list clearfix">
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="google-bg"><i class="fa fa-google"></i></a>
                            </div>
                        </div>
                        <div class="details">
                            <h4><a href="agent-detail.html"><?php _e( 'Stone Carolyn', 'cars' ); ?></a></h4>
                            <h5><?php _e( 'Creative Director', 'cars' ); ?></h5>
                            <h6><?php _e( '+1 204 777 0187', 'cars' ); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our team end -->
<!-- Testimonial 3 start -->
<div class="testimonial-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h1><?php _e( 'Our Testimonial', 'cars' ); ?></h1>
                </div>
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="testimonial-info">
                                <div class="sz">
                                    <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not', 'cars' ); ?></p>
                                </div>
                                <div class="media mb-4">
                                    <a class="pr-3" href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-1.jpg" alt="testimonial-3" class="img-fluid"> </a>
                                    <div class="media-body align-self-center">
                                        <h5> <a href="#"><?php _e( 'Anne Brady', 'cars' ); ?></a> </h5>
                                        <h6><?php _e( 'Restaurant Owner', 'cars' ); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-info">
                                <div class="sz">
                                    <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not', 'cars' ); ?></p>
                                </div>
                                <div class="media mb-4">
                                    <a class="pr-3" href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-10.jpg" alt="testimonial-3" class="img-fluid"> </a>
                                    <div class="media-body align-self-center">
                                        <h5> <a href="#"><?php _e( 'Antony Moore', 'cars' ); ?></a> </h5>
                                        <h6><?php _e( 'Restaurant Owner', 'cars' ); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial-info">
                                <div class="sz">
                                    <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not', 'cars' ); ?></p>
                                </div>
                                <div class="media mb-4">
                                    <a class="pr-3" href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar-2.jpg" alt="testimonial-3" class="img-fluid"> </a>
                                    <div class="media-body align-self-center">
                                        <h5> <a href="#"><?php _e( 'Emma Connor', 'cars' ); ?></a> </h5>
                                        <h6><?php _e( 'Restaurant Owner', 'cars' ); ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->
<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><?php _e( 'Our Blog', 'cars' ); ?></h1>
            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'cars' ); ?></p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog-1.jpg" alt="blog-3" class="img-fluid">
                            <div class="date-box-2 db-2">
                                <?php _e( '27 Feb', 'cars' ); ?>
                            </div>
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="flaticon-user-1"></i></a><?php _e( 'Admin', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-comment"></i></a><?php _e( '17K', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-calendar"></i></a><?php _e( '73k', 'cars' ); ?></span>
                            </div>
                        </div>
                        <div class="detail">
                            <h3> <a href="blog-details.html"><?php _e( 'Buying a Best Sports Car', 'cars' ); ?></a> </h3>
                            <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'cars' ); ?></p>
                            <a href="blog-details.html" class="b-btn "><?php _e( 'Rea more...!', 'cars' ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog-2.jpg" alt="blog-3" class="img-fluid">
                            <div class="date-box-2 db-2">
                                <?php _e( '14 Aug', 'cars' ); ?>
                            </div>
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="flaticon-user-1"></i></a><?php _e( 'Admin', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-comment"></i></a><?php _e( '17K', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-calendar"></i></a><?php _e( '73k', 'cars' ); ?></span>
                            </div>
                        </div>
                        <div class="detail">
                            <h3> <a href="blog-details.html"><?php _e( 'Selling Your New Cars?', 'cars' ); ?></a> </h3>
                            <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'cars' ); ?></p>
                            <a href="blog-details.html" class="b-btn "><?php _e( 'Rea more...!', 'cars' ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog-3.jpg" alt="blog-3" class="img-fluid">
                            <div class="date-box-2 db-2">
                                <?php _e( '09 Sep', 'cars' ); ?>
                            </div>
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="flaticon-user-1"></i></a><?php _e( 'Admin', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-comment"></i></a><?php _e( '17K', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-calendar"></i></a><?php _e( '73k', 'cars' ); ?></span>
                            </div>
                        </div>
                        <div class="detail">
                            <h3> <a href="blog-details.html"><?php _e( 'Find Your Dream Car', 'cars' ); ?></a> </h3>
                            <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'cars' ); ?></p>
                            <a href="blog-details.html" class="b-btn "><?php _e( 'Rea more...!', 'cars' ); ?></a>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/blog-3.jpg" alt="blog-3" class="img-fluid">
                            <div class="date-box-2 db-2">
                                <?php _e( '27 Nov', 'cars' ); ?>
                            </div>
                            <div class="post-meta clearfix">
                                <span><a href="#"><i class="flaticon-user-1"></i></a><?php _e( 'Admin', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-comment"></i></a><?php _e( '17K', 'cars' ); ?></span>
                                <span><a href="#"><i class="flaticon-calendar"></i></a><?php _e( '73k', 'cars' ); ?></span>
                            </div>
                        </div>
                        <div class="detail">
                            <h3> <a href="blog-details.html"><?php _e( 'Find Your Dream Car', 'cars' ); ?></a> </h3>
                            <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s', 'cars' ); ?></p>
                            <a href="blog-details.html" class="b-btn "><?php _e( 'Rea more...!', 'cars' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->
<!-- Partners strat -->
<div class="partners bg-grea-3">
    <div class="container">
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-1.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-2.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-3.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-4.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-1.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-2.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-3.png" alt="brand" class="img-fluid">
                </div>
                <div class="slick-slide-item">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brand-4.png" alt="brand" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->
<!-- Footer start -->
<footer class="footer overview-bgi">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/logo.png" alt="logo" class="f-logo">
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="text">
                        <P><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat.', 'cars' ); ?></P>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4> <?php _e( 'Contact Info', 'cars' ); ?> </h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>
                            <?php _e( '20/F Green Road, Dhanmondi, Dhaka', 'cars' ); ?>
                        </li>
                        <li>
                            <i class="flaticon-mail"></i>
                            <a href="mailto:sales@hotelempire.com"><?php _e( 'info@themevessel.com', 'cars' ); ?></a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i>
                            <a href="tel:+55-417-634-7071"><?php _e( '+0477 85X6 552', 'cars' ); ?></a>
                        </li>
                        <li>
                            <i class="flaticon-fax"></i>
                            <?php _e( '+0477 85X6 552', 'cars' ); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4> <?php _e( 'Useful Links', 'cars' ); ?> </h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <ul class="links">
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'Home', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="about.html"><i class="fa fa-angle-right"></i><?php _e( 'About Us', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="services.html"><i class="fa fa-angle-right"></i><?php _e( 'Services', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="car-list-rightside.html"><i class="fa fa-angle-right"></i><?php _e( 'Car Listing', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i class="fa fa-angle-right"></i><?php _e( 'Blog', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="contact.html"><i class="fa fa-angle-right"></i><?php _e( 'Contact Us', 'cars' ); ?></a>
                        </li>
                        <li>
                            <a href="elements.html"><i class="fa fa-angle-right"></i><?php _e( 'Elements', 'cars' ); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4><?php _e( 'Subscribe', 'cars' ); ?></h4>
                    <div class="s-border"></div>
                    <div class="m-border"></div>
                    <div class="Subscribe-box">
                        <p><?php _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'cars' ); ?></p>
                        <form class="form-inline" action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" method="GET">
                            <input type="text" class="form-control mb-sm-0" id="inlineFormInputName3" placeholder="Email Address">
                            <button type="submit" class="btn">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p class="copy"><?php _e( '© 2019', 'cars' ); ?> <a href="#"><?php _e( 'Theme Vessel.', 'cars' ); ?></a> <?php _e( 'All Rights Reserved.', 'cars' ); ?></p>
                </div>
                <div class="col-lg-6">
                    <div class="social-list-2">
                        <ul>
                            <li>
                                <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">
            <?php _e( 'Search', 'cars' ); ?>
        </button>
    </form>
</div>
<!-- Car Overview Modal -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="carOverviewModalLabel">
                        <h4><?php _e( 'Find Your Dream Car', 'cars' ); ?></h4>
                        <h5><i class="flaticon-pin"></i> <?php _e( '123 Kathal St. Tampa City,', 'cars' ); ?></h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="item active">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/car-11.jpg" alt="best-car" class="img-fluid">
                                <div class="sobuz">
                                    <div class="price-box">
                                        <span class="del"><del><?php _e( '$950.00', 'cars' ); ?></del></span>
                                        <br>
                                        <span class="del-2"><?php _e( '$1050.00', 'cars' ); ?></span>
                                    </div>
                                    <div class="ratings-2">
                                        <span class="ratings-box"><?php _e( '4.5/5', 'cars' ); ?></span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <?php _e( '( 7 Reviews )', 'cars' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3><?php _e( 'Features', 'cars' ); ?></h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>
                                                <?php _e( 'Cruise Control', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Airbags', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Air Conditioning', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Alarm System', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Audio Interface', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'CDR Audio', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'Seat Heating', 'cars' ); ?>
                                            </li>
                                            <li>
                                                <?php _e( 'ParkAssist', 'cars' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3><?php _e( 'Overview', 'cars' ); ?></h3>
                                    <ul class="bullets">
                                        <li>
                                            <?php _e( 'Model', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Year', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Condition', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Price', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Audi', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( '2020', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( 'Brand New', 'cars' ); ?>
                                        </li>
                                        <li>
                                            <?php _e( '$178,000', 'cars' ); ?>
                                        </li>
                                    </ul>
                                </section>
                                <div class="description">
                                    <h3><?php _e( 'Description', 'cars' ); ?></h3>
                                    <p><?php _e( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard.', 'cars' ); ?></p>
                                    <a href="car-details.html" class="btn btn-md btn-round btn-theme"><?php _e( 'Show Detail', 'cars' ); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        

<?php get_footer(); ?>