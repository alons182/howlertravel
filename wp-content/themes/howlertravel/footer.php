<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package howlertravel
 */

?>

	<section  class="contact">
		<div class="inner">
			
				<div class="contact-container">
					<div class="contact-item">
						<h3>Telephone</h3>
						<p>
						<span>Telephone :</span> +(506) 7289-2376. <br />
						
					</div>
					<div class="contact-item">
						<h3>Address</h3>
						<p>
						Guanacaste, Costa Rica</p>
					</div>
					<div class="contact-item emails">
						<h3>Email</h3>
						<p>
						info@guanacastehowlertravel.com reservations@guanacastehowlertravel.com</p>
					</div>
					<div class="contact-item">
						<h3>Follow Us</h3>
						<div class="social">
							<a href="#" class="social-item"><i class="icon-facebook"></i></a>
							<a href="#" class="social-item"><i class="icon-twitter"></i></a>
							<a href="#" class="social-item"><i class="icon-google-plus"></i></a>
							<a href="#" class="social-item"><i class="fa fa-instagram"></i></a>
							<a href="#" class="social-item"><i class="fa fa-skype"></i></a>
							<a href="#" class="social-item"><i class="icon-tripadvisor"></i></a>
						</div>
					</div>

				</div>
				
			 <?php get_template_part( 'template-parts/float', 'contact' ); ?>
		</div>
	</section>
	<footer class="footer">
		<div class="inner">
			
			<div class="copy">
				Guanacaste Howler Travel &copy; 2016. <a href="#"><i class="icon-avotz"></i></a>
			</div>
			
			
			
			
		</div>
		
	</footer>

<?php wp_footer(); ?>

</body>
</html>
