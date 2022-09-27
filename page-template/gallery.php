<?php
/**
* Template Name: Gallery
*
*/
?>
<?php get_header( );?>
    <main>
        <!--? Hero Start -->
        <?php get_template_part("common/breadcrump");?>
        <section class="gallery-area about2 section-padding30 fix">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                        <?php 
                        $arg3 = array( 'post_type' => 'gallery', 'posts_per_page' => 20 );
                        $loo3 = new WP_Query( $arg3 );
                        while ( $loo3->have_posts() ) : $loo3->the_post();
                           ?>
                           
                           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
                            <?php echo '<div class="gallery-img style" style="background: url('. $url.')""></div>' ?>
                            <div class="g-caption">
                                <h4><?php the_title( );?></h4>
                                <?php the_content( );?>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                        <?php endwhile;?>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="gallery-btn text-center pt-100">
                                        <a href="gallery.html" class="btn">Load more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </section>
       

<?php get_footer( );?>


