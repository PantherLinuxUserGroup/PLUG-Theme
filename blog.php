<?php
/**
 * @package WordPress
 Template Name: Blog
 */

get_header(); ?>

<div id="content" class="row">

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

<div id="post-<?php the_ID() ?>" class="pre_1 col_10">
	<h2>
		<a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a>
	</h2>
	<ul id="meta" class="row">
		<li class="col_2">Posted on <?php the_time('F jS, Y'); ?></li>
		<li class="col_2">Written by <?php the_author(); ?></li>
		<li class="col_2 omega">
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
	<p>
</div>

<?php endwhile; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
