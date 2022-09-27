
   <?php if ( true == get_theme_mod( 'switcher_achivement', true ) ) : ?>
    <!--? Brand Area Start -->
    <section class="brand-area pb-bottom section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-30">
                        <h2><?php echo esc_html(get_theme_mod('achivement_title'));?></h2>
                        <p><?php echo esc_html(get_theme_mod('achivement_subtitle'));?></p>
                        <a href="<?php echo esc_url(get_theme_mod('achivement_btn_link'));?>" class="btn"><?php echo esc_html(get_theme_mod('achivement_btn'));?></a>
                    </div>
                </div>
                <?php 
                    $prizes = get_theme_mod( 'featured_boxes_repeater');
                    foreach($prizes as $prize):
                ?>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-brand text-center mb-30">
                        <img src="<?php echo wp_get_attachment_url( $prize['featured_boxe_img'] ); ?>" alt="">
                        <p><?php echo esc_html( $prize['featured_boxe_title'] );?></p>
                        <p><?php echo esc_html( $prize['featured_boxe_link'] );?></p>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="brand-shape d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/gallery/brand_shape.png" alt="">
        </div>
    </section>
    <!-- Brand Area End -->  
    <?php endif;?>