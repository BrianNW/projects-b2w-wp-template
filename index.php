<?php

get_header();

?>

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

<?php wp_footer(); ?>