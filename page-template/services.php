<?php
/**
* Template Name: Services
*
*/
?>
<?php get_header( );?>
    <main>
        <!--? Hero Start -->
        <?php get_template_part("common/breadcrump");?>
        <section class="home-blog-area section-padding30">
        <div class="container">
            <div class="row">
                <?php 
                $args1 = array( 'post_type' => 'service', 'posts_per_page' => 10 );
                $loop1 = new WP_Query( $args1 );
                while ( $loop1->have_posts() ) : $loop1->the_post();
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <?php the_post_thumbnail("team");?>
                        </div>
                        <div class="team-caption">
                            <h3><a href="services.html"><?php the_title( );?></a></h3>
                           <?php the_content( );?>
                        </div>
                    </div>
                </div>
                <?php 
                endwhile;
                ?>
            </div>
        </div>
    </section>
       

<?php get_footer( );?>




