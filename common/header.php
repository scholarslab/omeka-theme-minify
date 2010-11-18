<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
  <title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>
  <meta name="description" content="<?php echo settings('description') ?>">
  <meta name="author" content="<? php echo settings('author'); ?>">
  
  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico and apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php echo src('favicon.ico', 'images'); ?>">
  <link rel="apple-touch-icon" href="<?php echo src('apple-touch-icon.png', 'images'); ?>">
  
  <!-- CSS: implied media="all" -->
  <?php 
    queue_css('style'); 
    queue_css('handheld', 'handheld'); 
    display_css();
  ?>
  
  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php echo js('libs/modernizer-1.6.min'); ?>
  
  <!-- RSS link -->
  <?php echo auto_discovery_link_tag(); ?>
  <!-- Include plugin hooks -->
  <?php echo plugin_header(); ?>
</head>
<body<?php echo isset($bodyclass) ? ' class="'.$bodyclass.'"' : ''; ?>>

<div id="container">
    <header>
       <?php echo public_nav_main(); ?>
    </header>
    
    <div id="main">
  
  
  
  