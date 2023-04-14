<?php
/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor_melli
 */

function elementor_melli( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/melli-banner.php' );

	$widgets_manager->register( new \Banner_Section() );

}
add_action( 'elementor/widgets/register', 'elementor_melli' );


function melli_category_setup( $elements_manager ) {

	$elements_manager->add_category(
		'melli_cat',
		[
			'title' => esc_html__( 'Melli Category', 'elementor_melli' ),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action( 'elementor/elements/categories_registered', 'melli_category_setup' );

