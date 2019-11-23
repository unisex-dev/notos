<?php

function add_fechas_meta_boxes() {
  add_meta_box("fechas_contact_meta", "Fecha del Evento", "add_contact_details_fechas_meta_box", "eventos", "normal", "low");
}
function add_contact_details_fechas_meta_box()
{
  global $post;
  $custom = get_post_custom( $post->ID );
 
  ?>
  <style>.width99 {width:99%;}</style>
  <p>
    <label>Incluya la fecha del evento</label>
<br />
    <input type="date" name="fechas" value="<?= @$custom["fechas"][0] ?>" class="width99" />
    <br>
  <label>Hora de inicio evento</label>  
    <input type="text" placeholder="10:00 am - 12:00 am" name="horas" value="<?= @$custom["horas"][0] ?>" class="width99" />
  </p>
  <?php
}
/**
 * Save custom field data when creating/updating posts
 */
function save_fechas_custom_fields(){
  global $post;
 
  if ( $post )
  {
    update_post_meta($post->ID, "fechas", @$_POST["fechas"]);
    update_post_meta($post->ID, "horas", @$_POST["horas"]);
  }
}
add_action( 'admin_init', 'add_fechas_meta_boxes' );
add_action( 'save_post', 'save_fechas_custom_fields' );
/**
* Fin Seccion
*/
?>