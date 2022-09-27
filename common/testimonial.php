
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding ">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                    <?php 
                        $arg2 = array( 'post_type' => 'tetimonial','posts_per_page' => 1 );
                        $loo2 = new WP_Query( $arg2 );
                        while ( $loo2->have_posts() ) : $loo2->the_post();
                           ?>
                            
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/testimonial.png" alt="">
                                   <?php the_content( );?>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <?php the_post_thumbnail( );?>
                                    </div>
                                    <div class="founder-text">
                                        <span><?php the_title( );?></span>
                                        <p><?php echo get_post_meta( get_the_ID(),"designation", true );?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->