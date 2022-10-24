<?php
/**
 * Secondary Sidebar settings
 */

$wp_customize->add_section(
	'news_hub_secondary_sidebar_option',
	array(
		'title' => esc_html__( 'Secondary Sidebar Position', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Secondary Sidebar Option - Sidebar Position.
$wp_customize->add_setting(
	'news_hub_secondary_sidebar_position',
	array(
		'sanitize_callback' => 'news_hub_sanitize_select',
		'default'           => 'secondary-right-position',
	)
);

$wp_customize->add_control(
	'news_hub_secondary_sidebar_position',
	array(
		'label'   => esc_html__( 'Secondary Sidebar Position', 'news-hub' ),
		'section' => 'news_hub_secondary_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'secondary-right-position' => esc_html__( 'Shift Right Position', 'news-hub' ),
			'secondary-left-position'  => esc_html__( 'Shift Left Position', 'news-hub' ),
		),
	)
);
