<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="apple-touch-icon" href="/apple-touch-icon.png"><!-- 180×180 -->
<?php wp_head(); ?>
<?php get_template_part('partials/global', 'analytics'); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('partials/global', 'browser-notice'); ?>

<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<a id="skip-nav" class="skip-nav screen-reader-text" href="#content">Skip to main content</a>

<div class="global-container">
<?php get_template_part('partials/global', 'alert'); ?>
<?php get_template_part('partials/site', 'header'); ?>
