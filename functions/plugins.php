<?php

function include_plugin($plugin, $class = null){
	if(isset($class)){
	}
	else {
		if (!class_exists($plugin)) {
			include_once(TEMPLATEPATH . '/plugins/' . $plugin . '/' . $plugin . '.php');
		}
	}
}	
	
function dd_plugins() {
	
	include_plugin('acf');
	include_plugin('acf-repeater');
		
}

add_action('after_setup_theme', 'dd_plugins');
