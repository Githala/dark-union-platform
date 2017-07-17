<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Dark Union Platform
 * Description:       Dark Union management system
 * Version:           1.0
 * Author:            Quantu
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-dark-union-platform
 * Domain Path:       /languages
 * Network:           False
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Returns info about the plugin.
 *
 * @return array
 */
function dark_union_platform_meta() {
	return array(
		'slug'    => 'wp-dark-union-platform',
		'name'    => 'Dark Union Platform',
		'file'    => __FILE__,
		'version' => '1.0',
	);
}
// Where the magic happens...
require plugin_dir_path( __FILE__ ) . 'includes/dark-union-platform-admin.php';
/**
 * Initialize the plugin's functionality once the correct hook fires.
 */
function dark_union_platform_admin_init() {
	$dark_union_platform = new DarkUnionAdmin( dark_union_platform_meta() );
}

function add_dark_union_menu() {
	add_menu_page('Dark Union Options', 'Dark Union', 'manage_options', 'dark-union-platform/du-admin.php', '' /*, icon_url, postion */);
}

add_action( 'admin_init', 'dark_union_platform_admin_init' );
add_action('admin_menu', 'add_dark_union_menu');