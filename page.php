<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package build/create_-_nrc
 */

get_header();

if(have_posts()): while(have_posts()): the_post();

	get_template_part('template-parts-resources/rex_content');
	get_template_part('template-parts-resources/case-studies/rex-case_study');
	get_template_part('template-parts/flexible_content');

endwhile; endif;

get_footer();
