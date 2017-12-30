<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package barberhog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
	<?php if ( get_theme_mod('site_favicon') ) : ?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>" />
	<?php endif; ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action('barberhog_before_site'); //Hooked: barberhog_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'barberhog' ); ?></a>

	<?php do_action('barberhog_before_header'); //Hooked: barberhog_header_clone() ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-wrap">
            <div class="container">
                <div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
		        <?php if ( get_theme_mod('site_logo') ) : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>" /></a>
		        <?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>	        
		        <?php endif; ?>
				</div>
				<div class="col-md-7 col-sm-6 col-xs-12">
					<div class="btn-menu"></div>
					<nav id="mainnav" class="mainnav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => 'barberhog_menu_fallback' ) ); ?>
					</nav><!-- #site-navigation -->
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12 booking__div">
					<div class="col-xs-12">
						<a class="booking__link" target="_blank" href="https://booksy.net/pl-pl/1733_barberhog-aem-hair_barberzy_3_warszawa">Rezerwuj on-line</a>
					</div>
					<div class="col-xs-12 header-social">
						<p><a href="https://www.facebook.com/barberhogaemhair/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.svg" alt=""></a> <a href="https://www.instagram.com/barberhogcom" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri();?>/images/instagram.svg" alt=""></a></p>
					</div>
				</div>
				</div>
			</div>
		</div>
		<div class="barber__bar"></div>
	</header><!-- #masthead -->

	<?php do_action('barberhog_after_header'); ?>

	<div class="barberhog-hero-area">
		<?php barberhog_slider_template(); ?>
		<div class="header-image">
			<?php barberhog_header_overlay(); ?>
			<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
		</div>
		<?php barberhog_header_video(); ?>

		<?php do_action('barberhog_inside_hero'); ?>
	</div>

	<?php do_action('barberhog_after_hero'); ?>

<!-- 	<div id="content" class="page-wrap"> -->
<!-- 		<div class="container content-wrapper"> -->
<!-- 			<div class="row">	 -->