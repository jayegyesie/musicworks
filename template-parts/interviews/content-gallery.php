<div class="image-gallery">
	<div class="image-gallery-container">
		<?php $images = get_sub_field('gallery'); ?>
		<?php foreach($images as $image) : ?>
		
			<figure class="image-item <?php the_field('media_width', $image['id']); ?>">
			
				<?php echo wp_get_attachment_image($image['id'], 'full'); ?>
				
				<?php $caption = wp_get_attachment_caption($image['id']); ?>
				
				<?php if(!empty($caption)) : ?>
				
				<figcaption class="caption"><?php echo $caption; ?></figcaption>
				
				<?php endif; ?>
				
			</figure>
			
		<?php endforeach; ?>
	</div>
</div>