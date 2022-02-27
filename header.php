<?php

/**
 * 
 * The Header file
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package b2w2022
 * @since 1.0
 * 
 * 
 */
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bootstrap to Wordpress template - Jan 2022</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font/flaticon.css">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        
    <?php wp_head(); ?>    
    </head>

    <body class="blog">

        <!-- Navigation section -->
        <div id="top-navigation">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <nav class="main-menu">

                            <!-- display flex for ul items -->
                            <ul class="top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled">
                                <li class="menu-item"> <a href="index.html">Home</a></li>
                                <li class="menu-item menu-item-has-children"> <a href="blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"> <a href="single-post.html">Single post</a></li>
                                        <li class="menu-item"> <a href="widgets.html">Widgets</a></li>
                                        <li class="menu-item menu-item-has-children"> <a href="contact2.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"> <a href="blog.html">Blog</a></li>
                                                <li class="menu-item"> <a href="faq.html">FAQ</a></li>
                                                <li class="menu-item"> <a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                            
                                    </ul>
                                </li>
                                <li class="menu-item"> <a href="widgets.html">Widgets</a></li>
                                <li class="menu-item"> <a href="contact.html">Contact</a></li>
                                <li class="menu-item special-menu"> <a href="join.html">Join</a></li>
                            </ul>
                        </nav>

                        <!-- Mobile menu toggler -->
                        <button type="button" class="navbar-open">
                            <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
                        </button>

                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn">
                        <i class="flaticon flaticon-close"></i>                        
                    </div>
                    <nav class="menu-box">
                        <ul class="navigation clearfix">

                        </ul>
                    </nav>
                </div>

            </div>
        </div>



