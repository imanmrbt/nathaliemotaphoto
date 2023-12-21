<?php get_header(); ?>
    <div class ="container">
        
<article id="post-content">
	<div class="photo-post-1">
		<?php
		if ( is_singular() ) :
			echo '<h2>' . get_the_title() . ' </h2>';
		else :
			the_title( '<h2><a href="  rel="bookmark"> </a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
		<?php echo 'reference: reference'?><br>
        <?php echo 'catégorie:'; $cat = get_the_category(); echo $cat[0]->cat_name;?><br>
		<?php $format = 'format';
                $terms = get_the_terms(get_the_ID(), $format);
                echo 'Format : ';
                foreach ($terms as $term) {
                    echo esc_html($term->name);
                }
            ?><br>
		 <?php $taxonomy = 'camera_type'; // Remplacez par le nom de la taxonomie que vous souhaitez afficher
                $terms = get_the_terms(get_the_ID(), $taxonomy);
                echo 'types : ';
                foreach ($terms as $term) {
                    echo '<a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a> ';
                }
            ?><br>
        <?php echo 'date:' . get_the_date();
		?>
        	


	</div>
     
	<div class="photo-post-2">
<img class= "photo-post-image" src  = "<?php echo the_post_thumbnail_url()?>">

    </div>

<div class="photo-post-3">
    <?php echo get_previous_post_link() ?>
    <?php echo get_next_post_link() ?>
<!-- fleche <a href= et photo en hover -->

	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
};

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<p>Cette photo vous intéresse ?</p>
<button onclick="openForm()">contact</button>
</div>
<div>Vous aimerez AUSSI</div>

</article>
        <?php get_template_part('section','content'); ?>
    </div>
<?php get_footer(); ?>
 