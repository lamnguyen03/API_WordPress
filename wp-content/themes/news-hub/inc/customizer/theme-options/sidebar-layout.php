<?php
/**
 * Sidebar settings.
 */

$wp_customize->add_section(
	'news_hub_sidebar_option',
	array(
		'title' => esc_html__( 'Sidebar Options', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Sidebar Option - Global Sidebar Position.
$wp_customize->add_setting(
	'news_hub_sidebar_position',
	array(
		'sanitize_callback' => 'news_hub_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_hub_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'news-hub' ),
		'section' => 'news_hub_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-hub' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-hub' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-hub' ),
		),
	)
);

// Sidebar Option - Post Sidebar Position.
$wp_customize->add_setting(
	'news_hub_post_sidebar_position',
	array(
		'sanitize_callback' => 'news_hub_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_hub_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'news-hub' ),
		'section' => 'news_hub_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-hub' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-hub' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-hub' ),
		),
	)
);

// Sidebar Option - Page Sidebar Position.
$wp_customize->add_setting(
	'news_hub_page_sidebar_position',
	array(
		'sanitize_callback' => 'news_hub_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'news_hub_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'news-hub' ),
		'section' => 'news_hub_sidebar_option',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'news-hub' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'news-hub' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'news-hub' ),
		),
	)
);
