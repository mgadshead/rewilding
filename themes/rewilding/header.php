<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?php echo the_title(); ?> - <?php bloginfo('name'); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="<?php echo THEME_URL; ?>/img/favicon.png">
        <?php wp_head(); ?>
	</head>
	<body data-barba="wrapper">
        <header>
            <!-- <button class="hamburger hamburger--slider" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button> -->
            <div class="menu-container">
                <div class="menu-background"></div>
                <?php wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => false 
                )); ?>
            </div>
        </header>