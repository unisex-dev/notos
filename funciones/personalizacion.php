<?php
function input_contacto( $wp_customize ) {
  $wp_customize->add_panel( 'contacto_input', array(
    'title' => __( 'Contacto ', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));

  // Section para Datos 
  $wp_customize->add_section( 'contacto_seccion' , array(
    'title' => __( 'Datos ', 'textdomain' ),
    'panel' => 'contacto_input',
    'priority' => 2,
    'capability' => 'edit_theme_options',
  ));

  // Descripcion
  $wp_customize->add_setting( 'descripcion', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('descripcion', array(
    'label' => __( 'Descripcion', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 1,
    'type' => 'textarea',
  ));

  // Direccion
  $wp_customize->add_setting( 'direccion', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('direccion', array(
    'label' => __( 'Direccion', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 2,
    'type' => 'text',
  ));

  // Telefono
  $wp_customize->add_setting( 'telefono', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('telefono', array(
    'label' => __( 'Telefono', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 3,
    'type' => 'text',
  ));

  // Horario
  $wp_customize->add_setting( 'horario', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('horario', array(
    'label' => __( 'Horario', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 4,
    'type' => 'text',
  ));  

  // Email
  $wp_customize->add_setting( 'email', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('email', array(
    'label' => __( 'Email', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 5,
    'type' => 'email',
  ));
    // Email
  $wp_customize->add_setting( 'gmaps', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('gmaps', array(
    'label' => __( 'gmaps', 'textdomain' ),
    'section' => 'contacto_seccion',
    'priority' => 6,
    'type' => 'textarea',
  ));   
}
add_action( 'customize_register', 'input_contacto' );

/**Fin Seccion*/


function my_customize_register( $wp_customize ) {
  $wp_customize->add_panel( 'my_custom_options', array(
    'title' => __( 'Mis Opciones', 'textdomain' ),
    'priority' => 160,
    'capability' => 'edit_theme_options',
  ));
 
  
 
  // Section para Redes Sociales
  $wp_customize->add_section( 'social_section' , array(
    'title' => __( 'Redes Sociales', 'textdomain' ),
    'panel' => 'my_custom_options',
    'priority' => 1,
    'capability' => 'edit_theme_options',
  ));
 
 
  //Redes Sociales: Facebook
  $wp_customize->add_setting( 'my_facebook_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_facebook_url', array(
    'label' => __( 'Facebook URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 1,
    'type' => 'text',
  ));

  //Redes Sociales: Twitter
  $wp_customize->add_setting( 'my_twitter_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_twitter_url', array(
    'label' => __( 'Twitter URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 2,
    'type' => 'text',
  ));

  //Redes Sociales: Linkedin
  $wp_customize->add_setting( 'my_linkedin_url', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('my_linkedin_url', array(
    'label' => __( 'Linkdin URL', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 3,
    'type' => 'text',
  ));

  //Redes Sociales: Youtube
  $wp_customize->add_setting( 'youtube', array(
    'type' => 'option',
    'capability' => 'edit_theme_options',
  ));
 
  $wp_customize->add_control('youtube', array(
    'label' => __( 'Youtube', 'textdomain' ),
    'section' => 'social_section',
    'priority' => 4,
    'type' => 'text',
  ));
}
add_action( 'customize_register', 'my_customize_register' );


/**Fin Seccion*/
?>