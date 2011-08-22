<?php get_header(); ?>
<div id="mission" class="row">
	<p class="offset1 span12 columns">
		The Panther Linux User Group is devoted to bringing Linux and open source
		ideals to the Florida International University campus and student body
	</p>
</div>

<div id="call" class="row">
	<div class="offset3 span5 columns">
		<h1>Join</h1>
		<p>blah blah mailing list chatroom stuff like that</p>
	</div>
	<div class="span5 columns">
		<h1>Meet</h1>
		<p>yada yada come to this meeting at this time and bring beer and bitches</p>
	</div>
</div>

<div id="content" class="row">

<?php while ( have_posts() ) : the_post() ?>

<div id="post-<?php the_ID() ?>" class="offset1 span12 columns">
	<h2>
		<a href="<?php the_permalink() ?>" title="" rel="bookmark"><?php the_title() ?></a>
	</h2>
	<?php the_excerpt('Read More') ?>
</div>

<?php comments_template() ?>

<?php endwhile; ?>
</div>

<?php get_footer(); ?>
