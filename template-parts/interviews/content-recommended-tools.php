<div class="tools-list">
	<?php 
	$posts = get_sub_field('recommended_tools');
	if( $posts ): ?>
		<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		<?php setup_postdata($post); ?>

			<?php 
			$link = get_field('link');
			if( $link ): ?>
			<a class="tool-item tool-link" href="<?php echo $link['url']; ?>?ref=musicworks.io" target="<?php echo $link['target']; ?>">
				<div class="tool-logo">
					<?php the_post_thumbnail('48px'); ?>
				</div>
				<div class="tool-content">
					<h3 class="tool-name">
						<?php the_title(); ?>
					</h3>
					<p class="tool-tagline">
						<?php the_field('description'); ?>
					</p>
				</div>
			</a>
			<?php endif; ?>

		<?php endforeach; ?>
		<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
</div>