<?php
/**
 * Template part for displaying Interview Custom Posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package musicworks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<?php get_template_part( 'template-parts/interviews/content-hero' ); ?>


	
		
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

	<div class="entry-content body-wrap">
		

		<?php if( have_rows('entry_content') ): while ( have_rows('entry_content') ) : the_row();

			if( get_row_layout() == 'text' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-text' ); ?>

			<?php elseif ( get_row_layout() == 'blockquote' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-blockquote' ); ?>

			<?php elseif ( get_row_layout() == 'gallery' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-gallery' ); ?>

			<?php elseif ( get_row_layout() == 'image' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-image' ); ?>

			<?php elseif ( get_row_layout() == 'video' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-embed-video' ); ?>

			<?php elseif ( get_row_layout() == 'video_full' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-embed-video-full' ); ?>

			<?php elseif ( get_row_layout() == 'spotify' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-embed-spotify' ); ?>

			<?php elseif ( get_row_layout() == 'soundcloud' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-embed-soundcloud' ); ?>

			<?php elseif ( get_row_layout() == 'recommended_tools' ): ?>
				<?php get_template_part( 'template-parts/interviews/content-recommended-tools' ); ?>
		

			<?php endif; 
		endwhile; endif; ?>
		
		
		<?php get_template_part( 'template-parts/interviews/content-share' ); ?>


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



	<?php get_template_part( 'template-parts/interviews/content-related' ); ?><!-- #related-interviews -->



	<footer class="entry-footer">
		<?php musicworks_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
