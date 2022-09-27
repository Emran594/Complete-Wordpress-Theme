<?php get_header( );?>
<?php the_post(  );?>
   <main>
      <!--? Hero Start -->
      <div class="slider-area ">
         <div class="slider-height2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 text-center">
                              <h2><?php the_title( );?></h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="<?php the_post_thumbnail('large');?>
                     </div>
                     <div class="blog_details">
                        <h2 style="color: #2d2d2d;"><?php the_title( );?>
                        </h2>
                        <ul class="blog-info-link">
                                    <li><a href="<?php the_permalink();?>"><i class="fa fa-user"></i> <?php echo get_the_tag_list( '<a>', ', ', '</a>' );?></a></li>
                                    <li><a href="<?php the_permalink(  );?>"><i class="fa fa-comments"></i> <?php comments_number( );?></a></li>
                                </ul>
                        <?php the_content( );?>
                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="navigation-area">
                        <div class="row">
                           <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php 
                              $photo_prev_post = get_previous_post( );
                                 if($photo_prev_post):
                                    ?>
                                    <div class="thumb">
                                 <a href="<?php echo get_the_permalink( $photo_prev_post ); ?>">
                                <?php echo get_the_post_thumbnail( $photo_prev_post, "thumbnail",);?>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="<?php echo get_the_permalink( $photo_prev_post ); ?>">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p><?php _e("Prev Post");?></p>
                                 <a href="<?php echo get_the_permalink( $photo_prev_post ); ?>">
                                    <h4 style="color: #2d2d2d;"><?php echo get_the_title( $photo_prev_post ); ?></h4>
                                 </a>
                              </div>

                                    <?php 
                                    endif; 
                           ?>
                           </div>
                           <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <?php 
                              $photo_next_post = get_next_post( );
                                 if($photo_next_post):
                                    ?>
                                    <div class="thumb">
                                 <a href="<?php echo get_the_permalink( $photo_next_post ); ?>">
                                <?php echo get_the_post_thumbnail( $photo_next_post, "thumbnail",);?>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="<?php echo get_the_permalink( $photo_next_post ); ?>">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p><?php _e("Next Post");?></p>
                                 <a href="<?php echo get_the_permalink( $photo_next_post ); ?>">
                                    <h4 style="color: #2d2d2d;"><?php echo get_the_title( $photo_next_post ); ?></h4>
                                 </a>
                              </div>

                                    <?php 
                                    endif; 
                           ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src=" <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>" alt="">
                        <div class="media-body">
                           <a href="<?php the_permalink( );?>">
                              <h4><?php echo get_the_author_meta( 'display_name');?></h4>
                           </a>
                           <?php echo get_the_author_meta( 'description');?>
                        </div>
                     </div>
                  </div>
                     <?php comments_template( );?>
               </div>
               <?php get_sidebar( );?>
            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->

   </main>
   <?php get_footer( );?>