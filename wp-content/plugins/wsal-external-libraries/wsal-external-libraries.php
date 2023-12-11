<?php

/**
 * Plugin Name: Software libraries for WP Activity Log
 * Plugin URI: https://github.com/wpwhitesecurity/wsal-external-libraries/
 * Description: Helper plugin to accompany WP Activity Log plugin to enable functionality that requires external libraries.
 * Author: WP White Security
 * Version: 1.0.4
 * Text Domain: wsal-external-libraries
 * Author URI: https://www.wpwhitesecurity.com/
 * License: GNU General Public License v2.0 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Network: true
 *
 * @package wsal
 * @subpackage external-libraries
 */

// this is the URL our updater / license checker pings.
define( 'WSAL_DEPS_STORE_URL', 'https://proxytron.wpwhitesecurity.com/' );

// the download ID for the product in Easy Digital Downloads
define( 'WSAL_DEPS_ITEM_ID', 42 );

// the name of the product in Easy Digital Downloads
define( 'WSAL_DEPS_ITEM_NAME', 'Software libraries for WP Activity Log' );

//  EDD license key
define( 'WSAL_DEPS_LICENSE_KEY', 'PznvAEXGCE5TUX90zWAJhX8DPDfCWiAD' );

$autoload_files = [
	'vendor' . DIRECTORY_SEPARATOR . 'autoload.php',
	'third-party' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php',
];

if ( defined( 'WSAL_LOAD_AWS_SDK' ) && WSAL_LOAD_AWS_SDK ) {
	array_push( $autoload_files, 'aws' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php' );
	array_push( $autoload_files, 'aws' . DIRECTORY_SEPARATOR . 'third-party' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php' );
}

$plugin_path = plugin_dir_path( __FILE__ );
foreach ( $autoload_files as $autoload_file ) {
	if ( file_exists( $plugin_path . $autoload_file ) ) {
		require_once $plugin_path . $autoload_file;
	}
}
if ( ! class_exists( 'EDD_SL_Plugin_Updater' ) ) {
	// load our custom updater
	include dirname( __FILE__ ) . '/lib/EDD_SL_Plugin_Updater.php';
}

/**
 * Initialize the updater. Hooked into `init` to work with the
 * wp_version_check cron job, which allows auto-updates.
 */
function edd_sl_sample_plugin_updater() {

	// To support auto-updates, this needs to run during the wp_version_check cron job for privileged users.
	$doing_cron = defined( 'DOING_CRON' ) && DOING_CRON;
	if ( ! current_user_can( 'manage_options' ) && ! $doing_cron ) {
		return;
	}

	// setup the updater
	$edd_updater = new EDD_SL_Plugin_Updater(
		WSAL_DEPS_STORE_URL,
		__FILE__,
		array(
			'version' => '1.0.4',
			'license' => WSAL_DEPS_LICENSE_KEY,
			'item_id' => WSAL_DEPS_ITEM_ID,
			'author'  => 'WP White Security',
			'beta'    => false,
		)
	);

}

add_action( 'init', 'edd_sl_sample_plugin_updater' );
