<div class="interview-hero">
    <div class="body-wrap">
        <div class="hero-container">
            <div class="hero-text-items">
                <p>How music works for</p>
                <!-- <p>Interview</p> -->
                <h1 class="hero-title"><?php the_title(); ?></h1>
                <h2 class="hero-subtitle"><?php the_field('hero_subtitle'); ?></h2>
            </div>
            <?php if( get_field('hero_image') ): ?>
                <img class="hero-image" src="<?php the_field('hero_image'); ?>" >
            <?php endif; ?>
        </div>
    </div>
</div>