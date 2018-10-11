<?php if(get_the_content()): ?>

<section <?php if(is_front_page()) echo 'class="text-center"'; ?>>
	<div class="container">

		<?php echo the_content(); ?>

		<?php 
			if(is_singular('client')):
				if( get_field('url') != ''):
		?>
		
			<a class="btn btn-dd-teal pull-right" target="_blank" href="<?php the_field('url'); ?>">Visit the site</a>
		
		<?php
				endif;
			endif; 
		?>

	</div>
</section>

<?php endif; ?>
