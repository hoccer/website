<!doctype html>
<html lang="en" class="no-js">
  <head>

    <title></title>
    <meta charset="utf-8" />

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

    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); print "/css/defaults.css" ?>" />
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); print "/css/grid.css" ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

    <!-- For the less-enabled mobile browsers like Opera Mini -->
    <link rel="stylesheet" media="handheld" href="<?php bloginfo( 'stylesheet_directory' ); print "/css/handheld.css?v=1" ?>" />

    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <script src="js/modernizr-1.5.min.js"></script>

  </head>

  <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

  <!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
  <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
  <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
  <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->
      <header>
        <div class="row">
          <div class="column grid_3">
            <img src="images/logo.jpg" alt="logo" />
          </div>
          <nav id="main_navigation" class="column grid_9">
            <ul>
              <li><a href="#">Send &amp; Receive</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Developer</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Company</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">t</a></li>
              <li><a href="#">f</a></li>
            </ul>
          </nav>
        </div>
      </header>