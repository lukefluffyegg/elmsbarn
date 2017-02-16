<?php
/**
*
* Header
*
**/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

    <!-- Character Set -->
    <meta charset="<?php bloginfo('charset'); ?>">
        
    <!-- Page Title -->
    <title><?php echo (is_front_page())? bloginfo('name') : wp_title(''); ?></title>
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
   
    <meta name="format-detection" content="telephone=no">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Fav Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-TileImage" content="<?php esc_url('template_directory'); ?>/images/favicons/mstile-144x144.png">   

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
 

    <script type="text/javascript">
        var html = document.getElementsByTagName('html')[0];
        html.className = html.className.replace(new RegExp('(^|\\b)' + 'no-js' + '(\\b|$)', 'gi'), '');
    </script>

    <?php wp_head(); ?>
    
</head>

<body class="body ">
 <?php $shortname = 'starter-theme'; ?>
<header>
    <h1><img src="<?php echo get_template_directory_uri() . '/img/darklogo.png'?>"></h1>
    <div class="link-wrapper">
      <a title="Home" href="#">Home</a>
      <a title="Venue" href="#">Venue</a>
      <a title="Your Wedding" href="#">Your Wedding</a>
      <a title="Accommodation" href="#">Accommodation</a>
      <a title="Prices" href="#">Prices</a>
      <a title="Offers" href="#">Offers</a>
      <a title="Contact" href="#">Contact</a>
    </div>
  </header>
  <?php if(have_rows('home_slider')): ?>
    <?php  
        while(have_rows('home_slider')): the_row();  
        $slide_title   = get_sub_field('slider_title');
        $slider_image  = get_sub_field('slider_image'); 
    ?>
  <section class="panel panel--one" style="background-image: url('<?php echo $slider_image['url']; ?>'); background-size:cover; background-position: center center;">
    <div class="caption">
       <?php echo $slide_title; ?>
    </div>
  </section>
<?php endwhile; ?>
  <?php endif; ?>