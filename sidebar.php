
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <?php get_search_form( );?>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;"><?php echo  __("Category")?></h4>

                            <ul class="list cat-list">
                                <?php
                                $args=array(
                                'orderby' => 'name',
                                'order' => 'ASC'
                                )
                                ?>
                                <?php 
                                    $cat = get_the_category(); 
                                    $cat = $cat[0];
                                    
                                ?>
                                <?php 
                                foreach (get_categories( $args ) as $cat) :
                                ?>
                                
                                <li>
                                    <a href="<?php echo get_category_link($cat->term_id); ?> class="d-flex"><p><?php echo $cat->cat_name; ?> (<?php echo $cat->category_count; ?>)</p> </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title" style="color: #2d2d2d;"><?php echo __("Recent Post","photo")?></h3>
                            <?php query_posts( array(
                                'posts_per_page' => 4,
                                'orderby' => 'title'
                                )); ?>

                                <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                                <div class="media post_item">
                                <?php the_post_thumbnail('thumbnail');?>
                                <div class="media-body">
                                        <a href="<?php the_permalink(  );?>">
                                            <h3 style="color: #2d2d2d;"><?php the_title( );?></h3>
                                        </a>
                                        <p><?php echo get_the_date( );?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>

                                <?php else : ?>

                                <p><?php __('No News'); ?></p>

                                <?php endif; ?>
               
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;"><?php echo __("Tag Clouds","photo");?></h4>
                            <ul class="list">
                                <?php 
                                echo get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' );
                                ?>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget instagram_feeds">
                            <h4 class="widget_title" style="color: #2d2d2d;"><?php echo __("Instragram")?></h4>
                            <ul class="instagram_row flex-wrap">
                            <?php query_posts( array(
                                'posts_per_page' => 6,
                                'orderby' => 'title'
                                )); ?>

                                <?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
                                <li>
                                    <a href="<?php the_permalink( );?>">
                                    <?php the_post_thumbnail('insta-size');?>
                                    </a>
                                </li>
                                <?php endwhile; ?>

                                <?php else : ?>

                                <p><?php __('No News'); ?></p>

                                <?php endif; ?>
                            </ul>
                        </aside>
                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
                            <form action="#">
                                <?php echo do_shortcode( '[contact-form-7 id="811" title="photo sidebar"]');?>
                            </form>
                        </aside>
                    </div>
                </div>



                