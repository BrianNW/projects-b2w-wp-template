<?php

/**
 * 
 * Title banner and subscribe bar
 * 
 * @package b2w2022
 * @since 1.0
 * 
 * 
 */
?>


<?php

    $blog_info = get_bloginfo('name');
    $description = get_bloginfo('description', 'display');

?>

            <!-- Title banner section -->
            <section class="title-banner">
                <div class="container">
                    <div class="row">

                        <!-- 10 column section with offset 1 column from left, which will center it -->
                        <div class="col-md-10 offset-md-1 col-sm-12 overflow-hidden text-center">

                            <!-- Changed to dynamic titles -->
                            <!-- <p class="tag-line sub-title">Bootstrap template to Wordpress theme</p>
                            <h1 class="page-title">Blog</h1> -->

                            <!-- new dynamics -->

                            <?php
                                if( is_page() ) {

                                    the_title('<h1 class="page-title">', '</h1>');

                                } elseif ( is_single() ) {

                             ?>
                                <p class="tag-line sub-title"> <?php echo get_the_date( 'M d, Y'); 
                                ?>  </p>

                                <?php

                                } elseif ( !is_front_page() && is_home() ) {

                                    // checks for the ID of the page assigned to display the Blog and Posts Index
                                    $b2w_blog_title = get_the_title( get_option( 'page_for_posts', true));

                                    ?>
                                        <h1 class="page-title"><?php echo esc_html( $b2w_blog_title ); ?> </h1>

                                    <?php

                                } elseif ( is_home() ) {

                                    if ($description) {
                                        ?>
                                        <p class="tag-line sub-title"><?php echo esc_html( $description ); 
                                        ?> </p>

                                        <?php
                                    }
                                    ?>
                                    <h1><?php esc_html_e( 'Bootstrap to Wordpress Blog', 'bootstrap2wordpress'); ?> </h1>
                                    
                                    <?php

                                } elseif ( is_archive() ) {
                                    the_archive_title(' <h1 class="page-title">', '</h1>');
                                
                                } elseif ( is_404() ) {
                                    ?>

                                    <h1><?php esc_html_e( 'Couldn\'t Be Found', 'bootstrap2wordpress'); ?></h1>

                                    <?php

                                } elseif (is_search() ) {

                                    $search_title =  sprintf( '%s %s', __('Search results for: ', 'bootstrap2wordpress'), get_search_query() ); 
                                
                            ?>
                            <h1 class="page-title"><?php echo esc_html( $search_title ); ?> </h1>

                            <?php
                            }

                            ?>

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