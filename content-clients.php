<?php 
	
	$clientsQuery = new WP_Query(array(
		'post_type'	=> 'client',
	));
	
	if ( $clientsQuery->have_posts() ):
			
?>

<section class="clients">
	<div class="container">
		<div class="row">

			<?php
				$s = 0;
				while($clientsQuery->have_posts()):
					$clientsQuery->the_post();
			?>
					
					<div class="col-sm-6 col-md-4 col-lg-3">
						<div class="panel panel-dd text-center">
							<div class="panel-image">
								<img src="<?php the_field('thumbnail'); ?>" alt="Thumbnail for <?php the_title(); ?>">
							</div>
						  <div class="panel-body">
						    <?php if(($s % 2) == 0 ): ?>
						    	<a href="<?php the_permalink(); ?>" class="btn btn-dd-magenta"><?php the_title(); ?></a>
						    <?php else: ?>
						    	<a href="<?php the_permalink(); ?>" class="btn btn-dd-teal"><?php the_title(); ?></a>
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