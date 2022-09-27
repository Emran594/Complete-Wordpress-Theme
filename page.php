<?php get_header( );?>
<?php the_post(  );?>

<main>
        <!--? Hero Start -->
        <?php get_template_part("common/breadcrump");?>
        <section class="home-blog-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6">
                    <?php the_post_thumbnail( "large" );?>
                    <?php the_content( );?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer( );?>

