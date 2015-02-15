<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,600,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="navbar">
  <div class="wrapper">
    <div id="branding">
      <div id="site-title"><?php if ( is_singular() ) {} else {echo '<h1>';} ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a><?php if ( is_singular() ) {} else {echo '</h1>';} ?></div>
    </div>
    <nav id="nav">
      <button class="nav-expand"><i class="icon hamburger"></i></button>
      <?php 
      wp_nav_menu( array(
        'container' => false,
        'menu'      => 'primary',
      ) ); ?>
    </nav>
  </div>
</div>
<div class="wrapper hfeed">
<div id="container">