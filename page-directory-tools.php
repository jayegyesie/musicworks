<?php 
/*
	Template Name: Directory Tools Page
*/
?>

<?php get_header(); ?>

<header class="header-page">
	<div class="body-wrap">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h2><?php the_field('page_description'); ?></h2>
		<?php endwhile; endif; ?>
	</div>
</header>

<?php
$args = array(
	'post_type' => 'tools',
	'posts_per_page' => $num_posts
);
$args['search_filter_id'] = 89;
$query = new WP_Query( $args );
?>

<!-- By default your custom taxonomies use the archive.php template 
to display posts. However, you can create a custom archive display 
for them by creating taxonomy-{taxonomy-slug}.php. -->

<section class="body-wrap directory-wrap">
    <div class="col-3-to-12">
        <div class="sidebar-wrap">
            <div class="sidebar">
                <?php get_sidebar(); ?>
                <!-- <?php the_terms( $post->ID, 'topic', '<ul class="test"><li>', '</li><li>', '</li></ul>'  ); ?> -->
            </div>
        </div>
    </div>

    <div class="col-9-to-12">
        <div class="directory-list-wrap">
            
            <ol class="directory-list">
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                <li class="directory-item">

                    <?php 
                    $link = get_field('link');
                    if( $link ): ?>
                    <a class="directory-link" href="<?php echo $link['url']; ?>?ref=musicworks.io" target="<?php echo $link['target']; ?>">
                        <div class="directory-logo">
                            <?php the_post_thumbnail('48px'); ?>
                        </div>
                        <div class="directory-content">
                            <h3 class="directory-name">
                                <?php the_title(); ?>
                            </h3>
                            <p class="directory-tagline">
                                <?php the_field('description'); ?>
                            </p>
                        </div>
                    </a>
                    <?php endif; ?>



                    <div class="directory-meta">
                        <span class="meta-info is-cost">
                            <!-- <?php the_field('cost'); ?> -->
                            Price
                        </span>
                        <span class="meta-info is-category">
                            <!-- <?php the_field('cost'); ?> -->
                            Topic
                        </span>
                        <!-- <span class="meta-info has-categories">
                            <?php the_terms( $post->ID, 'topic', '<ul><li>', '</li><li>', '</li></ul>'  ); ?>
                        </span> -->
                    </div>



                    <!-- <?php 
                    $link = get_field('link');
                    if( $link ): ?>
                    <button class="directory-btn>
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    </button>
                    <?php endif; ?> -->

                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ol>
        </div>
    </div>
</section>

<?php get_footer(); ?>







<!-- todo: inc. 24px avatar of recommended/used-by using 'relational' custom field to pull interview data -->