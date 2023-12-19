<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
</head>
<body>

<?php get_header(); ?>
	<main id="primary" class="site-main">
<h1 class="wp-block-heading" id="accueilh1">PHOTOGRAPHE EVENT</h1>

<div class="dropdown" id= "categories" style="float:left;">
  <button class="dropbtn"><span>categorie</span><span>x</span></button>
  <div class="dropdown-content" style="left:0;">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>

<div class="dropdown" id= "formats" style="float:left;">
  <button class="dropbtn"><span>formats</span><span>x</span></button>
  <div class="dropdown-content" style="left:0;">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>

<div class="dropdown" id="trier">
  <button class="dropbtn"><span>trier par</span><span>x</span></button>
  <div class="dropdown-content" style="left:0;">
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  </div>
</div>

<div class="galerie">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-0.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-1.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-2.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-3.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-4.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-5.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-6.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-7.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-8.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-9.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-10.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-11.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-12.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-13.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-14.jpeg'?>">
<img src = "<?php echo get_template_directory_uri() . '/assets/images/nathalie-15.jpeg'?>">
</div>

<?php get_footer(); ?>