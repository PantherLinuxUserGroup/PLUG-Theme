<?php
/**
 * @package WordPress
 Template Name: Blog
 */

get_header(); ?>

<div id="content" class="row">
<div class="offset1 span12 columns">

<?php
	$posts_per_page = 5;
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'orderby' 	=> 'date',
		'order' 		=> 'DESC',
		'posts_per_page'	=> $posts_per_page,
		'paged'				=> $paged
	);
	$wp_query = new WP_Query($args);

	while ( $wp_query->have_posts() ) : $wp_query->the_post() ?>

<div id="post-<?php the_ID() ?>">
	<h2>
		<a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a>
	</h2>
	<ul id="meta" class="row unstyled">
		<li class="span4 columns">Posted on <?php the_time('F jS, Y'); ?></li>
		<li class="span4 columns">Written by <?php the_author(); ?></li>
		<li class="span4 columns">
			<?php comments_popup_link('No Comments Yet', '1 Comment', '% Comments'); ?>
		</li>
	</ul>
	<div class="entry">
		<?php the_excerpt() ?>
	</div>
	<p class="postmetadata">
		<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | 
		<?php edit_post_link('Edit', '', ' | '); ?>  
		<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
	</p>
</div>

<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>
