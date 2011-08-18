<?php
/**
 * @package WordPress
 */

get_header(); ?>

<div class="row">

<?php while ( have_posts() ) : the_post() ?>

<div id="post-<?php the_ID() ?>" class="pre_1 col_10">
	<h2>
		<a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a>
	</h2>
	<?php the_content() ?>
</div>

<?php comments_template() ?>

<?php endwhile; ?>
</div>

<?php get_footer(); ?>
