<?php get_header(); ?>
<!-------------------------banner-------------------------------------------------------->

<main id="primary" class="site-main">
<h1 id="accueilh1" style="background-image:url(<?php $banners = new WP_Query
	(['post_type' => 'photo', 'posts_per_page' =>1 ,'orderby'=>'rand']);

    if($banners->have_posts()): 
      while($banners->have_posts()) : $banners->the_post();
        the_post_thumbnail_url();
    	endwhile;
        wp_reset_postdata();
    endif; ?>"><img id="accueiltitre" src="<? echo get_template_directory_uri() . '/assets/images/PHOTOGRAPHEEVENT.png' ?>"   alt="PHOTOGRAPHE EVENT"></h1>

<!-------------------------------------------------------------------------------------->


<?php
		// liste catégorie
		$taxonomy = 'categorie';
		$categories = get_terms($taxonomy, array('hide_empty' => false, )); 

		// liste formats
		$format = 'format';
		$formats = get_terms($format,array('hide_empty' => false,));
?>	


<form action="' . esc_url(home_url()) . '" method="get">
			
      <select id="categories" class="dropbtn" name="category">
					<option class="label" value="">CATÉGORIES</option>
					<?php 
						foreach ($categories as $category) :
						echo '<option class="select" value="' . esc_attr($category->slug) . '" >' . esc_html($category->name) . '</option>';
						endforeach;
					?>
	</select>

        
		<select class="dropbtn" id="formats" name="category">
			<option class="select" value="">FORMATS</option>
			<?php	
				foreach ($formats as $category) :
					echo '<option class="select" value="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</option>';
				endforeach;
			?>
		</select>
	
<!--	<select class="dropbtn" id="trier" name="category">
			<option class="label" >TRIER PAR</option>
			<option class="label" id="asc" value="date-asc">Plus ancien en premier</option>
			<option class="label" id="desc" value="date-desc">Plus récent en premier</option>
		</select>-->
	
			

<div class="dropdown" id="trier">
  <div class="dropbtn"><span>trier par</span><span>v</span></div>
  <div class="dropdown-content">
  <a href="#" id="asc">Plus ancien en premier</a>
  <a href="#" id="desc">Plus récent en premier</a>
  </div>
</div>
</form>


<div class="galerie">
<?php 

  $photos = new WP_Query([
    'post_type' => 'photo',
    'posts_per_page' => 8 ,
  ]);

    if($photos->have_posts()): 
      while($photos->have_posts()) : $photos->the_post();
        echo get_template_part('template-parts/galerie');
    	endwhile;
        wp_reset_postdata();
    endif; ?>
</div>

<div class="galerie-bouton">
	<button id="load-more-button">charger plus</button>
</div>



<?php get_footer(); ?>