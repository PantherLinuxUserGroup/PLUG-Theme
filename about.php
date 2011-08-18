<?php
/**
 * @package WordPress
 Template Name: About
 */

get_header(); ?>

<div class="row">

<?php while ( have_posts() ) : the_post() ?>

<div id="about-blurbs" class="pre_1 col_5">
	<?php the_content() ?>
</div>

<?php endwhile; ?>
</div>

<?php get_footer(); ?>
