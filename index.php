<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
  <?php wp_head(); ?>
</head>
<body>

<?php get_header(); ?>
	<main id="primary" class="site-main">

		<?php
		while ( is_home() && is_front_page() );
        while ( have_posts() && is_single()) :
            the_post();

            get_template_part( 'template-parts/content');

        endwhile; // End of the loop.

				?>
	</main><!-- #main -->
<?php get_footer(); ?>

	