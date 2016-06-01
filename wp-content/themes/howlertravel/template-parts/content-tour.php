<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package howlertravel
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		
		<?php
			
		   		$photos = rwmb_meta( 'rw_tour_thumb', 'type=image&size=large' ); 
		             if ( $photos ) {
		                    $i = 0;
		                ?>
		             <div class="slider">
						<div class="owl-carousel">
		               
		                     
		                     <?php foreach ( $photos as $photo ){
		                            $i++;
		                        ?>
		                         <figure class="gallery-item" style="background-image: url(<?php echo $photo['url'] ?>);">
									<!--<img src="<?php echo $photo['url'] ?>" alt="<?php the_title();?>" >-->
		                         </figure>
		                         
		                      
		                      <?php } ?>
  						</div>
						
					</div>
		      
		           <?php  
		            }
		            ?>
			          
			<?php
			the_content();

		?>
		<div class="additional-info">
			<?php if(rwmb_meta( 'rw_features')): ?>
				<div class="features">
					<?php echo rwmb_meta( 'rw_features'); ?>
				</div>
			<?php endif ?>
			<?php if(rwmb_meta( 'rw_whattowear')): ?>
				<div class="wear">
					<?php echo rwmb_meta( 'rw_whattowear'); ?>
				</div>
			<?php endif ?>
			<?php if(rwmb_meta( 'rw_whattobring')): ?>
				<div class="bring">
					<?php echo rwmb_meta( 'rw_whattobring'); ?>
				</div>
			<?php endif ?>
			<?php if(rwmb_meta( 'rw_prices')): ?>
				<div class="prices">
					<?php echo rwmb_meta( 'rw_prices'); ?>
				</div>
			<?php endif ?>
			
		</div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
