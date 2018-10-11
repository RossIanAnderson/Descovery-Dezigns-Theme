<?php
/**
 * 404 Template
 *
 * @file           404.php
 * @package        discoverydezigns 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0
 */
?>

<?php get_header(); ?>

<?php get_template_part('content', 'title'); ?>  

<section>
	<div class="container text-center">
			<h3>Couldn't find it.</h3>
			<h4>The file may have been moved or deleted. <i>Check your spelling.</i></h4>
	</div>
</section>

<?php get_footer(); ?>