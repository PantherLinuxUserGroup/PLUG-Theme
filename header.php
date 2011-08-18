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
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  
<!-- The Columnal Grid (base, load first) -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/columnal.css" type="text/css" media="screen" />

<!-- Fixes for IE -->
	<!--[if lt IE 9]>
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css" media="screen" />
	<![endif]-->

	<!-- use "fixed-984px-ie.css" or "fixed-960px-ie.css for a 984px or 960px fixed width for IE6 and 7 -->
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fixed-984px-ie.css" type="text/css" media="screen" />
	<![endif]-->
	
<!-- Fixes for IE6, only needed if IE 6 will be supported - width must match 984px or 960px of css file used above -->
<!-- Use .imagescale to fix IE6 issues with full-column width images (class must be added to any image wider than the column it is placed into) -->
	<!--[if lte IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie6-984px.css" type="text/css" media="screen" />
	<![endif]-->
  <!-- End fixes for IE -->

<!-- Page building tools - Gray box colors and page debugging tools -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/build.css" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="container" class="container">
<!-- HEADER -->
<div id="header" class="row"> 
	<div class="pre_1 col_4">
		<img src="blahblah.jpg" alt="PLUG" title="PLUG" />
	</div>
	<div class="col_2">
		<a href="/about">About</a>
	</div>
	<div class="col_2">
		<a href="/blog">Blag</a>
	</div>
	<div class="col_2 suf_1 omega mobile_hide">
		<a href="/chat">Chat</a>
	</div>
</div>
<!-- END Header -->
