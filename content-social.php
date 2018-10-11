<?php
	$socialQuery = new WP_Query(array(
		'post_type'	=> 'social',
	));
	
	$numPosts = $socialQuery->post_count;
			
	$offset = (12 - ($numPosts * 2)) / 2; 
	
	if ( $socialQuery->have_posts() ):
?>


<section class="social">
	<div class="container-fluid">
		<div class="row">
			
			<?php
				$i = 0;
				while($socialQuery->have_posts()):
					$socialQuery->the_post();
				?>
				
				<div class="col-md-2 <?php if($i == 0) echo 'col-md-offset-' . $offset ?> ">
					<a target="_blank" href="<?php the_field('url'); ?>">
						<div class="panel panel-dd text-center">
						  <div class="panel-body">
						    <h5>
							    <span class="fa-stack fa-5x">
							      <i class="fa fa-circle fa-stack-2x" style="color: <?php the_field('colour'); ?>;"></i>
							    	<i class="fa fa-<?php the_field('icon'); ?> fa-inverse fa-stack-1x"></i>
							    </span>
								</h5>
						  </div>
						</div>
					</a>
				</div>
				
				<?php
					$i++;
				endwhile;
			?>
			
		</div>
</section>

<?php
	endif;
?>