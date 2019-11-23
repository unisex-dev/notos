<?php


		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'twentynineteen' ),
					'shortName' => __( 'S', 'twentynineteen' ),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'twentynineteen' ),
					'shortName' => __( 'M', 'twentynineteen' ),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'twentynineteen' ),
					'shortName' => __( 'L', 'twentynineteen' ),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'twentynineteen' ),
					'shortName' => __( 'XL', 'twentynineteen' ),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
					    array(
					    'name' => 'Color n',
					    'color' => '#170b28'
					),
				        array(
					    'name' => 'Color o',
					    'color' => '#2d1650'
					),
						array(
					    'name' => 'Color t',
					    'color' => '#442178'
					),
					    array(
					    'name' => 'Color segunda o',
					    'color' => '#5a2ca0'
					),
						array(
					    'name' => 'Color s',
					    'color' => '#7137c8'
					),
						array(
					    'name' => 'Color Naranjo',
					    'color' => '#ff6900'
					),
						array(
					    'name' => 'Color Gris',
					    'color' => '#7c7c7d'
					),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

// Etiquetas
add_filter( 'get_terms_args', 'themeprefix_show_tags' );
// Mostrar Etiquetas
 function themeprefix_show_tags ( $args ) {
 if ( defined( 'DOING_AJAX' ) && DOING_AJAX && isset( $_POST['action'] ) && $_POST['action'] === 'get-tagcloud' ) {
 unset( $args['number'] );
 $args['hide_empty'] = 0;
 }
 return $args;
 }



