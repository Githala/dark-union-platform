<?php
/*
Plugin Name: Dark Union Platform
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

include_once plugin_dir_path( __FILE__ ).'shortcodes.php';

add_action('admin_menu', 'add_dark_union_menu');
add_action('init', 'create_shortcodes');


/**
* The code that runs during plugin activation.
* This action is documented in includes/class-dark-union-activator.php
*/
function activate_plugin_name() {
    //require_once plugin_dir_path( __FILE__ ) . 'includes/class-dark-union-activator.php';
    //Plugin_Name_Activator::activate();
}

/**
* The code that runs during plugin deactivation.
* This action is documented in includes/class-dark-union-deactivator.php
*/
function deactivate_plugin_name() {
    //require_once plugin_dir_path( __FILE__ ) . 'includes/class-dark-union-deactivator.php';
    //Plugin_Name_Deactivator::deactivate();
}




register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

function add_dark_union_menu() {
    add_menu_page('Dark Union Options', 'Dark Union', 'manage_options', 'dark-union-platform/du-admin.php', '' /*, icon_url, postion */);
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




/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
//require plugin_dir_path( __FILE__ ) . 'includes/dark-union-platform-old.php';


// function start_dark_union_platform() {
//     $plugin = new Dark_Union_Platform();
//     $plugin->run();
// }

//start_dark_union_platform();

?>