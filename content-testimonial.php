<?php if(get_field('testimonial')): ?>

<section class="testimonial">
	<div class="container">
		<blockquote>
		  <p><?php the_field('testimonial'); ?></p>
		</blockquote>
	</div>
</section>

<?php endif; ?>