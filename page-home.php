<?php
/**
 * Template Name: Home
 */

get_header(); ?>


<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'home' );

	endwhile;
?>


<?php
get_sidebar();
get_footer();
