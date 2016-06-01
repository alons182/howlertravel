<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package howlertravel
 */

get_header(); ?>
<section class="main">
		<div class="inner">

		<?php
		while ( have_posts() ) : the_post();

			if ( get_post_type( $post ) == 'hotel' ) : 
				 get_template_part( 'template-parts/content', 'hotel' ); 
			elseif ( get_post_type( $post ) == 'tour' ) : 
				 get_template_part( 'template-parts/content', 'tour' ); 
			else :
				get_template_part( 'template-parts/content', get_post_format() );

				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endif;

		endwhile; // End of the loop.
		?>

	</div>
</section>

<?php
//get_sidebar();
get_footer();
