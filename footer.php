
<footer>
	 <?php
	wp_nav_menu(
            [
            	'theme_location'=> 'Footer-menu',
		      'menu_class'=> 'nav',
		      'container'=> ''
            ]
		      
	); 
	 ?>
</footer>
<!-- <p style="background: blue;color: white">All rights reserved</p>
 --><?php wp_footer() ?>
</body>
</html>