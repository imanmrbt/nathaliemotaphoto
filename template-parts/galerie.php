
<div class="front-galerie">
<div class="galerie1"><?php the_post_thumbnail();?></div>
<div class="galerie2 hover">
    <!--ouvre lightbox-->
    <a href="#<?php the_ID(); ?>"onclick="document.getElementById('<?php the_ID(); ?>').style.display='flex'"><img class="fullscreen"  src = "<?php echo get_template_directory_uri() . '/assets/images/icon_fullscreen.png'?>"></a>
 
    <a href="<?php the_permalink() ?>"><img class="eye" src = "<?php echo get_template_directory_uri() . '/assets/images/icon_eye.png'?>"></a>
    <p class="info"><?php the_field('reference');?></p>
    <p class="info2"><?php $categorie = 'categorie';
                $terms = get_the_terms(get_the_ID(), $categorie);
                foreach ($terms as $term) {
                    echo esc_html($term->name);
                }?></p></div>
</div>

<?php echo get_template_part('template-parts/lightbox');?>
    