<?php
/**
 * Template part for displaying front page introduction.
 *
 * @package News Hub
 */

if ( ! class_exists( 'Jetpack' ) ) {
	return;
}

$subscription           = get_theme_mod( 'news_hub_subscription_section_enable', false );
$subscription_image     = get_theme_mod( 'news_hub_subscription_bg_image', '' );
$subscription_title     = get_theme_mod( 'news_hub_subscription_title', __( 'Subscribe To Our Newsletter', 'news-hub' ) );
$subscription_subtitle  = get_theme_mod( 'news_hub_subscription_subtitle', '' );
$subscription_btn_label = get_theme_mod( 'news_hub_subscription_button_label', __( 'Subscribe Now', 'news-hub' ) );

if ( ! $subscription ) {
	return;
}

?>

<section id="news_hub_subscription_section" class="frontpage above-footer-section newsletter-section" style="background-color: #252837;">
	<?php if ( ! empty( $subscription_image ) ) : ?>
		<div class="section-background-img">
			<img src="<?php echo esc_url( $subscription_image ); ?>" alt="<?php esc_attr_e( 'Subscription Image', 'news-hub' ); ?>">
		</div>
	<?php endif; ?>
	<div class="theme-wrapper">
		<div class="newsletter-section-wrapper">
			<div class="text-section">
				<?php if ( ! empty( $subscription_title ) ) : ?>
					<h3 class="newsletter-title"><?php echo esc_html( $subscription_title ); ?>.</h3>
				<?php endif; ?>
				<?php if ( ! empty( $subscription_subtitle ) ) : ?>
					<p><?php echo esc_html( $subscription_subtitle ); ?></p>
				<?php endif; ?>
			</div>
			<div class="newsletter-form">
				<?php
				$subscription_shortcode = '[jetpack_subscription_form title="" subscribe_text="" subscribe_button="' . esc_html( $subscription_btn_label ) . '" show_subscribers_total="0"]';
				echo do_shortcode( wp_kses_post( $subscription_shortcode ) );
				?>
			</div>
		</div>
	</div>
</section>
