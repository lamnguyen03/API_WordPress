<?php
/**
 * Header Options settings
 */

$wp_customize->add_section(
	'news_hub_header_options_section',
	array(
		'title' => esc_html__( 'Header Options', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Header Section Advertisement Image.
$wp_customize->add_setting(
	'news_hub_advertisement_image',
	array(
		'default'           => '',
		'sanitize_callback' => 'news_hub_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'news_hub_advertisement_image',
		array(
			'label'    => esc_html__( 'Advertisement Image', 'news-hub' ),
			'settings' => 'news_hub_advertisement_image',
			'section'  => 'news_hub_header_options_section',
		)
	)
);

// Header Advertisement Url.
$wp_customize->add_setting(
	'news_hub_advertisement_url',
	array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	'news_hub_advertisement_url',
	array(
		'label'    => esc_html__( 'Advertisement Url', 'news-hub' ),
		'settings' => 'news_hub_advertisement_url',
		'section'  => 'news_hub_header_options_section',
		'type'     => 'url',
	)
);
