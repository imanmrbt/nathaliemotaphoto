<!-- Lightbox -->
<?php 
$previous_post = get_previous_post();
if($previous_post) { $previous_lightbox = $previous_post->ID;}

$next_post = get_next_post();
if($next_post) { $next_lightbox = $next_post->ID;}

?>
    <div class="lightbox" id="<?php the_ID(); ?>" style="display:none;">
    <!-- Ferme lightbox -->
        <button onclick="document.getElementById('<?php the_ID(); ?>').style.display='none'">x</button>

    <!-- ferme cette lightbox et ouvre precedente -->
        <a id="lightbox-arrow" href="#<?php echo $previous_lightbox; ?>" onclick="document.getElementById('<?php echo $previous_lightbox; ?>').style.display='flex', document.getElementById('<?php the_ID(); ?>').style.display='none'"><?php if($previous_post){echo'←precedante';}?></a>
        
        <img id=lightbox-img src="<?= the_post_thumbnail_url();?>">
    
        <!-- ferme cette lightbox et ouvre precedente -->
        <a id="lightbox-arrow" href="#<?php echo $next_lightbox; ?>" onclick="document.getElementById('<?php echo $next_lightbox; ?>').style.display='flex', document.getElementById('<?php the_ID(); ?>').style.display='none'"><?php if($next_post){echo'suivante→';}?></a>
    <p id="lightbox-info"><?php the_field('reference');?></p> <p id="lightbox-info2"><?php $categorie = 'categorie';
                $terms = get_the_terms(get_the_ID(), $categorie);
                foreach ($terms as $term) {
                    echo esc_html($term->name);
                }?></p>
    
    
            </div>