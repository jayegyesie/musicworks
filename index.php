<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package musicworks
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<section class="vh-75 bg-black mw-100 items-center flex" style="background: #4101f5;">
			<div class="white f2 lh-title tc center w-two-thirds">
				The Art of Work explores company culture, employer branding, work/life balance and office rituals at design-minded companies all over the world. We write guides, publish interviews,  host events and send out a popular bi-weekly newsletter.
			</div>
		</section>

		<h1 class="red">HELLO FROM INDEX.PHP</h1>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
