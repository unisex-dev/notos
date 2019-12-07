<?php
// Funcion sidebar para WordPress.
function textdomain_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'unique-sidebar-id',
			'name' => __( 'Sidebar Derecho', 'textdomain' ),
			'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
		)
	);

	register_sidebar(
		array(
			'id' => 'sidebar-footer1',
			'name' => __( 'Footer 1', 'textdomain' ),
			'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="col-md-4 p-0">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'sidebar-footer2',
			'name' => __( 'Footer 2', 'textdomain' ),
			'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="col-md-4 p-0">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'sidebar-footer3',
			'name' => __( 'Footer 3', 'textdomain' ),
			'description' => __( 'A short description of the sidebar.', 'textdomain' ),
            'before_widget' => '<div class="col-md-4 p-0">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="text-light">',
            'after_title' => '</h3>'
		)
	);

    register_sidebar(
            array(
            'id' => 'shop',
            'name' => __( 'woocommerce', 'textdomain' ),
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );



	/* para crear mas sidebar solo debes repetir el codigo de arriba aca va un ejemplo
	 register_sidebar(
		array(
			'id' => 'unique-sidebar-id2',
			'name' => __( 'Sidebar nuevo', 'textdomain' ),
			'description' => __( 'A short description of the sidebar.', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	); */
// Aca registramos el sidebar para que aparezca.
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );
/**
* Fin Seccion
*/

?>
