<?php
/**
* Template Name: Contact Page
*
*/
?>
<?php get_header( );?>
<?php the_post(  );?>
<main>
<?php get_template_part("common/breadcrump");?>
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
                <?php  
                    if(is_active_sidebar( 'contact-1' )){
                        dynamic_sidebar( 'contact-1' );
                    }
                ?>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                    <?php  
                    if(is_active_sidebar( 'contact-form' )){
                        dynamic_sidebar( 'contact-form' );
                    }
                ?>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                <?php 
                    $contact_data = get_theme_mod( 'contact_boxes_repeater');
                    foreach($contact_data as $contact):
                ?>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-<?php echo $contact['contact_icon'];?>"></i></span>
                            <div class="media-body">
                                <h3><?php echo $contact['contact_title'];?></h3>
                                <p><?php echo $contact['contact_subtitle'];?></p>
                            </div>
                        </div>
                <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

    </main>

<?php get_footer( );?>


