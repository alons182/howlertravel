<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package howlertravel
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
		<div class="inner">
			
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Howler Travel"><span class="header-logo-text">Guanacaste Howler Travel</span></a>
		
			<?php wp_nav_menu( array(
	                     'theme_location' => 'primary',
	                     'menu_id' => 'primary-menu',
	                     'container'       => 'nav',
		                'container_class' => 'header-menu',
		                'container_id'    => '',
		                'menu_class'      => 'header-enu-ul',
	                      ) 
                      ); 
                      ?>
			 <button id="btn-menu" class="header-btn-menu">
	            <i class="icon-menu"></i>
	        </button>
		</div>
	</header>

	<section class="banner" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/banner1.jpg');">
		<div class="inner">
	  	  		<div class="item-info txt-center">
	  	  			<h1>Travel with the experts</h1>
	  	  			<p>Travel with Guanacaste Howler Travel</p>
	  	  			
	  	  		</div>
	  	  		
	  	 </div>
		<!--<div class="owl-carousel owl-theme">
	  	  <div class="item" style="background-image: url('./img/banner1.jpg');">
	  	  	<div class="inner">
	  	  		<div class="item-info txt-center">
	  	  			<h1>The best rate for</h1>
	  	  			<p>Shuttle Services</p>
	  	  			
	  	  		</div>
	  	  		
	  	  	</div>
	  	  </div>
	  	  <div class="item" style="background-image: url('./img/banner2.jpg');">
	  	  		<div class="inner">
	  	  		<div class="item-info">
	  	  			<span >Full day tours</span>
	  	  			<span >Half day tours</span>
	  	  			<span >Water Sports</span>
	  	  		</div>
	  	  		
	  	  		
	  	  	</div>
	  	  </div>
	  	  	  
		</div>-->
	</section>
	