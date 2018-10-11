<?php
/**
 * Front Page Template
 *
 * @file           front-page.php
 * @package        ra-portfolio 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0
 */
?>
<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('content', 'title'); ?>

<?php get_template_part('content'); ?>



		
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
					$s = 1;
					while($servicesQuery->have_posts()):
						$servicesQuery->the_post();
						if(get_field('display')):
						
				?>
						
						<div class="col-md-4">
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
						endif;
					endwhile;
				?>

			</div>
		</div>
	</section>
			
<?php endif; ?>

<?php get_footer(); ?>