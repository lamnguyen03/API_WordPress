<?php
/**
 * Adore Themes Customizer
 *
 * @package News Hub
 *
 * Subscription Section
 */

$wp_customize->add_section(
	'news_hub_subscription_section',
	array(
		'title'       => esc_html__( 'Subscription Section', 'news-hub' ),
		'description' => sprintf( esc_html__( '%1$sJetpack%2$s should be active and site should be connected to WordPress.com for this section to work.', 'news-hub' ), '<a target="_blank" href="https://wordpress.org/plugins/jetpack">', '</a>' ),
		'panel'       => 'news_hub_frontpage_panel',
	)
);

// Subscription section enable settings.
$wp_customize->add_setting(
	'news_hub_subscription_section_enable',
	array(
		'default'           => false,
		'sanitize_callback' => 'news_hub_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new News_Hub_Toggle_Checkbox_Custom_control(
		$wp_customize,
		'news_hub_subscription_section_enable',
		array(
			'label'    => esc_html__( 'Enable Subscription Section', 'news-hub' ),
			'type'     => 'checkbox',
			'section'  => 'news_hub_subscription_section',
			'settings' => 'news_hub_subscription_section_enable',
		)
	)
);

// Subscription bg image.
$wp_customize->add_setting(
	'news_hub_subscription_bg_image',
	array(
		'default'           => '',
		'sanitize_callback' => 'news_hub_sanitize_image',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'news_hub_subscription_bg_image',
		array(
			'label'           => esc_html__( 'Background Image', 'news-hub' ),
			'section'         => 'news_hub_subscription_section',
			'settings'        => 'news_hub_subscription_bg_image',
			'active_callback' => 'news_hub_if_subscription_enabled',
		)
	)
);

// Subscription title settings.
$wp_customize->add_setting(
	'news_hub_subscription_title',
	array(
		'default'           => __( 'Subscribe To Our Newsletter', 'news-hub' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_hub_subscription_title',
	array(
		'label'           => esc_html__( 'Title', 'news-hub' ),
		'section'         => 'news_hub_subscription_section',
		'active_callback' => 'news_hub_if_subscription_enabled',
		'settings'        => 'news_hub_subscription_title',
	)
);

$wp_customize->selective_refresh->add_partial(
	'news_hub_subscription_title',
	array(
		'selector'            => '.newsletter-section h3.newsletter-title',
		'settings'            => 'news_hub_subscription_title',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'news_hub_subscription_partial_title',
	)
);

// Subscription subtitle settings.
$wp_customize->add_setting(
	'news_hub_subscription_subtitle',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_hub_subscription_subtitle',
	array(
		'label'           => esc_html__( 'Subtitle', 'news-hub' ),
		'section'         => 'news_hub_subscription_section',
		'active_callback' => 'news_hub_if_subscription_enabled',
		'settings'        => 'news_hub_subscription_subtitle',
	)
);

$wp_customize->selective_refresh->add_partial(
	'news_hub_subscription_subtitle',
	array(
		'selector'            => '.newsletter-section .text-section p',
		'settings'            => 'news_hub_subscription_subtitle',
		'container_inclusive' => false,
		'fallback_refresh'    => true,
		'render_callback'     => 'news_hub_subscription_partial_subtitle',
	)
);

// Subscription button settings.
$wp_customize->add_setting(
	'news_hub_subscription_button_label',
	array(
		'default'           => 'Subscribe Now',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'news_hub_subscription_button_label',
	array(
		'label'           => esc_html__( 'Button Label', 'news-hub' ),
		'section'         => 'news_hub_subscription_section',
		'active_callback' => 'news_hub_if_subscription_enabled',
		'settings'        => 'news_hub_subscription_button_label',
	)
);

/*========================Active Callback==============================*/
function news_hub_if_subscription_enabled( $control ) {
	return $control->manager->get_setting( 'news_hub_subscription_section_enable' )->value();
}

/*========================Partial Refresh==============================*/
if ( ! function_exists( 'news_hub_subscription_partial_title' ) ) :
	// Title.
	function news_hub_subscription_partial_title() {
		return esc_html( get_theme_mod( 'news_hub_subscription_title' ) );
	}
endif;
if ( ! function_exists( 'news_hub_subscription_partial_subtitle' ) ) :
	// Subtitle.
	function news_hub_subscription_partial_subtitle() {
		return esc_html( get_theme_mod( 'news_hub_subscription_subtitle' ) );
	}
endif;
