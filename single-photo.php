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
        <?php $categorie = 'categorie';
                $terms = get_the_terms(get_the_ID(), $categorie);
                echo 'Catégorie : ';
                foreach ($terms as $term) {
                    echo esc_html($term->name);
                }?><br>
		<?php $format = 'format';
                $terms = get_the_terms(get_the_ID(), $format);
                echo 'Format : ';
                foreach ($terms as $term) {
                    echo esc_html($term->name);
                }
            ?><br>
		 <?php $taxonomy = 'camera_type'; 
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
    <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
};

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<div class="photo-post-3">
<p>Cette photo vous intéresse ?</p>
<button onclick="openForm()">contact</button>

<?php
            $previous_post = get_previous_post();
            $next_post = get_next_post();

            if($next_post){
                echo '<div class="nav">'.get_the_post_thumbnail($next_post->ID,'thumbnail').
                '<span id="nav"><a href="'.get_permalink($previous_post).'"><img src = "'.get_template_directory_uri() . '/assets/images/prev.png"></a>
                <a href="'. get_permalink($next_post).'"><img src = "'.get_template_directory_uri() . '/assets/images/next.png"></a></span></div>';
            };
            if(!$next_post){
                echo '<div class="nav">'.get_the_post_thumbnail($previous_post->ID,'thumbnail').
                '<span id="nav"><a href="'.get_permalink($previous_post).'"><img src = "'.get_template_directory_uri() . '/assets/images/prev.png"></a>
                <a href="'. get_permalink($next_post).'"><img src = "'.get_template_directory_uri() . '/assets/images/next.png"></a></span></div>';
            };?>
    </div>

    <div class="galerie">
<?php 

  $photos = new WP_Query([
    'post_type' => 'photo',
    'posts_per_page' => 2 ,
    'orderby'=>'rand',
  ]);

    if($photos->have_posts()): 
      while($photos->have_posts()) : $photos->the_post();
        echo get_template_part('template-parts/galerie');
    	endwhile;
        wp_reset_postdata();
    endif; ?>
</div></div>

<?php get_footer(); ?>