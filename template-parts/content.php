<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nataliemota
 */

?>

<article id="post-content">
	<?php include('photopost.php')?>
	<div class="titre">
		<?php
		if ( is_singular() ) :
			echo '<h2 class="entry-title">' . $oeuvres[0]['titre']. '</h2>';
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
		<?php echo 'reference: '.$oeuvres[0]['reference'].
		 '<br>format: '.$oeuvres[0]['format'].
		 '<br>type: '.$oeuvres[0]['type'].
		 '<br>année' .$oeuvres[0]['annee']
		?>

	</div>
     
	<div class="test">
	<?php echo $oeuvres[0]['oeuvre']?>
	</div>

<div class="test2">
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
<!--
https://developer.wordpress.org/reference/functions/wp_insert_post/
https://wordpress.stackexchange.com/questions/290438/add-an-array-as-post-content-dynamically

echo '<div id="img-oeuvre">'.$oeuvres[0]['oeuvre'].'</div>
<div id="contenu-oeuvre">
<h1>'.$oeuvres[0]['titre'].'</h1>
<p class="description">'.$oeuvres[0]['auteur'].'</p>
<p class="description-complete">'.$oeuvres[0]['texte'].'</p>
</div>';




$args = array(
'post_type' => 'characters',
'posts_per_page' => -1,
'meta_key'  => '_main_char_field',
'orderby'   => 'meta_value_num',

);
$characters_query = new WP_Query($args);
-->