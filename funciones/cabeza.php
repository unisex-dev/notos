<?php

/**Seccion de subida para el logo del sitio*/
function your_theme_new_customizer_settings($wp_customize) {
// seteo para el logo
$wp_customize->add_setting('your_theme_logo');

// Con esta funcion creas una entrada en el menu de administracion que te permite subir el logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');

/**Fin Seccion*/

?>