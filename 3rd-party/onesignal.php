<?php
/**
 * OneSignal integration
 *
 * @link https://wordpress.org/plugins/onesignal-free-web-push-notifications/
 *
 * @since 1.6
 * 
 * @function	superpwa_onesignal_manifest_notice_check()		Check if OneSignal integration notice should be displayed or not.
 * @function	superpwa_onesignal_add_gcm_sender_id()			Add gcm_sender_id to SuperPWA manifest
 */

// Exit if accessed directly
if ( ! defined('ABSPATH') ) exit;

// If OneSignal is installed and active
if ( class_exists( 'OneSignal' ) ) {
	
	// Add gcm_sender_id to SuperPWA manifest
	add_filter( 'superpwa_manifest', 'superpwa_onesignal_add_gcm_sender_id' );
}

/** 
 * Check if OneSignal integration notice should be displayed or not.
 *
 * @return	Bool	True if notice should be displayed. False otherwise.
 * 
 * @since	1.5
 */
function superpwa_onesignal_manifest_notice_check() {
	
	// Get OneSignal settins
	$onesignal_wp_settings = get_option( 'OneSignalWPSetting' );
	
	// No notice needed if OneSignal custom manifest is enabled and the manifest is the SuperPWA manifest
	if ( 
		( isset( $onesignal_wp_settings["use_custom_manifest"] ) ) && ( $onesignal_wp_settings["use_custom_manifest"] == 1 ) &&
		( isset( $onesignal_wp_settings["custom_manifest_url"] ) ) && ( strcasecmp( trim( $onesignal_wp_settings["custom_manifest_url"] ), superpwa_manifest( 'src' ) ) == 0  )
	) {
		return false;
	}
	
	// Display notice for every other case
	return true;
}

/**
 * Add gcm_sender_id to SuperPWA manifest
 *
 * OneSignal's gcm_sender_id is 482941778795
 *
 * @param (array) $manifest Array with the manifest entries passed via the superpwa_manifest filter.
 * 
 * @return (array) Array appended with the gcm_sender_id of OneSignal
 * 
 * @since 1.8
 */
function superpwa_onesignal_add_gcm_sender_id( $manifest ) {
	
	$manifest['gcm_sender_id'] = '482941778795';
	
	return $manifest;
}