<?php
/*
    Template Name: Page One Day Tours
     */


get_header(); ?>
<section class="main">
		<div class="inner">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="tours">
 		<?php 
                   
                   if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
           				
                          $args = array(
                            'post_type' => 'tour',
                            'paged' => $paged,
                            'posts_per_page' => 20,
                            'orderby' => 'menu_order',
                            'order' => 'asc',
                            'tax_query' => array(
                                array(
                                  'taxonomy' => 'hotel',
                                  'field' => 'slug',
                                  'terms' => 'one-day-tours'
                                )
                              )
                            
                          );
                          $temp = $wp_query; 
                          $wp_query = null;
                          $wp_query = new WP_Query( $args );

                          if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post();
                              
                            

                              ?>
                          
                                    <div class="tours-item" data-wow-delay=".2s">
                                        <span class="tours-item-img">
                                            <?php if ( has_post_thumbnail() ) :

                                            $id = get_post_thumbnail_id($post->ID);
                                            $thumb_url = wp_get_attachment_image_src($id,'tours-thumb', true);
                                            ?>
                                            
                                             <img src="<?php echo $thumb_url[0] ?>" alt="img">           
                                        <?php endif; ?>
                                        </span>
                                        <h3 class="tours-item-title"><?php the_title(); ?></h3>
                                       
                                        <a href="<?php the_permalink(); ?>" class="tours-item-link"></a>
                                    </div>
                           
            
                                  <?php endwhile;  ?>
                            <!-- post navigation -->
                          
                        <?php endif; ?>
                                    
                       
            </div>
            <div class="txt-center">
                <?php the_posts_pagination( array( 'mid_size' => 2 ) ); ?>
              
              </div>

             <?php 
                            $wp_query = null; 
                            $wp_query = $temp; // Reset

                          ?>



		</div>

</section>

<?php

get_footer();
