<section class="title">
	<div class="container-fluid">
	<?php if(is_front_page()): ?>
		<h2><?php bloginfo('description'); ?></h2>
	<?php elseif(is_404()): ?>
		<h2>404!</h2>
	<?php else: ?>
		<h2><?php the_title(); ?></h2>
	<?php endif; ?>
	</div>
</section>

