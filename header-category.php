<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<title><?php bloginfo('name');?></title>
<?php wp_head( ); ?>
</head>
<body <?php body_class();?>>
<div class="container">
	<header>
		<a href="">
			<h1 class="logo">
				Makotodesign
			</h1>
		</a>
		<nav class="utility_nav">
			<ul>
			<li><a href="">NEWS</a></li>
			<li><a href="">SITEMAP</a></li>
			<li><a href="">PRIVACY</a></li>
			</ul>
		</nav>

	</header>
	<?php wp_nav_menu(array(
		'theme_location'=>'mainnav',
		'container'=>'nav',
		'container_class'=>'main_nav clearfix clear'
	
	
	)); ?>
	
	
	<!--
	<nav class="main_nav clearfix">
		<ul>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		<li><a href="">menu</a></li>
		</ul>
	</nav>
	-->
	