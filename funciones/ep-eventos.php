<?php
/**
* Entrada Personalizada Encuentra
*/ 
add_action('init', 'create_redvine_eventos');
function create_redvine_eventos() 
{
  $labels = array(
    'name' => _x('Eventos', 'eventos'),
    'singular_name' => _x('eventos', 'eventos'),
    'add_new' => _x('Nuevo evento', 'caso'),
    'add_new_item' => __('Crear Nuevo Que es?'),
    'edit_item' => __('Editar Que es?'),
    'new_item' => __('Nuevo Que es?'),
    'view_item' => __('View Item'),
    'search_items' => __('Search Items'),
    'not_found' =>  __('No items found'),
    'not_found_in_trash' => __('No items found in Trash'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'menu_icon' => 'dashicons-thumbs-up',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('eventos',$args);
}

register_taxonomy( "eventos-categories", 
  array(  "eventos" ), 
  array(  "hierarchical" => true,
      "labels" => array('name'=>"Categorias Que es?",'add_new_item'=>"Agregar Nueva Categoria"), 
      "singular_label" => __( "Field" ), 
      "rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
                          'with_front' => false)
     ) 

);

/**
* Fin Seccion
*/ 
?>