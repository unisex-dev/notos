<?php

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Homepage'){ 
    remove_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'inicio.php'){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}


function add_home_meta_boxes()
{
    global $post;

    if(!empty($post))
    {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if($pageTemplate == 'inicio.php' )
        {
            add_meta_box(
                'home_contact_meta', // $id
                'Contenido (solo para plantillas home)', // $title
                'add_contact_details_home_meta_box', // $callback
                'page', // $page
                'normal', // $context
                'low'); // $priority
        }
    }
}

function add_contact_details_home_meta_box()
{


  global $post;
  $custom = get_post_custom( $post->ID );
    ?>
  <style>.width99 {width:99%;}</style>

  <p>
    <label>Titulo Bienvenida:</label><br />
    <input type="text" name="bienvenida" id="bienvenida" class="width99" value="<?= @$custom["bienvenida"][0] ?>" />
    
  </p>
  
  <p>
    <label>Url Video:</label><br />
    <input type="url" name="video" id="video" class="width99" value="<?= @$custom["video"][0] ?>" />
    <small>Url Video:</small>
  </p>

  <p>
    <label>Titulo Voluntariado:</label><br />
    <input type="text" name="vol" id="vol" class="width99" value="<?= @$custom["vol"][0] ?>" />
    
  </p>

  <p>
    <label>Subtitulo Voluntariado:</label><br />
    <input type="text" name="vol2" id="vol2" class="width99" value="<?= @$custom["vol2"][0] ?>" />
    
  </p>

  <p>
    <label>Formulario Voluntariado:</label><br />
    <input type="textarea" name="formulariov" id="formulariov" class="width99" value="<?= @$custom["formulariov"][0] ?>" />
    
  </p>
  
  <?php
}

/**
 * Save custom field data when creating/updating posts
 */

function save_home_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "bienvenida", @$_POST["bienvenida"]);
    update_post_meta($post->ID, "video", @$_POST["video"]);
    update_post_meta($post->ID, "vol", @$_POST["vol"]);   
    update_post_meta($post->ID, "vol2", @$_POST["vol2"]);       
    update_post_meta($post->ID, "formulariov", @$_POST["formulariov"]);

  }
}
add_action( 'add_meta_boxes', 'add_home_meta_boxes' );
add_action( 'save_post', 'save_home_custom_fields' );

  /**
* Fin Seccion
*/