<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bootstrap to Wordpress template - 2022</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font/flaticon.css">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"> -->

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

            <!-- Title banner section -->
            <section class="title-banner">
                <div class="container">
                    <div class="row">

                        <!-- 10 column section with offset 1 column from left, which will center it -->
                        <div class="col-md-10 offset-md-1 col-sm-12 overflow-hidden text-center">
                            <p class="tag-line sub-title">Bootstrap template to Wordpress theme</p>
                            <h1 class="page-title">Blog</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Subscribe bar section -->
            <section class="subscribe-bar">
                <div class="container">
                    <div class="row">

                        <!-- always be 6 columns each regardless of screen size -->
                        <div class="col-sm-6">
                            <p><strong>Enter your email address to subscribe to our newsletter</strong></p>
                        </div>
                        <div class="col-sm-6">
                            <form action="index.html" class="" method="post">
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="text">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" name="button" class="btn btn-invert">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Content section -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- 8 columns centered -->
                        <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">

                            <!-- Article card -->
                            <article class="post my-4">
                                <!-- meta info like date, time, etc -->
                                <div class="meta">
                                    <span>January 1, 2022</span>
                                </div>
                                <!-- Blog post title -->
                                <h2><a href="#">Blog post title</a></h2>
                                <p class="excerpt">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, fuga fugiat. Voluptates quasi possimus molestias consequuntur quaerat cum consequatur sit quod saepe obcaecati dolor voluptas fuga sapiente, amet, similique nesciunt?
                                </p>
                                <a href="#" class="read-more">Read the full post -></a>
                            </article>

                            <!-- Article card -->
                            <article class="post my-4">
                                <!-- meta info like date, time, etc -->
                                <div class="meta">
                                    <span>January 1, 2022</span>
                                </div>
                                <!-- Blog post title -->
                                <h2><a href="#">Blog post title</a></h2>
                                <p class="excerpt">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, fuga fugiat. Voluptates quasi possimus molestias consequuntur quaerat cum consequatur sit quod saepe obcaecati dolor voluptas fuga sapiente, amet, similique nesciunt?
                                </p>
                                <a href="#" class="read-more">Read the full post -></a>
                            </article>

                            <!-- Article card -->
                            <article class="post my-4">
                                <!-- meta info like date, time, etc -->
                                <div class="meta">
                                    <span>January 1, 2022</span>
                                </div>
                                <!-- Blog post title -->
                                <h2><a href="#">Blog post title</a></h2>
                                <p class="excerpt">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, fuga fugiat. Voluptates quasi possimus molestias consequuntur quaerat cum consequatur sit quod saepe obcaecati dolor voluptas fuga sapiente, amet, similique nesciunt?
                                </p>
                                <a href="#" class="read-more">Read the full post -></a>
                            </article>

                            <!-- Article card -->
                            <article class="post my-4">
                                <!-- meta info like date, time, etc -->
                                <div class="meta">
                                    <span>January 1, 2022</span>
                                </div>
                                <!-- Blog post title -->
                                <h2><a href="#">Blog post title</a></h2>
                                <p class="excerpt">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, fuga fugiat. Voluptates quasi possimus molestias consequuntur quaerat cum consequatur sit quod saepe obcaecati dolor voluptas fuga sapiente, amet, similique nesciunt?
                                </p>
                                <a href="#" class="read-more">Read the full post -></a>
                            </article>
                        </div> 
                    </div>
                </div>
            </div>

                <!-- Footer tag -->
                <footer>
                    <div class="footer-calltoaction text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 offset-md-2 overflow-hidden">
                                    <p class="sub-title">
                                        Join now
                                    </p>
                                    <h2>Bootstrap to wordpress</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sint exercitationem quam doloremque unde fuga labore dolorum maxime enim ratione voluptatum assumenda possimus rem aperiam reprehenderit, eum ipsa animi eos.</p>
                                    <a href="" class="btn btn-primary">Join Now -></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="copyright text-center">&copy; Copyright myStudio Inc.</div>
                </footer>


         
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <?php wp_footer(); ?>

    </body>
</html>