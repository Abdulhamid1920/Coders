<!DOCTYPE html>
<html>
<head>
	<title>WORDPRESS THEME</title>

	<?php wp_head();?>
</head>
<body>
<header>
	<?php
	wp_nav_menu(
            [
            	'theme_location'=> 'header-menu',
		      'menu_class'=> 'nav',
		      'container'=> ''
            ]
		      
	); 
	 ?>
</header>

