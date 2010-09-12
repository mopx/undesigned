<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>
<?php bloginfo('name'); wp_title(); ?> &mdash; <?php bloginfo('description'); ?>
</title>
<meta http-equiv="Content-Type" content="<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico" />
<?php wp_head();?>
</head>
<body>

<div class="container_24">

<div id="header">

<div class="grid_16">
  <h1><a href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
  <p class="tagline"><?php bloginfo('description'); ?> </p>
</div><!-- .grid_16 -->

<div class="grid_7 prefix_1">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Header')) : ?><?php endif; ?>
</div><!-- .grid_7 -->

</div><!-- #header -->


<div class="clear"></div>
<div class="grid_24">
<div id="menu">

<?php wp_nav_menu( array( 'theme_location' => 'menu-1' ) ); ?>

<div class="clear"></div>
</div><!-- #menu --> 
</div><!-- .grid_24 -->

<div class="clear"></div>