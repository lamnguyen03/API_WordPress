<?php

/**
 * Theme Options Customizer.
 */

$wp_customize->add_panel(
	'news_hub_theme_options_panel',
	array(
		'title'    => esc_html__( 'Theme Options', 'news-hub' ),
		'priority' => 150,
	)
);

$theme_options_customizer = array( 'header-options', 'secondary-sidebar-position', 'breadcrumb', 'archive-options', 'sidebar-layout', 'pagination', 'single-post', 'footer', 'back-to-top' );

foreach ( $theme_options_customizer as $customizer ) {
	require get_template_directory() . '/inc/customizer/theme-options/' . $customizer . '.php';

}
