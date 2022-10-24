<?php
// Home Page Customizer panel.
$wp_customize->add_panel(
	'news_hub_frontpage_panel',
	array(
		'title'    => esc_html__( 'Frontpage Sections', 'news-hub' ),
		'priority' => 140,
	)
);

$customizer_settings = array( 'breaking-news', 'banner', 'recent-posts', 'subscription' );

foreach ( $customizer_settings as $customizer ) {

	require get_template_directory() . '/inc/customizer/frontpage-customizer/' . $customizer . '.php';

}
