<?php get_header(); ?>
<div id="mission" class="row">
	<p class="pre_1 col_10 suf_1">
		The Panther Linux User Group is devoted to bringing Linux and open source
		ideals to the Florida International University campus and student body
	</p>
</div>

<div id="call" class="row">
	<div class="pre_2 col_4">
		<h1>Join</h1>
		<p>blah blah mailing list chatroom stuff like that</p>
	</div>
	<div class="col_4 suf_2 omega">
		<h1>Meet</h1>
		<p>yada yada come to this meeting at this time and bring beer and bitches</p>
	</div>
</div>

<div id="content" class="row">

<?php while ( have_posts() ) : the_post() ?>

<div id="post-<?php the_ID() ?>" class="pre_1 col_10 suf_1">
	<h2>
		<a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a>
	</h2>
	<?php the_excerpt('Read More') ?>
</div>

<?php comments_template() ?>

<?php endwhile; ?>
</div>

<?php get_footer(); ?>
