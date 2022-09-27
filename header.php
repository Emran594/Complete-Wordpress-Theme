<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <?php wp_head(  );?>
</head>

<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
            <?php the_custom_logo( );?>
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?php home_url( );?>"><?php the_custom_logo( );?></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <?php wp_nav_menu(array(
                                        'theme_location'=>'primary',
                                        'container_class'=>'main-menu',
                                        'container' => 'div',
                                        'items_wrap' => '<ul id="navigation">%3$s</ul>',
                                    ));?>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                    <a href="contact.html" class="btn header-btn">Contact now</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>