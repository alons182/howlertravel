<?php
/*
    Template Name: Page Home
     */


get_header(); ?>
<section class="main">
		<div class="inner">
			<div class="services">
				<h1 class="services-title">Featured Services</h1>
				<div class="services-container">
					<div class="services-item">
						<figure>
							<i class="icon-car"></i>
						</figure>
						<div class="services-info">
							<a href="#" ><h2>lorem ipsum</h2></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto iusto consequuntur.
							</p>
						</div>
						
					</div>
					<div class="services-item">
						<figure>
							<i class="icon-truck"></i>
						</figure>
						<div class="services-info">
							<a href="#" ><h2>lorem ipsum</h2></a>
							<p>
								doloremque dignissimos quidem aliquid optio ipsam. Similique odit rerum ipsum officia, nostrum et inventore
							</p>
						</div>
						
					</div>
					<div class="services-item">
						<figure>
							<i class="icon-clock-o"></i>
						</figure>
						<div class="services-info">
							<a href="#" ><h2>lorem ipsum</h2></a>
							<p>
								 asperiores alias sint dignissimos Similique odit rerum ipsum officia, nostrum et inventore
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
