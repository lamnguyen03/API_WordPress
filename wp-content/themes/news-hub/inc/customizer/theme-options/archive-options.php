<?php
/**
 * Blog / Archive Options
 */

$wp_customize->add_section(
	'news_hub_archive_page_options',
	array(
		'title' => esc_html__( 'Blog / Archive Pages Options', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'news_hub_excerpt_length',
	array(
		'default'           => 15,
		'sanitize_callback' => 'news_hub_sanitize_number_range',
	)
);

$wp_customize->add_control(
	'news_hub_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'news-hub' ),
		'section'     => 'news_hub_archive_page_options',
		'settings'    => 'news_hub_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 5,
			'max'  => 200,
			'step' => 1,
		),
	)
);

// Enable archive page category setting.
$wp_customize->add_setting(
	'news_hub_enable_archive_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_archive_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'news-hub' ),
			'settings' => 'news_hub_enable_archive_category',
			'section'  => 'news_hub_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page author setting.
$wp_customize->add_setting(
	'news_hub_enable_archive_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_archive_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'news-hub' ),
			'settings' => 'news_hub_enable_archive_author',
			'section'  => 'news_hub_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page date setting.
$wp_customize->add_setting(
	'news_hub_enable_archive_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_archive_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'news-hub' ),
			'settings' => 'news_hub_enable_archive_date',
			'section'  => 'news_hub_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable archive page comment setting.
$wp_customize->add_setting(
	'news_hub_enable_archive_comment',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_archive_comment',
		array(
			'label'    => esc_html__( 'Enable Comment', 'news-hub' ),
			'settings' => 'news_hub_enable_archive_comment',
			'section'  => 'news_hub_archive_page_options',
			'type'     => 'checkbox',
		)
	)
);
