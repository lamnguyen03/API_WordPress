<?php

/**
 * Color Options
 */

// Site tagline color setting.
$wp_customize->add_setting(
	'news_hub_header_tagline',
	array(
		'default'           => '#404040',
		'sanitize_callback' => 'news_hub_sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'news_hub_header_tagline',
		array(
			'label'   => esc_html__( 'Site tagline Color', 'news-hub' ),
			'section' => 'colors',
		)
	)
);
