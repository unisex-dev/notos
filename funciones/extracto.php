<?php
/**
* limitador de extracto
*/
function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/**Fin Seccion*/
?>