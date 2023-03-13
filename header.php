<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package La Mãs Alta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--  Essential META Tags -->

	<meta property="og:title" content="La Mãs Alta | New York">
	<meta property="og:description" content="Get all of your high quality street wear ranging from hats, beanies & more!
	Unique styles that make you look good. Black Owned. Check us out now!">
	<meta property="og:image" content="https://i.imgur.com/5JpBeV2.jpg" />
	<meta property="og:image:secure_url" content="https://i.imgur.com/5JpBeV2.jpg">
	<meta property="og:type" content="image/jpg">
	<meta property="og:image:width" content="300">
	<meta property="og:image:height" content="300">
	<meta property="og:url" content="https://lamasalta.com/">
	<meta name="twitter:card" content="summary_large_image">

	<!--  Non-Essential, But Recommended -->

	<meta property="og:site_name" content="La Mãs Alta">
	<meta name="twitter:image:alt" content="La Mãs Alta Logo">


	<!--  Non-Essential, But Required for Analytics -->
	<meta property="fb:app_id" content="your_app_id" />
	<meta name="twitter:site" content="@website-username">

	<title>La Mãs Alta | <?php echo get_the_title($post->ID); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <div class="main-content">
    <section class="main-header">
	<header id="masthead" class="site-header">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon"/>
    <!-- las mas alta logo -->
    <a class="la-mas-logo" href="<?php echo home_url()?>"><img class="la-mas-logo__img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="La Mãs Alta Logo"/></a>
       <!-- las mas alta logo -->


    <!-- la mas alta nav -->
    <div class="header-right-menu">

    <?php if ( is_user_logged_in() ) { ?>
  <a style="border:none; margin-right: 0.5rem" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"> <img class="user-icon" src="<?php echo get_template_directory_uri(); ?>/img/user-icon.svg"/></a>
<?php } else { ?>
  <a class="login-btn" style="border:none;" href="<?php echo wp_login_url();?>">Login</a>
<a class="login-btn" style="border:none" href="<?php echo site_url('/wp-login.php?action=register');?>">Register</a>
<?php }; ?>

<a class="heart-icon" href="<?php echo site_url('/wishlist')?>"><img src="<?php echo get_template_directory_uri(); ?>/img/heart-icon.svg" alt="Heart Icon"></a>
<a style="border:none; position: relative;" href="<?php echo wc_get_cart_url(); ?>">
  <img class="shopping-bag" src="<?php echo get_template_directory_uri(); ?>/img/shopping-bag.svg"/>
  <span class="cart_items_num"><?php echo sprintf ( _n( '%d ', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
</span>
</a>

<img class="hamburger-menu" src="<?php echo get_template_directory_uri(); ?>/img/hamburger-menu.svg"/>
</div>
          <!-- la mas alta nav -->
          </header><!-- #masthead -->

<div class="overlay-menu">
<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon"/>
  <div class="container-margins">
<div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
    </div> <!-- header search form -->
    </div> <!-- container margins -->
</div> <!-- overlay menu -->



    <!-- secondary product nav -->

    <div class="secondary-product-nav">
    <nav id="site-navigation" class="product-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'menu_id'        => 'secondary-menu',
            )
        );
        ?>
        </nav><!-- #site-navigation -->
        </div> <!-- secondary product nav -->

        <div class="mobile-menu-overlay">
        <div class="mobile-margins">
        <div class="mobile-menu-overlay__header">
        <img class="la-mas-logo__img" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="La Mãs Alta Logo"/>
        <img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon"/>
        </div>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'menu_id'        => 'secondary-menu',
            )
        ); ?>

        <div class="mobile-second-links">
         <?php if ( !is_user_logged_in() ) { ?>
        <?php } else { ?>
  <a class="login-btn" style="border:none;" href="<?php echo wp_login_url();?>">Login</a>
<a class="login-btn" style="border:none" href="<?php echo site_url('/wp-login.php?action=register');?>">Register</a>
<?php }; ?>
</div> <!-- mobile second links -->

      <div class="mobile-menu-overlay__utils">
      <div class="header-search-form">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label>
      <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for something...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button type="submit" name="submit" value="submit"></button>
</form>
      </div>
        </div> <!-- mobile margins -->
        </div> <!-- mobile menu overlay -->

    </section>
