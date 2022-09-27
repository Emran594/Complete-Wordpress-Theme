   <!--? Gallery Area Start -->
   <section class="gallery-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
            <?php 
                        $arg3 = array( 'post_type' => 'gallery','posts_per_page' => 6 );
                        $loo3 = new WP_Query( $arg3 );
                        while ( $loo3->have_posts() ) : $loo3->the_post();
                           ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                            <?php echo '<div class="gallery-img" style="background: url('. $url.')""></div>' ?>
                            <div class="g-caption">
                                <h4><?php the_title( );?></h4>
                                <?php the_content( );?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        endwhile;
                ?>
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->