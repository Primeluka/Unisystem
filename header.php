<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/custom.css">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
        <div class="d-lg-none text-center">
            <img class="img-fluid" src="<?php echo get_bloginfo('template_directory').'/images/logo.png' ?>" alt="logo">
        </div>
		<?php
		/*
			$defaults = array(
				'theme_location'    => "main", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
				'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
				'container'         => "div", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
				'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
				'container_id'      => "", // (string) The ID that is applied to the container.
				'menu_class'        => "menu", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
				'echo'              => true, // (bool) Whether to echo the menu or return it. Default true.
				'fallback_cb'       => "wp_page_menu", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
				'before'            => "", // (string) Text before the link markup.
				'after'             => "", // (string) Text after the link markup.
				'link_before'       => "", // (string) Text before the link text.
				'link_after'        => "", // (string) Text after the link text.
				'items_wrap'        => "<ul></ul>", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
				'depth'             => 0, // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
				'walker'            => "" // (object) Instance of a custom walker class.
			);

			wp_nav_menu( $defaults );
			*/
		?>
		
        <div class="navbar navbar-expand-md">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                    <!--<span class="navbar-toggler-icon"></span>--><i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarContent">
                    <div class="mx-auto">
                        <nav class="navbar-nav align-items-center text-uppercase font-weight-lighter">
                            <a href="#" class="nav-link nav-item px-3">Start</a>
                            <a href="#" class="nav-link nav-item px-3">Budownictwo</a>
                            <a href="#" class="nav-link nav-item px-3">Projekty</a>
                            <div class="d-none d-lg-block px-md-3">
                                <img class="img-fluid" src="<?php echo get_bloginfo('template_directory').'/images/logo.png' ?>" alt="logo">
                            </div>
                            <a href="#" class="nav-link nav-item px-3">Galeria</a>
                            <a href="#" class="nav-link nav-item px-3">O nas</a>
                            <a href="#" class="nav-link nav-item px-3">Kontakt</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>