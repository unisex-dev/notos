<?php

function add_paginas_categorias_meta_boxes()
{
global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'noticia-categoria.php' )
        {
            add_meta_box(
                'paginas_categorias_contact_meta', // $id
                'Categoria', // $title
                'add_contact_details_paginas_categorias_meta_box', // $callback
                'page', // $page
                'side', // $context
                'high'); // $priority
        }
    }
}
function add_contact_details_paginas_categorias_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );

  ?>

  <style>.width99 {width:99%;}</style>
  <p>
    <label>Nombre de la categoria en minuscula... si viene con espacio ej: "Lorem Ipsum" se escribe "lorem-ipsum":</label><br />
    <input type="text" name="slug-cat" id="slug-cat" class="width99" value="<?= @$custom["slug-cat"][0] ?>" />

  </p>

  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_paginas_categorias_custom_fields(){
  global $post;

  if ( $post )
  {
    update_post_meta($post->ID, "slug-cat", @$_POST["slug-cat"]);
  }
}
add_action('add_meta_boxes', 'add_paginas_categorias_meta_boxes');
add_action('rest_api_init', 'add_paginas_categorias_meta_boxes');
add_action( 'admin_init', 'add_paginas_categorias_meta_boxes' );
add_action( 'save_post', 'save_paginas_categorias_custom_fields' );
/**
* Fin Seccion
*/
?>
