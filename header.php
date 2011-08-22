<?php
/**
 * @package WordPress
 */
?><xml version="1.0" encoding="UTF-8"/>
<!DOCTYPE html 

	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"

	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="http://twitter.github.com/bootstrap/assets/css/bootstrap-1.0.0.min.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- HEADER -->
<div id="header" class="row"> 
	<div class="span7 columns">
		<img src="http://t1.gstatic.com/images?q=tbn:ANd9GcRpcRjHOUqdSI-NX_-pr5r7wDD8CZElBW64MJU_b3DO2uhBI20Huw" alt="PLUG" title="PLUG" />
	</div>
	<ul class="pills">
		<li class="span3 columns">
			<a href="/about">About</a>
		</li>
		<li class="span3 columns">
			<a href="/blog">Blag</a>
		</li>
		<li class="span3 columns">
			<a href="/chat">Chat</a>
		</li>
	</ul>
</div>
<!-- END Header -->
