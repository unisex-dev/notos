<?php
//Función que carga las hojas de estilo del tema
function estilo_del_sitio() { 
 
	//Registrando estilos
	wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.4/css/all.css');
    wp_register_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css');
    wp_register_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.css');      
	wp_register_style('theme-style', get_stylesheet_uri(), '', '1.0', 'all');
	//Cargando estilos
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesome' );
    wp_enqueue_style( 'lightbox' );
    wp_enqueue_style( 'swiper' );    
	wp_enqueue_style( 'theme-style' );
	
}
//Asociamos la función a la acción wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'estilo_del_sitio');
/**
* Fin Seccion
*/


// Función que carga las jquery u otro script del tema
function my_init() {
// El primer paso es usar wp_register_script para registrar el script que queremos cargar. aquí sí usamos *get_template_directory_uri()*
wp_register_script( '1', 'https://code.jquery.com/jquery-3.3.1.min.js');
wp_register_script( '2', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js' );
wp_register_script( '3','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js');
wp_register_script( '4','https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js');
wp_register_script( '5','https://unpkg.com/scrollreveal@4.0.0-beta.6');
wp_register_script( '6','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js');

wp_register_script( '7', get_template_directory_uri() . '/js/main.js' );
// Una vez que registramos el script debemos colocarlo en la cola de WordPress (orden)
wp_enqueue_script( '1' );
wp_enqueue_script( '2' );
wp_enqueue_script( '3' );
wp_enqueue_script( '4' );
wp_enqueue_script( '5' );
wp_enqueue_script( '6' );
wp_enqueue_script( '7' );
}

// Agregamos la función de los scrip a la lista de cargas de WordPress al poner  wp_enqueue_scripts carga segun norma wordpress si pones wp_head o wp footer cargan el el header o el footer.
add_action('wp_footer', 'my_init');
add_action('wp_enqueue_scripts', 'lyza_force_compress');
function lyza_force_compress()
{
    global $compress_scripts, $concatenate_scripts;
    $compress_scripts = 1;
    $concatenate_scripts = 1;
    define('ENFORCE_GZIP', true);

    wp_enqueue_script( '1' );
    wp_enqueue_script( '2' );
    wp_enqueue_script( '3' );
    wp_enqueue_script( '4' );
    wp_enqueue_script( '5' );
    wp_enqueue_script( '6' );
    wp_enqueue_script( '7' );    
}

/**
* Fin Seccion
*/

?>