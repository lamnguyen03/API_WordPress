<?php
/**
 * Footer copyright
 */

// Footer copyright
$wp_customize->add_section(
	'news_hub_footer_section',
	array(
		'title' => esc_html__( 'Footer Options', 'news-hub' ),
		'panel' => 'news_hub_theme_options_panel',
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'news-hub' ), '[the-year]', '[site-link]' );

// Footer copyright setting.
$wp_customize->add_setting(
	'news_hub_copyright_txt',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'news_hub_sanitize_html',
	)
);

$wp_customize->add_control(
	'news_hub_copyright_txt',
	array(
		'label'           => esc_html__( 'Copyright text', 'news-hub' ),
		'section'         => 'news_hub_footer_section',
		'type'            => 'textarea',
	)
);
