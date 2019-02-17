<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package musicworks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<title><?php bloginfo( 'name' ); wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<style>
		::selection {
			color: <?php the_field('background_color'); ?>;
			background: <?php the_field('text_color'); ?>;
			text-shadow: none;
		}
	</style>
</head>

<body <?php body_class(); ?> style="background: <?php the_field('background_color'); ?>; color: <?php the_field('text_color'); ?>;">
	<div id="page" class="site">

		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'musicworks' ); ?></a> -->

		<header id="" class="" style="width: 100%; top: 0; left: 0; right: 0; position: fixed; text-align: center; z-index: 1000;">
			<div class="" style="height: 64px; justify-content: space-between; align-items: center; display: flex; background-size: contain !important; font-size: 16px; line-height: 24px; font-weight: 700;">
				<div class="header-menu">
					<a href="javascript:void(0)" data-navigation-toggler class="site-header-toggler topleft">
						<span></span>
						<span></span>
						<span></span>
					</a>
					<div style="padding: 20px 0 20px 72px;">Menu</div>
				</div>

				<p class="header-logo??? site-title???" style="">
					<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
				</p>

				<!-- Todo: Begin showing this when user scrolls below the fold  and continue 
				to show while user is scrolling down. When User is hovering over with curser, or 
				when user scrolls up, show the logo -->
				<p class="header-post-title"><?php the_title(); ?> — <?php the_field('hero_subtitle'); ?></p>

				<div class="header-socials">
					<a href="#" class="" style="display: flex;">Subscribe 
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 18 18">
							<g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
								<path d="M1 9h16M17 9L8.938.938M17 9l-8.062 8.062"/>
							</g>
						</svg>
					</a>
				</div>

				<div class="header-progress" id="myBar" style="background: <?php the_field('text_color'); ?>;">
					<span></span>
				</div>

			</div>
		</header><!-- # -->


		


			<!-- <?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title with-toggler topleft"><a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title with-toggler topleft">
					<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
					</a>
				</p>
				<?php
			endif;
			?> -->


	<header id="masthead" class="site-header">
		<div class="body-wrap container">

		
			<div class="site-branding"></div><!-- .site-branding -->

			<div>Search Bar?</div>

			<a href="javascript:void(0)" data-navigation-toggler class="site-header-toggler close-menu m m-10 topright">
				<span></span>
				<span></span>
				<span></span>
			</a>
				
			
			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'musicworks' ); ?></button> -->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'main-menu',
				) );
				?>
			</nav><!-- #site-navigation -->


			<?php
			$musicworks_description = get_bloginfo( 'description', 'display' );
			if ( $musicworks_description || is_customize_preview() ) :
				?>
				<!-- <p class="site-description"><?php echo $musicworks_description; /* WPCS: xss ok. */ ?></p> -->
			<?php endif; ?>


		</div>

	</header><!-- #masthead -->

		<div id="content" class="site-content">