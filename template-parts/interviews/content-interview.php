<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package musicworks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<!-- <?php get_template_part( 'template-parts/content-hero' ); ?> -->


	
		
		<?php 
			if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta">
				<!-- <?php
				musicworks_posted_on();
				musicworks_posted_by();
				?> -->
			</div><!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<!-- <?php musicworks_post_thumbnail(); ?> -->

	<div class="entry-content body-wrap">
		

		<?php if( have_rows('entry_content') ): while ( have_rows('entry_content') ) : the_row();

			if( get_row_layout() == 'interview_text' ): ?>
				<?php get_template_part( 'template-parts/content-interview-text' ); ?><!-- .interview-text -->

			<?php elseif ( get_row_layout() == 'blockquote' ): ?>
				<?php get_template_part( 'template-parts/content-blockquote' ); ?><!-- .interview-blockquote -->

			<?php elseif ( get_row_layout() == 'gallery' ): ?>
				<?php get_template_part( 'template-parts/content-gallery' ); ?><!-- .image-gallery -->

			<?php elseif ( get_row_layout() == 'image' ): ?>
				<?php get_template_part( 'template-parts/content-image' ); ?><!-- .image-image -->


			<?php elseif ( get_row_layout() == 'embed_center' ): ?>
				<?php get_template_part( 'template-parts/content-embed-center' ); ?><!-- .embed-center -->

			<?php elseif ( get_row_layout() == 'embed_full' ): ?>
				<?php get_template_part( 'template-parts/content-embed-full' ); ?><!-- .embed-full -->
		






		












			<?php endif; 
		endwhile; endif; ?>
		
		
		<?php get_template_part( 'template-parts/content-share' ); ?>




















		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'musicworks' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'musicworks' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php musicworks_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
