<?php
/**
 * Adore Themes Customizer
 *
 * @package News Hub
 *
 * Banner Section
 */

$wp_customize->add_section(
	'news_hub_banner_section',
	array(
		'title' => esc_html__( 'Banner Section', 'news-hub' ),
		'panel' => 'news_hub_frontpage_panel',
	)
);

// Banner enable setting.
$wp_customize->add_setting(
	'news_hub_banner_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_banner_section_enable',
		array(
			'label'    => esc_html__( 'Enable Banner Section', 'news-hub' ),
			'type'     => 'checkbox',
			'settings' => 'news_hub_banner_section_enable',
			'section'  => 'news_hub_banner_section',
		)
	)
);

// banner content type settings.
$wp_customize->add_setting(
	'news_hub_banner_content_type',
	array(
		'default'           => 'post',
		'sanitize_callback' => 'news_hub_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_hub_banner_content_type',
	array(
		'label'           => esc_html__( 'Content type:', 'news-hub' ),
		'description'     => esc_html__( 'Choose where you want to render the content from.', 'news-hub' ),
		'section'         => 'news_hub_banner_section',
		'type'            => 'select',
		'active_callback' => 'news_hub_if_banner_enabled',
		'choices'         => array(
			'post'     => esc_html__( 'Post', 'news-hub' ),
			'category' => esc_html__( 'Category', 'news-hub' ),
		),
	)
);

for ( $i = 1; $i <= 4; $i++ ) {
	// banner post setting.
	$wp_customize->add_setting(
		'news_hub_banner_post_' . $i,
		array(
			'sanitize_callback' => 'news_hub_sanitize_dropdown_pages',
		)
	);

	$wp_customize->add_control(
		'news_hub_banner_post_' . $i,
		array(
			'label'           => sprintf( esc_html__( 'Post %d', 'news-hub' ), $i ),
			'section'         => 'news_hub_banner_section',
			'type'            => 'select',
			'choices'         => news_hub_get_post_choices(),
			'active_callback' => 'news_hub_banner_section_content_type_post_enabled',
		)
	);

}

// banner category setting.
$wp_customize->add_setting(
	'news_hub_banner_category',
	array(
		'sanitize_callback' => 'news_hub_sanitize_select',
	)
);

$wp_customize->add_control(
	'news_hub_banner_category',
	array(
		'label'           => esc_html__( 'Category', 'news-hub' ),
		'section'         => 'news_hub_banner_section',
		'type'            => 'select',
		'choices'         => news_hub_get_post_cat_choices(),
		'active_callback' => 'news_hub_banner_section_content_type_category_enabled',
	)
);

/*========================Active Callback==============================*/
function news_hub_if_banner_enabled( $control ) {
	return $control->manager->get_setting( 'news_hub_banner_section_enable' )->value();
}
function news_hub_banner_section_content_type_post_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_hub_banner_content_type' )->value();
	return news_hub_if_banner_enabled( $control ) && ( 'post' === $content_type );
}
function news_hub_banner_section_content_type_category_enabled( $control ) {
	$content_type = $control->manager->get_setting( 'news_hub_banner_content_type' )->value();
	return news_hub_if_banner_enabled( $control ) && ( 'category' === $content_type );
}
