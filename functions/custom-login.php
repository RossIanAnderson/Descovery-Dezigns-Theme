<?php
	function dd_custom_login_logo() { ?>
	    <style type="text/css">
		    	.login h1 {
		    	}
		    
	        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo@2x.png);
            padding-bottom: 10px;
            background-size: 320px;
            margin: 0;
			    	width: 100%;

	        }
	    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'dd_custom_login_logo' );
