<?php
/**
 * Single Post Options
 */

$wp_customize->add_section(
	'news_hub_single_page_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Enable single post category setting.
$wp_customize->add_setting(
	'news_hub_enable_single_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_single_category',
		array(
			'label'    => esc_html__( 'Enable Category', 'news-hub' ),
			'settings' => 'news_hub_enable_single_category',
			'section'  => 'news_hub_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post author setting.
$wp_customize->add_setting(
	'news_hub_enable_single_author',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_single_author',
		array(
			'label'    => esc_html__( 'Enable Author', 'news-hub' ),
			'settings' => 'news_hub_enable_single_author',
			'section'  => 'news_hub_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post date setting.
$wp_customize->add_setting(
	'news_hub_enable_single_date',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_single_date',
		array(
			'label'    => esc_html__( 'Enable Date', 'news-hub' ),
			'settings' => 'news_hub_enable_single_date',
			'section'  => 'news_hub_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post tag setting.
$wp_customize->add_setting(
	'news_hub_enable_single_tag',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_single_tag',
		array(
			'label'    => esc_html__( 'Enable Post Tag', 'news-hub' ),
			'settings' => 'news_hub_enable_single_tag',
			'section'  => 'news_hub_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Enable single post related Posts setting.
$wp_customize->add_setting(
	'news_hub_enable_single_post_related_posts',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_enable_single_post_related_posts',
		array(
			'label'    => esc_html__( 'Enable Related posts', 'news-hub' ),
			'settings' => 'news_hub_enable_single_post_related_posts',
			'section'  => 'news_hub_single_page_options',
			'type'     => 'checkbox',
		)
	)
);

// Single post related Posts title label.
$wp_customize->add_setting(
	'news_hub_related_posts_title',
	array(
		'default'           => __( 'Related Posts', 'news-hub' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_hub_related_posts_title',
	array(
		'label'           => esc_html__( 'Related Posts Title', 'news-hub' ),
		'section'         => 'news_hub_single_page_options',
		'settings'        => 'news_hub_related_posts_title',
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'news_hub_enable_single_post_related_posts' )->value() );
		},
	)
);
