<?php
/**
* Template Name: About Page
*
*/
?>
<?php get_header( );?>
    <main>
        <?php get_template_part("common/breadcrump");?>
        <!-- Hero End -->
        
        <?php get_template_part("common/about-part");?>
        <!--? About Area start -->
        <section class="about-area about2 section-padding30">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about2-img">
                            <?php the_post_thumbnail( );?>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="about2-caption mb-70">
                            <?php
                             if(is_active_sidebar( "sidebar-4" )){
                                 dynamic_sidebar( "sidebar-4" );
                             }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--? Brand Shape  -->
            <div class="about-shape2 d-none d-xl-block">
                <img src="assets/img/gallery/about_shape2.png" alt="">
            </div>
        </section>
        <!-- About Area End -->
        <?php get_template_part( "common/testimonial");?>
        <!-- Testimonial End -->
        <!--? Brand Area Start -->
        <?php get_template_part( "common/take");?>

<?php get_footer( );?>


