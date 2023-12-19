<?php

function myScript() {
wp_enqueue_script( 'myScript', get_template_directory_uri() . '/custom.js', array(), true );

}
add_action( 'wp_enqueue_scripts', 'myScript' );

//??????????register header & footer here???????

function register_my_menu(){
   register_nav_menu('main', "Menu principal");
}
add_action('after_setup_theme', 'register_my_menu');


/*
function nathaliemota_add_admin_pages() {
    add_menu_page(__('Paramètres du thème nathaliemota',
    'nathaliemota'),
    __('nathaliemota',
    'nathaliemota'),
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
    'nathaliemota_settings_fields',
    'nathaliemota_settings_fields_validate');
    add_settings_section('nathaliemota_settings_section',
    __('Paramètres',
    'nathaliemota'),
    'nathaliemota_settings_section_introduction',
    'nathaliemota_settings_section');
    add_settings_field('nathaliemota_settings_field_introduction',
    __('Introduction',
    'nathaliemota'),
    'nathaliemota_settings_field_introduction_output',
    'nathaliemota_settings_section',
    'nathaliemota_settings_section');
    add_settings_field('nathaliemota_settings_field_phone_number',
    __('Numéro de téléphone',
    'nathaliemota'),
    'nathaliemota_settings_field_phone_number_output',
    'nathaliemota_settings_section',
    'nathaliemota_settings_section');
    add_settings_field('nathaliemota_settings_field_email',
    __('Email',
    'nathaliemota'),
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

  function nathaliemota_register_custom_post_types() {
    $labels_photos = array(
      'menu_name'             => __('Photos',
    'nathaliemota'),
    
      'name_admin_bar'        => __('Photo',
    'nathaliemota'),
    
      'add_new_item'          => __('Ajouter un nouvel Photo',
    'nathaliemota'),
    
      'new_item'              => __('Nouvel Photo',
    'nathaliemota'),
    
      'edit_item'             => __('Modifier la Photo',
    'nathaliemota'),
    
    );

    $args_photos = array(
      'label'                 => __('Photos',
    'nathaliemota'),
    
      'description'           => __('Photos',
    'nathaliemota'),
    
      'labels'                => $labels_photos,
    
      'supports'              => array('title',
    'thumbnail',
    'excerpt',
    'editor'),
    
      'hierarchical'          => false,
    
      'public'                => true,
    
      'show_ui'               => true,
    
      'show_in_menu'          => true,
    
      'menu_position'         => 40,
    
      'show_in_admin_bar'     => true,
    
      'show_in_nav_menus'     => true,
    
      'can_export'            => true,
    
      'has_archive'           => true,
    
      'exclude_from_search'   => false,
    
      'publicly_queryable'    => true,
    
      'capability_type'       => 'post',
    
      'menu_icon'   					=> 'dashicons-drumstick',
    
    );

    register_post_type('cif_photos',
    $args_photos);
  }

  function nathaliemota_register_taxonomies() {
    $labels = array(
      'name'              => __( 'Categories' ),
    
      'singular_name'     => __( 'Categorie' ),
    
      'search_items'      => __( 'Rechercher une Categorie' ),
    
      'all_items'         => __( 'Toutes les Categories' ),
    
      'parent_item'       => __( 'Parent Categorie' ),
    
      'parent_item_colon' => __( 'Parent Categorie:' ),
    
      'edit_item'         => __( 'Modifier une Categorie' ),
    
      'update_item'       => __( 'Mettre à jour une Categorie' ),
    
      'add_new_item'      => __( 'Ajouter une nouvelle Categorie' ),
    
      'new_item_name'     => __( 'Nouvelle Categorie' ),
    
      'menu_name'         => __( 'Categorie' )
    );

    $args = array(
      'hierarchical'      => true,
    
      'labels'            => $labels,
    
      'show_ui'           => true,
    
      'show_admin_column' => true,
    
      'query_var'         => true,
    
      'show_in_rest'      => true,
    
      'rewrite'           => array( 'slug' => 'categorie' )
    );

    register_taxonomy('categorie',
    array('photos'),
    $args);
    
    $labels = array(
      'name'              => __( 'Formats' ),
    
      'singular_name'     => __( 'Format' ),
    
      'search_items'      => __( 'Rechercher un Format' ),
    
      'all_items'         => __( 'Tous les Formats' ),
    
      'parent_item'       => __( 'Parent Format' ),
    
      'parent_item_colon' => __( 'Parent Format:' ),
    
      'edit_item'         => __( 'Modifier un Format' ),
    
      'update_item'       => __( 'Mettre à jour un Format' ),
    
      'add_new_item'      => __( 'Ajouter un nouveau Format' ),
    
      'new_item_name'     => __( 'Nouveau Format' ),
    
      'menu_name'         => __( 'Format' )
    );

    $args = array(
      'hierarchical'      => true,
    
      'labels'            => $labels,
    
      'show_ui'           => true,
    
      'show_admin_column' => true,
    
      'query_var'         => true,
    
      'show_in_rest'      => true,
    
      'rewrite'           => array( 'slug' => 'format' )
    );

	  register_taxonomy('format',
    array('photos'),
    $args);
  }

  function nathaliemota_request_photos() {
    $args = array(
      'post_type' => 'photos',
    
      'posts_per_page' => 12
    );

    $query = new WP_Query($args);

    if($query->have_posts()):
      $response = $query;
    else:
      $response = false;
    endif;

    wp_send_json($response);
    wp_die();
  }


  function register_my_menu(){
    register_nav_menu('main', "Menu principal");
 }

 

  /***** Actions ****
  add_action('admin_menu',
'nathaliemota_add_admin_pages',
10);
  add_action('admin_init',
'nathaliemota_settings_register');
  add_action('init',
'nathaliemota_register_custom_post_types',
11);
  add_action('init',
'nathaliemota_register_taxonomies');
  add_action('wp_ajax_request_photos',
'nathaliemota_request_photos');
  add_action('wp_ajax_nopriv_request_photos',
'nathaliemota_request_photos');
 add_action('after_setup_theme', 'register_my_menu');
*/
?>