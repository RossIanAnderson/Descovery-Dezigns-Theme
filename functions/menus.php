<?php
	
function dd_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'dd_menus' );
