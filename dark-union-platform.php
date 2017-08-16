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
///**
// * Returns info about the plugin.
// *
// * @return array
// */
//function dark_union_platform_meta() {
//	return array(
//		'slug'    => 'wp-dark-union-platform',
//		'name'    => 'Dark Union Platform',
//		'file'    => __FILE__,
//		'version' => '1.0',
//	);
//}
// Where the magic happens...
require plugin_dir_path( __FILE__ ) . 'includes/EventsController.php';

register_activation_hook( __FILE__, 'activate_dark_union_platform' );
register_deactivation_hook( __FILE__, 'deactivate_dark_union_platform' );

include_once plugin_dir_path( __FILE__ ).'shortcodes.php';

add_action( 'admin_menu', 'add_dark_union_menu');
//add_action('init', 'create_shortcodes');
add_action( 'rest_api_init', function () {
	$eventController = new EventsController();
	$eventController->register_routes();
} );


function add_dark_union_menu() {
	add_menu_page('Dark Union Options', 'Dark Union', 'manage_options', 'dark-union-platform/du-admin.php', '' /*, icon_url, postion */);
}

function activate_dark_union_platform() {
	add_cap();
}

function deactivate_dark_union_platform() {

}

function add_cap() {
	$roles = get_editable_roles();
	foreach ( $GLOBALS['wp_roles']->role_objects as $key => $role ) {
		if ( isset( $roles[ $key ] ) && $role->has_cap( 'activate_plugins' ) ) {
			$role->add_cap( 'manage-dark-union-platform' );
		}
	}
}

// function dark_union_platform_install () {
//     global $wpdb;

//     $table_name = $wpdb->prefix . "duks";

//     $sql = "CREATE TABLE $table_name (
//         id mediumint(9) NOT NULL AUTO_INCREMENT,
//         userid mediumint(9) NOT NULL,
//         race varchar(50) NOT NULL,
//         classid mediumint(9) NOT NULL,
//         PRIMARY KEY  (id)
//     ) $charset_collate;";

//     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
//     dbDelta( $sql );
// }
