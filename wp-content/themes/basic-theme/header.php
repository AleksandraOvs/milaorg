<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="https://schema.org/Organization">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<link rel="icon" href="images/favicons/favicon.ico"> <!-- 32×32 -->
	<link rel="icon" href="images/favicons/favicon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="images/favicons/favicon.png">  <!-- 180×180 -->
	<!-- <link rel="manifest" href="manifest.webmanifest"> -->
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="site-container">
	<div class="show-temp"><?php echo get_current_template(); ?></div>
	<header class="header">
	
        <div href="<?php echo site_url() ?>" class="header__top">
			<div class="fixed-container">
				<div class="header__top__left">
					<a href="/" class="site-header__logo">
  		    			<?php
  			    			$header_logo = get_theme_mod('header_logo');
  			    			$img = wp_get_attachment_image_src($header_logo, 'full');
  			    			if ($img) : echo '<img src="' . $img[0] . '" alt="">';
  			    			endif;
            			?>
					</a>
					<h1><?php echo get_bloginfo('description') ?></h1>
				</div>

				<div class="header__top__right">
					<div class="header__menu__container flex align-center justify-between">
                <?php
			        wp_nav_menu(
				        array(
					        'theme_location' => 'menu-header',
					        'container' => 'nav',
					        'menu_class' => 'header__menu',
				        )
			        );
			    ?>
            		</div>
				</div>

				<button class="header__burger burger js-toggle-menu" type="button">
          			<span class="burger__line"></span>
          			<span class="sr-only">open/close menu</span>
        		</button>
 
			</div>
		</div>

		<div class="header__bottom">
			<div class="fixed-container">
				
            
      		</div>
		</div>
        
                   
    </header>

	<main class="main">