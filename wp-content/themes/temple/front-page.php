<?php

	/*
	Template Name: FrontPage
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

<?php the_content(); ?>

<?php get_template_part('template', 'parts/contact'); ?>

<?php get_footer(); ?>


