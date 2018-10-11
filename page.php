<?php
/**
 * Page Template
 *
 * @file           page.php
 * @package        discoverydezigns 
 * @author         Ross Anderson 
 * @copyright      2015 Ross Anderson
 * @version        Release: 1.0
 */
?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php get_template_part('content', 'title'); ?>  

<?php get_template_part('content'); ?>

<?php get_footer(); ?>