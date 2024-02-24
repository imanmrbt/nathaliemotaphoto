<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Nathalie Mota Photo</title>
    <?php wp_head();?>
</head>
<body>



<header>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Logo-1.png" alt="logo">
<nav id="navigation">
   <?php wp_nav_menu(array('theme_location' => 'main')); ?>
</nav>

<div class="form-popup" id="myForm"> 
    <div class= "form-header">
 <button id ="btn">X</button>
  </div>
  <form action="/action_page.php" class="form-container">
 
    <label for="nom"><b>Nom</b></label>
    <input type="text" placeholder="nom" name="nom" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="ref"><b>Ref. Photo</b></label>
    <input type="text" placeholder="Ref photo" value=" <?php the_field('reference') ;?>" name="ref">

    <label for="message"><b>Message</b></label>
    <input type="message" class ="message" placeholder="message" name="message">

    <button type="submit" class="btn">Envoyer</button>
    
  </form>
</div>
</header>
