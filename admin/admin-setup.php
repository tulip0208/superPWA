<?php
/**
 * Admin setup for the plugin
 *
 * @since 1.0
 * @function	superpwa_add_menu_links()			Add admin menu pages
 * @function	superpwa_register_settings			Register Settings
 * @function	superpwa_validater_and_sanitizer()	Validate And Sanitize User Input Before Its Saved To Database
 * @function	superpwa_get_settings()		Get settings from database
 */

// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit; 
 
/**
 * Add admin menu pages
 *
 * @since 	1.0
 * @refer	https://developer.wordpress.org/plugins/administration-menus/
 */
function superpwa_add_menu_links() {
	
	add_options_page( __('Super Progressive Web Apps','superpwa_td'), __('Super PWA','superpwa_td'), 'manage_options', 'superpwa','superpwa_admin_interface_render'  );
}
add_action( 'admin_menu', 'superpwa_add_menu_links' );

/**
 * Register Settings
 *
 * @since 	1.0
 */
function superpwa_register_settings() {

	// Register Setting
	register_setting( 
		'superpwa_settings_group', 			// Group name
		'superpwa_settings', 				// Setting name = html form <input> name on settings form
		'superpwa_validater_and_sanitizer'	// Input sanitizer
	);
	
	// Basic Settings
    add_settings_section(
        'superpwa_basic_settings_section',		// ID
        __('', 'superpwa_td'),					// Title
        '__return_false',						// Callback Function
        'superpwa_basic_settings_section'		// Page slug
    );
	
		// Background Color
		add_settings_field(
			'superpwa_background_color',					// ID
			__('Background Color', 'superpwa_td'),			// Title
			'superpwa_background_color_callback',			// Callback function
			'superpwa_basic_settings_section',				// Page slug
			'superpwa_basic_settings_section'				// Settings Section ID
		);
	
}
add_action( 'admin_init', 'superpwa_register_settings' );

/**
 * Validate and sanitize user input before its saved to database
 *
 * @since 		1.0
 */
function superpwa_validater_and_sanitizer ( $settings ) {
	
	// Sanitize text field
	// $settings['text_input'] = sanitize_text_field($settings['text_input']);
	
	return $settings;
}
			
/**
 * Get settings from database
 *
 * @since 	1.0
 * @return	Array	A merged array of default and settings saved in database. 
 */
function superpwa_get_settings() {

	$defaults = array(
				'background_color' 	=> '#D5E0EB',
			);

	$settings = get_option('superpwa_settings', $defaults);
	
	return $settings;
}

/**
 * Enqueue CSS and JS
 *
 * @since	1.0
 */
function superpwa_enqueue_css_js( $hook ) {
	
    // Load only on SuperPWA plugin pages
	if ( $hook != "settings_page_superpwa" ) {
		return;
	}
	
	// Color picker CSS
	// @refer https://make.wordpress.org/core/2012/11/30/new-color-picker-in-wp-3-5/
    wp_enqueue_style( 'wp-color-picker' );
	
	// Main JS
    wp_enqueue_script( 'superpwa-main-js', SUPERPWA_PATH_SRC . 'admin/js/main.js', array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'superpwa_enqueue_css_js' );