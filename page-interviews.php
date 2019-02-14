<?php 
/*
	Template Name: Interviews (All) Page
	*/
?>

<?php get_header(); ?>

<header class="header-page">
	<div class="body-wrap">

		<p class="red tracked-mega ttu fw7 f5">page-interviews.php</p>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h2><?php the_field('page_description'); ?></h2>
		<?php endwhile; endif; ?>

	</div>
</header>


<?php 

$args = array(
	'post_type' => 'interviews',
	'posts_per_page' => $num_posts
);
$query = new WP_Query( $args );

?>


<section class="body-wrap">
	<div class="explore-grid">



		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
		<article class="thumb-post-item">

				
				<a class="" href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('large'); ?>
					<h3 class=""><?php the_title(); ?></h3>
					<p class=""><?php the_field('hero_subtitle'); ?></p>
				</a>



		</article>
		<?php endwhile; endif; wp_reset_postdata(); ?>



	</div>
</section>


<?php get_footer(); ?>