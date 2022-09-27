<!--? About Area start -->
<?php if ( true == get_theme_mod( 'switcher_about', true ) ) : ?>
<section class="about-area about1 section-padding30">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-caption2 mb-50">
                        <h3><?php echo esc_html( get_theme_mod('about_title') );?></h3>
                        <div class="send-cv">
                            <a href="<?php echo esc_url( get_theme_mod('about_mail_link'));?>"><?php echo esc_html( get_theme_mod('about_mail') );?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about-caption mb-50">
                        <h3><?php echo esc_html( get_theme_mod('about_content') );?></h3>
                        <p class="pera1"><span><?php echo esc_html( get_theme_mod('about_author') );?></span> <?php echo esc_html( get_theme_mod('about_author_designation') );?></p>
                        <div class="experience">
                            <div class="year">
                                <span><?php echo esc_html( get_theme_mod('about_experience') );?></span>
                            </div>
                            <div class="year-details"><?php _e( '<p>YEARS OF<br> DIGITAL EXPERIENCE</p>',"photo" );?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="about-shape d-none d-xl-block">
            <img src="<?php echo esc_url( get_theme_mod( 'about_shape' ) );?>" alt="">
        </div>
</section>
<?php endif;?>

