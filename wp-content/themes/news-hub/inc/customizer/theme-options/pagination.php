<?php
/**
 * Pagination setting
 */

// Pagination setting.
$wp_customize->add_section(
	'news_hub_pagination',
	array(
		'title' => esc_html__( 'Pagination', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

// Pagination enable setting.
$wp_customize->add_setting(
	'news_hub_pagination_enable',
	array(
		'default'           => true,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_pagination_enable',
		array(
			'label'    => esc_html__( 'Enable Pagination.', 'news-hub' ),
			'settings' => 'news_hub_pagination_enable',
			'section'  => 'news_hub_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Style.
$wp_customize->add_setting(
	'news_hub_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'news_hub_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_hub_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Style', 'news-hub' ),
		'section'         => 'news_hub_pagination',
		'type'            => 'select',
		'choices'         => array(
			'default'  => __( 'Default (Older/Newer)', 'news-hub' ),
			'numeric'  => __( 'Numeric', 'news-hub' ),
		),
		'active_callback' => function( $control ) {
			return ( $control->manager->get_setting( 'news_hub_pagination_enable' )->value() );
		},
	)
);
