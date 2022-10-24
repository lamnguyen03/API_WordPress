<?php
/**
 * Custom Style
 */
function news_hub_header_text_style() {

	?>
	<style type="text/css">

		/* Site title and tagline color css */
		.site-title a{
			color: #<?php echo esc_attr( get_header_textcolor() ); ?>;
		}
		.site-description {
			color: <?php echo esc_attr( get_theme_mod( 'news_hub_header_tagline', '#404040' ) ); ?>;
		}
		/* End Site title and tagline color css */

</style>

	<?php
}
add_action( 'wp_head', 'news_hub_header_text_style' );
