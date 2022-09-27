
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="<?php home_url( );?>"><?php the_custom_logo(  );?></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">
                                    <?php 
                                        if(is_active_sidebar( 'footer-1' )){
                                            dynamic_sidebar( 'footer-1' );
                                        }
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Navigation</h4>
                                <?php wp_nav_menu(array(
                                        'theme_location'=>'footer_1',
                                    ));?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Useful Links</h4>
                                <?php wp_nav_menu(array(
                                        'theme_location'=>'footer_2',
                                    ));?>
                            </div>
                        </div>
                    </div>
                    <!-- Instagram -->
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                                    <?php 
                                        if(is_active_sidebar( 'footer-2' )){
                                            dynamic_sidebar( 'footer-2' );
                                        }
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                    <?php 
                        if(is_active_sidebar( 'footer-3' )){
                            dynamic_sidebar( 'footer-3' );
                        }
                    ?>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <?php 
                        if(is_active_sidebar( 'footer-4' )){
                            dynamic_sidebar( 'footer-4' );
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <?php wp_footer(  );?>
    
</body>
</html>