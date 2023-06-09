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
	require_once( __DIR__ . '/widgets/melli-tikfly-process.php' );
	require_once( __DIR__ . '/widgets/melli-choose-grow.php' );
	require_once( __DIR__ . '/widgets/melli-pros-buy-tiktok.php' );
	require_once( __DIR__ . '/widgets/melli-get-in-touch.php' );
	require_once( __DIR__ . '/widgets/melli-tiktok-wrapper.php' );
	require_once( __DIR__ . '/widgets/melli-touch-promo.php' );
	require_once( __DIR__ . '/widgets/melli-banner-two.php' );
	require_once( __DIR__ . '/widgets/melli-fq-section.php' );

	$widgets_manager->register( new \Banner_Section() );
	$widgets_manager->register( new \Melli_Tikfly_Process() );
	$widgets_manager->register( new \Melli_Choose_grow() );
	$widgets_manager->register( new \Melli_Pros_Buy_Tiktok() );
	$widgets_manager->register( new \Melli_Get_In_Touch() );
	$widgets_manager->register( new \Melli_Tiktok_Wrapper() );
	$widgets_manager->register( new \Melli_Touch_Promo() );
	$widgets_manager->register( new \Banner_Section_two() );
	$widgets_manager->register( new \FAQ_Section() );

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

