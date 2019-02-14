<section id="related-interviews" class="body-wrap">
    <h1 class="">Related Interviews</h1>
<?php 

$args = array(
	'post_type' => 'interviews',
    'post__not_in' => array($post->ID),
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'post_status' => 'publish'
);
$query = new WP_Query( $args );

?>


	<div class="explore-grid">

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<article class="thumb-post-item">

				<a class="" href="<?php the_permalink(); ?>">
					<div class="hover-element">
						<?php the_post_thumbnail('large'); ?>
					</div>
					<h3 class=""><?php the_title(); ?></h3>
					<p class=""><?php the_field('hero_subtitle'); ?></p>
				</a>

		</article>
		<?php endwhile; endif; wp_reset_postdata(); ?>


	</div>
</section>