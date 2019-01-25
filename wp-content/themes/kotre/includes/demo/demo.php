<?php
/**
 * Demo configuration
 *
 * @package Kotre
 */

$config = array(
	'static_page'    => 'home',
	'posts_page'     => 'blog',
	'menu_locations' => array(
		'primary' => 'main-menu',
		'social'  => 'social-menu',
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Default (Blog)', 'kotre' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/default/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/default/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/default/customizer.dat',
			'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ) . 'includes/demo/demo-content/default/default.png',
			'preview_url'                => 'https://wpcapsules.com/demo/kotre/default/',
		),

		array(
			'import_file_name'             => esc_html__( 'Gutenberg', 'kotre' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/gutenberg/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/gutenberg/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/gutenberg/customizer.dat',
			'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ) . 'includes/demo/demo-content/gutenberg/gutenberg.png',
			'preview_url'                => 'https://wpcapsules.com/demo/kotre/gutenberg/',
		),

		array(
			'import_file_name'             => esc_html__( 'Elementor', 'kotre' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/elementor/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/elementor/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/elementor/customizer.dat',
			'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ) . 'includes/demo/demo-content/elementor/elementor.png',
			'preview_url'                => 'https://wpcapsules.com/demo/kotre/elementor/',
		),

		array(
			'import_file_name'             => esc_html__( 'WooCommerce Gutenberg', 'kotre' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-gutenberg/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-gutenberg/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-gutenberg/customizer.dat',
			'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ) . 'includes/demo/demo-content/store-gutenberg/store-gutenberg.png',
			'preview_url'                => 'https://wpcapsules.com/demo/kotre/store-gutenberg/',
		),

		array(
			'import_file_name'             => esc_html__( 'WooCommerce Elementor', 'kotre' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-elementor/content.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-elementor/widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'includes/demo/demo-content/store-elementor/customizer.dat',
			'import_preview_image_url'   => trailingslashit( get_template_directory_uri() ) . 'includes/demo/demo-content/store-elementor/store-elementor.png',
			'preview_url'                => 'https://wpcapsules.com/demo/kotre/store-elementor/',
		),
		
	),
);

Kotre_Demo::init( apply_filters( 'Kotre_Demo_filter', $config ) );
