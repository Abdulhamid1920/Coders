<?php get_header(); ?>


<!-- <h1>This is actually my front page</h1> -->
<div class="main-wrapper">
	<aside class="aside">
		<?php
    wp_nav_menu(
            [
                'theme_location'=> 'Aside-left-menu',
              'menu_class'=> 'nav',
              'container'=> ''
            ]
              
    ); 
     ?>
	</aside>
    <main>
    	<?php the_title(); ?>
    	<?php the_content(); ?>
    </main>
    <aside>
    	 <p>this is the right aside</p>
    </aside>
</div>