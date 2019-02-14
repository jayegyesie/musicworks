<ol>
    <li>
    </li>
</ol>




            <ol class="directory">
                <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                <li class="directory-row directory-row--divide">

                    <?php 
                    $link = get_field('link');
                    if( $link ): ?>
                    <a class="directory-link" href="<?php echo $link['url']; ?>?ref=musicworks.io" target="<?php echo $link['target']; ?>">

                        <span class="directory-logo-thumb">
                            <?php the_post_thumbnail('48px'); ?>
                        </span>

                        <span class="directory-text ">
                            <h3 class="directory-name">
                                <?php the_title(); ?>
                                <!-- <span class="directory-meta">
                                    <span class="directory-cost"><?php the_field('cost'); ?></span>
                                    <span class="directory-category"><?php the_field('cost'); ?></span>
                                </span> -->
                            </h3>
                            <p class="directory-tagline">
                                <?php the_field('description'); ?>
                            </p>
                        </span>

                    </a>
                    <?php endif; ?>

                    <!-- <div class="directory-meta dn">
                        <span class="directory-cost"><?php the_field('cost'); ?></span>
                        <span class="directory-category"><?php the_terms( $post->ID, 'topic', '<ul><li>', '</li><li>', '</li></ul>'  ); ?></span>
                    </div> -->

                    <!-- <?php 
                    $link = get_field('link');
                    if( $link ): ?>
                    <button class="directory-btn" style="display:none;">
                        <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    </button>
                    <?php endif; ?> -->

                </li>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </ol>