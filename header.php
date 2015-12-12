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
		<a href="<?php echo home_url( ); ?>">
			<h1 class="logo">
				Makotodesign
			</h1>
		</a>
			<?php wp_nav_menu(array(
				'theme_location'=>'utilitynavi',
				'container'=>'nav',
				'container_class'=>'utility_nav'	
					)); ?>

		<div class="main_header clear">
			<!--<h2>
				<?php bloginfo('description'); ?>
			</h2>-->
<?php 
    echo do_shortcode("[metaslider id=91]"); 
?>
		</div>
	</header>
	<?php wp_nav_menu(array(
		'theme_location'=>'mainnav',
		'container'=>'nav',
		'container_class'=>'main_nav clearfix'
	
	
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
	