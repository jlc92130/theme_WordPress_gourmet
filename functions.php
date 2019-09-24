<?php
add_theme_support( 'post-thumbnails' );
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'add_Main_Nav' );
function voyage_styles() {
  wp_register_style('normalize-styles', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css', array(), true);
  wp_enqueue_style('normalize-styles');
  wp_register_style('bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), true);
  wp_enqueue_style('bootstrap-style');
  wp_register_style('flexslider-style', get_template_directory_uri().'/css/flexslider.css', array(), true);
  wp_enqueue_style('flexslider-style');
  wp_register_style('main-style', get_template_directory_uri().'/css/main.css', array(), true);
  wp_enqueue_style('main-style');
}


add_action('init', 'my_custom_init');
function my_custom_init()
{
/* notre code PHP pour rajouter les custom post type */
}
register_post_type(
  'projet',
  array(
    'label' => 'Projets',
    'labels' => array(
      'name' => 'Projets',
      'singular_name' => 'Projet',
      'all_items' => 'Tous les projets',
      'add_new_item' => 'Ajouter un projet',
      'edit_item' => 'Éditer le projet',
      'new_item' => 'Nouveau projet',
      'view_item' => 'Voir le projet',
      'search_items' => 'Rechercher parmi les projets',
      'not_found' => 'Pas de projet trouvé',
      'not_found_in_trash'=> 'Pas de projet dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
);
register_post_type(
  'pics',
  array(
    'label' => 'Projets',
    'labels' => array(
      'name' => 'Pics',
      'singular_name' => 'Pics',
      'all_items' => 'Toutes les images',
      'add_new_item' => 'Ajouter une image',
      'edit_item' => 'Éditer une image',
      'new_item' => 'Nouvelle image',
      'view_item' => 'Voir l image',
      'search_items' => 'Rechercher parmi les images',
      'not_found' => 'Pas de images trouvé',
      'not_found_in_trash'=> 'Pas de image dans la corbeille'
      ),
    'public' => true,
    'capability_type' => 'post',
    'supports' => array(
      'title',
      'editor',
      'thumbnail'
    ),
    'has_archive' => true
  )
);


add_action( 'wp_enqueue_scripts', 'voyage_styles' );
function voyage_scripts() {
  wp_register_script('fontawesome-script', 'https://kit.fontawesome.com/6fee70888d.js', array(), true);
  wp_enqueue_script('fontawesome-script');
  wp_register_script('jquery-script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), true);
  wp_enqueue_script('jquery-script');
  wp_register_script('popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), true);
  wp_enqueue_script('popper-script');
  wp_register_script('bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), true);
  wp_enqueue_script('bootstrap-script');
  wp_register_script('flexslider-script', get_template_directory_uri().'/js/jquery.flexslider.js', array(), true);
  wp_enqueue_script('flexslider-script');
  wp_register_script('main-script', get_template_directory_uri().'/js/main.js', array(), true);
  wp_enqueue_script('main-script');
}
add_action( 'wp_footer', 'voyage_scripts' );
