<?php
/**
 * Back To Top settings
 */

$wp_customize->add_section(
	'news_hub_back_to_top_section',
	array(
		'title' => esc_html__( 'Scroll Up ( Back To Top )', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Scroll to top enable setting.
$wp_customize->add_setting(
	'news_hub_enable_scroll_to_top',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_scroll_to_top',
		array(
			'label'    => esc_html__( 'Enable scroll to top.', 'news-hub' ),
			'settings' => 'news_hub_enable_scroll_to_top',
			'section'  => 'news_hub_back_to_top_section',
			'type'     => 'checkbox',
		)
	)
);
