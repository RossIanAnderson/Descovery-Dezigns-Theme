<?php 
	
	$servicesQuery = new WP_Query(array(
		'post_type'	=> 'service',
	));
	
	if ( $servicesQuery->have_posts() ):
			
?>

<section class="services">
	<div class="container">
		<div class="row">

			<?php
				$s = 0;
				while($servicesQuery->have_posts()):
					$servicesQuery->the_post();
			?>
					
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="panel panel-dd text-center">
						  <div class="panel-body">
						    <h5><i class="fa fa-<?php the_field('icon'); ?> fa-5x"></i></h5>
						    <p><?php the_title(); ?></p>
						    <?php if(($s % 2) == 0 ): ?>
						    	<a href="<?php the_permalink(); ?>" class="btn btn-dd-magenta">More</a>
						    <?php else: ?>
						    	<a href="<?php the_permalink(); ?>" class="btn btn-dd-teal">More</a>
						    <?php endif; ?>
						  </div>
						</div>
			    </div>

			<?php
				$s++;
				
				if(($s % 4) == 0 ){
					echo "<div class='clearfix visible-lg-block'></div>";					
				}
				if(($s % 3) == 0 ){
					echo "<div class='clearfix visible-md-block'></div>";					
				}
				if(($s % 2) == 0 ){
					echo "<div class='clearfix visible-sm-block'></div>";					
				}
				
				endwhile;
			?>

		</div>
	</div>
</section>
		
<?php endif; ?>