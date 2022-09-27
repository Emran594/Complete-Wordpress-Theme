<?php
/**
* Template Name: Home Page
*
*/
?>
<?php get_header( );?>
<main>
        <!--? slider Area Start-->
        <?php if ( true == get_theme_mod( 'banner_settings', true ) ) : ?>
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp" data-delay=".4s"><?php echo get_theme_mod( 'hero_subtitle');?></span>
                                <h1 data-animation="fadeInUp" data-delay=".6s"><?php echo get_theme_mod( 'hero_title');?></h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="<?php echo esc_url(get_theme_mod( 'hero_btn_link') );?>" class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s"><?php echo get_theme_mod( 'hero_btn_title');?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Man Img -->
                <div class="hero-man">
                    <img src="<?php echo esc_url(get_theme_mod( 'banner_image_man') );?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php endif;?>
    <!-- slider Area End-->
    <!--? About Area start -->
    <?php get_template_part( "common/about-part" );?>
    <!-- Services Area End -->
    <!--? Blog Ara Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <div class="row">
                <?php 
                $args1 = array( 'post_type' => 'service', 'posts_per_page' => 3 );
                $loop1 = new WP_Query( $args1 );
                while ( $loop1->have_posts() ) : $loop1->the_post();
                ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <?php the_post_thumbnail("large");?>
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
    <!-- Services Ara End -->
    <?php get_template_part( "common/gallery");?>
    
    <?php get_template_part( "common/take");?>

    <?php get_template_part( "common/testimonial");?>
    <!--? Blog Area Start -->
    <section class="blogs-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-30">
                        <h2>Tourist Blog</h2>
                        <p>Our Recent Photos</p>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php 
                $recent_args = array(
                    "posts_per_page" => 3,
                    "orderby"   => "date",
                    "order" => "DESC"

                );
                $recent_posts = new WP_Query($recent_args);


                if ( $recent_posts -> have_posts() ) :
                    while ( $recent_posts -> have_posts() ) :
                    $recent_posts -> the_post();
                    ?>
                    <div class="col-lg-4 col-md-6">
                    <div class="single-blogs mb-100">
                        <div class="blog-img">
                            <img src="<?php the_post_thumbnail("large")?>">
                        </div>
                        <div class="blog-cap">
                            <span class="color1"><?php echo get_the_date( );?></span>
                            <h4><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h4>
                        </div>
                    </div>
                </div>
                    <?php 
                    endwhile;
                endif;
            ?>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="blog-shape d-none d-xl-block">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/blog_shape.png" alt="">
        </div>
    </section>
    <!-- Blog Area End -->
</main>
<?php get_footer( );?>

