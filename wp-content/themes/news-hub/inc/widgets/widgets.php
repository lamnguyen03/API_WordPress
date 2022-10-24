<?php

// Grid Posts Widget.
require get_template_directory() . '/inc/widgets/grid-posts-widget.php';

// Express List Widget.
require get_template_directory() . '/inc/widgets/express-list-widget.php';

// Slider Widget.
require get_template_directory() . '/inc/widgets/slider-widget.php';

// Posts Tabs Widget.
require get_template_directory() . '/inc/widgets/posts-tabs-widget.php';

// Latest Posts Widget.
require get_template_directory() . '/inc/widgets/latest-posts-widget.php';

// Social Widget.
require get_template_directory() . '/inc/widgets/social-widget.php';

/**
 * Register Widgets
 */
function news_hub_register_widgets() {

	register_widget( 'News_Hub_Grid_Posts_Widget' );

	register_widget( 'News_Hub_Express_List_Widget' );

	register_widget( 'News_Hub_Slider_Widget' );

	register_widget( 'News_Hub_Posts_Tabs_Widget' );

	register_widget( 'News_Hub_Latest_Posts_Widget' );

	register_widget( 'News_Hub_Social_Widget' );

}
add_action( 'widgets_init', 'news_hub_register_widgets' );
