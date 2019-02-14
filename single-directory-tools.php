<?php
/**
 * The template for displaying single posts under the custom post type: "mixes"
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package musicworks
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-content body-wrap">
					<section class="single-mixes-container">
						<div class="mix-thumbnail">
							<?php the_post_thumbnail('large'); ?>
						</div>
						<div class="mix-details">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<h1><?php the_title(); ?></h1>
								<h2><?php the_field('subtitle'); ?></h2>
								<?php the_field('content'); ?>
							<?php endwhile; endif; ?>
						</div>

					</section>
					<p>
						<?php previous_post_link(); ?> -
							<a href="<?php bloginfo('url'); ?>/portfolio">Back to All Mixes</a> - 
						<?php next_post_link(); ?>
					</p>
					
					<?php get_template_part( 'template-parts/content-share' ); ?>
					
				</div><!-- .entry-content -->

				<footer class="entry-footer">
					<?php musicworks_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
