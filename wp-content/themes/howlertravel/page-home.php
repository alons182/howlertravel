<?php
/*
    Template Name: Page Home
     */


get_header(); ?>
<section class="main">
		<div class="inner">
			<div id="services" class="services">
				<h1 class="services-title">Featured Services</h1>
				<div class="services-container">
					<div class="services-item">
						<figure>
							<i class="icon-car"></i>
						</figure>
						<div class="services-info">
							<a href="<?php echo esc_url( home_url( '/transportation' ) ); ?>" ><h2>Transportation</h2></a>
							<p>
								Private Transportation from (LIR) Liberia Airport, Liberia, CR to...
							</p>
						</div>
						
					</div>
					<div class="services-item">
						<figure>
							<i class="fa fa-star"></i>
						</figure>
						<div class="services-info">
							<a href="<?php echo esc_url( home_url( '/one-day-tours' ) ); ?>" ><h2>One Day Tours</h2></a>
							<p>
								Want a full day tour experience, you can choose adventure, natural walks, cultural tours and more !! 
							</p>
						</div>
						
					</div>
					<div class="services-item">
						<figure>
							<i class="fa fa-plane"></i>
						</figure>
						<div class="services-info">
							<a href="http://www.flightstats.com/" target="_blank"><h2>Flight Stats</h2></a>
							<p>
								 Check  Flight Status Information from any airline, just click here
							</p>
						</div>
						
					</div>
					
				</div>
				
			</div>
			<div class="hotels">
				<h1 class="hotels-title">Tours near from your Hotel</h1>
				<div class="hotels-container">
					
					 <?php 
                   
                    if ( get_query_var('paged') ) {
                              $paged = get_query_var('paged');
                          } else if ( get_query_var('page') ) {
                              $paged = get_query_var('page');
                          } else {
                              $paged = 1;
                          } 
            
                          $args = array(
                            'post_type' => 'hotel',
                            'paged' => $paged,
                            'posts_per_page' => 100,
                            'orderby' => 'menu_order',
                            'order' => 'asc'
                            
                          );
                          $temp = $wp_query; 
                          $wp_query = null;
                          $wp_query = new WP_Query( $args );

                          //if( $wp_query->have_posts() ) : while( $wp_query->have_posts() ) : $wp_query->the_post(); 

                          if( $wp_query->have_posts() ) :
                          		$i=0; // counter
                           while( $wp_query->have_posts() ) : $wp_query->the_post(); 
                        
									if($i%10==0) { // if counter is multiple of 3, put an opening div ?>
									<!-- <?php echo ($i+1).'-'; echo ($i+10); ?> -->
									<ul class="hotels-ul">
									<?php } ?>
										<li><a href="<?php the_permalink(); ?>" class="hotels-link"><?php the_title(); ?></a></li>
									<?php $i++;
									if($i%10==0) { // if counter is multiple of 3, put an closing div ?>
									</ul>
									<?php } ?>

								<?php endwhile; ?>
									<?php
									if($i%10!=0) { // put closing div here if loop is not exactly a multiple of 3 ?>
									</ul>
									<?php } ?>

							<?php endif; ?>
							<!-- -->

                           
                           
            
                           
                                        
                        <?php 
                            $wp_query = null; 
                            $wp_query = $temp;  // Reset
                          ?>
                          </ul>
					
				
				</div>
			</div>
</div>
</section>
<section id="testimonials" class="testimonials">
	<div class="inner">
		<div class="testimonials-item">
			<i class="fa fa-quote-left"></i>
			<p>Magni laborum asperiores eaque sapiente ut dolorem molestiae necessitatibus ullam laudantium veritatis enim fuga dignissimos maiores Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis quibusdam iure facere dolores necessitatibus, reprehenderit, sunt commodi eligendi quas aliquid libero possimus explicabo, nihil recusandae dicta praesentium nisi, quod facilis! </p>
			<i class="fa fa-quote-right"></i>
			<h3>Lorem ipsum dolor sit amet</h3>
			
		</div>
	</div>
</section>
	
<?php

get_footer();
