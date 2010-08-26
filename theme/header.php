<!doctype html>
<html lang="en" class="no-js" <?php language_attributes(); ?>>
  <head>

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- www.phpied.com/conditional-comments-block-downloads/ -->
    <!--[if IE]><![endif]-->

    <meta name="description" content="" />
    <meta name="author" content="" />

    <!--  Mobile Viewport Fix
          j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
    device-width : Occupy full width of the screen in its current orientation
    initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
    maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
    -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/defaults.css" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/grid.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" />

    <!-- For the less-enabled mobile browsers like Opera Mini -->
    <link rel="stylesheet" media="handheld" href="<?php bloginfo( 'stylesheet_directory' ); print "/css/handheld.css?v=1" ?>" />

    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="<?php bloginfo('template_url'); ?>/js/modernizr-1.5.min.js"></script>
    <?php wp_head(); ?>

  </head>

  <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

  <!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
  <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
  <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
  <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
    <div id="container">
      <header>
        <div class="row">
          <div class="column grid_3">
             <a href="/">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="logo" />
            </a>
          </div>
          <nav id="main_navigation" class="column grid_9">
            <ul>
              <!-- <li><a href="/hoc/">Send &amp; Receive</a></li> -->
              <li><a href="/support/">Support</a></li>
              <!-- <li><a href="/developer/">Developer</a></li> -->
              <li><a href="/blog/">Blog</a></li>
              <li><a href="/company/">Company</a></li>
              <li><a href="/contact/">Contact</a></li>
              <li><a href="http://www.twitter.com/hoccer"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="twitter"/></a></li>
              <li><a href="http://www.facebook.com/hoccer"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="facebook"/></a></li>
            </ul>
          </nav>
        </div>
      </header>
