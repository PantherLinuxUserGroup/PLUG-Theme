<?php
/**
 * @package WordPress
 Template Name: About
 */

get_header(); ?>

<div class="row">

<?php while ( have_posts() ) : the_post() ?>

	<?php the_content() ?>


<?php endwhile; ?>
</div>

<?php get_footer(); ?>
