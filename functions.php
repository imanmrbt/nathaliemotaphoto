<?php

function myScript() {
wp_enqueue_script( 'myScript', get_template_directory_uri() . '/assets/js/nathaliemota.js', array(), true );

}

function myStyle() {
wp_enqueue_style('myStyle', get_template_directory_uri() . '/assets/css/nathaliemota.css', array(), true, 'all');}


function register_my_menu(){
register_nav_menu('main', "Menu principal");
}



function nathaliemota_add_admin_pages() {
add_menu_page(__('Paramètres du thème nathaliemota', 'nathaliemota'),
__('nathaliemota', 'nathaliemota'),
'manage_options',
'nathaliemota-settings',
'nathaliemota_theme_settings',
'dashicons-admin-settings',
60); 
}

function nathaliemota_theme_settings() {
echo '<h1>'.esc_html( get_admin_page_title() ).'</h1>';
echo '<form action="options.php" method="post" name="nathaliemota_settings">';
echo '<div>';

settings_fields('nathaliemota_settings_fields');
do_settings_sections('nathaliemota_settings_section');
submit_button();

echo '</div>';
echo '</form>';
}

function nathaliemota_settings_register() {
register_setting('nathaliemota_settings_fields',
'nathaliemota_settings_fields', 'nathaliemota_settings_fields_validate');
add_settings_section('nathaliemota_settings_section',
__('Paramètres', 'nathaliemota'),
'nathaliemota_settings_section_introduction',
'nathaliemota_settings_section');
add_settings_field('nathaliemota_settings_field_introduction',
__('Introduction', 'nathaliemota'),
'nathaliemota_settings_field_introduction_output',
'nathaliemota_settings_section',
'nathaliemota_settings_section');
add_settings_field('nathaliemota_settings_field_phone_number',
__('Numéro de téléphone', 'nathaliemota'),
'nathaliemota_settings_field_phone_number_output',
'nathaliemota_settings_section',
'nathaliemota_settings_section');
add_settings_field('nathaliemota_settings_field_email',
__('Email', 'nathaliemota'),
'nathaliemota_settings_field_email_output',
'nathaliemota_settings_section',
'nathaliemota_settings_section');
}

function nathaliemota_settings_section_introduction() {
  echo __('Paramètrez les différentes options de votre thème nathaliemota.',
  'nathaliemota');
}

function nathaliemota_settings_fields_validate($inputs) {  
  if(isset($_POST) && !empty($_POST)):
    if(isset($_POST['nathaliemota_settings_field_introduction']) && !empty($_POST['nathaliemota_settings_field_introduction'])):
      update_option('nathaliemota_settings_field_introduction',
      $_POST['nathaliemota_settings_field_introduction']);
    endif;
    if(isset($_POST['nathaliemota_settings_field_phone_number']) && !empty($_POST['nathaliemota_settings_field_phone_number'])):
      update_option('nathaliemota_settings_field_phone_number',
      $_POST['nathaliemota_settings_field_phone_number']);
    endif;
    if(isset($_POST['nathaliemota_settings_field_email']) && !empty($_POST['nathaliemota_settings_field_email'])):
      update_option('nathaliemota_settings_field_email',
      $_POST['nathaliemota_settings_field_email']);
    endif;
  endif;

  return $inputs;
}

function nathaliemota_settings_field_introduction_output() {
  $value = get_option('nathaliemota_settings_field_introduction');

  echo '<input name="nathaliemota_settings_field_introduction" type="text" value="'.$value.'" />';
}

function nathaliemota_settings_field_phone_number_output() {
  $value = get_option('nathaliemota_settings_field_phone_number');

  echo '<input name="nathaliemota_settings_field_phone_number" type="text" value="'.$value.'" />';
}

function nathaliemota_settings_field_email_output() {
  $value = get_option('nathaliemota_settings_field_email');

  echo '<input name="nathaliemota_settings_field_email" type="text" value="'.$value.'" />';
}


add_theme_support( 'post-thumbnails' ); 


/**** Actions *****/

add_action( 'wp_enqueue_scripts', 'myScript' );
add_action( 'wp_enqueue_scripts', 'myStyle' );
add_action('admin_menu', 'nathaliemota_add_admin_pages', 10);
add_action('admin_init', 'nathaliemota_settings_register');
add_action('after_setup_theme', 'register_my_menu');

?>