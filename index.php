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

	