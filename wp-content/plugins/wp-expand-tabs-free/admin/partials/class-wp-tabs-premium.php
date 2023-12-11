<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://shapedplugin.com/
 * @since      2.0.0
 *
 * @package    WP_Tabs
 * @subpackage WP_Tabs/admin/partials
 */

/**
 * WP_Tabs_Premium_Page class.
 *
 * @since    2.0.0
 */
class WP_Tabs_Premium_Page {

	/**
	 * Admin help page
	 *
	 * @since    2.0.0
	 */
	public function premium_page() {
		$landing_page = 'https://wptabs.com/pricing/?ref=1';
		add_submenu_page(
			'edit.php?post_type=sp_wp_tabs',
			__( 'Premium', 'wp-expand-tabs-free' ),
			'<span class="sp-go-pro-icon"></span>Go Pro',
			'manage_options',
			$landing_page
		);
	}
}
