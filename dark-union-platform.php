<?php
/*
Plugin Name: Dark Union Platform
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

include_once 'include/shortcodes.php';

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

add_action('admin_menu', 'add_dark_union_menu');
add_action('init', 'create_shortcodes');

function create_shortcodes() {
  add_shortcode('dumenu', 'du_menu_handler');
}

function du_menu_handler( $atts ) {
  return "
    <ul>
      <li>Account</li>
      <li>Bestellingen</li>
      <li>DUK en Achtergrond</li>
      <li>Vragen/Uploads</li>
    </ul>";
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

function add_dark_union_menu() {
    add_menu_page('Dark Union Options', 'Dark Union', 'manage_options', 'dark-union-platform/admin/du-admin.php', '' /*, icon_url, postion */);    
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
//require plugin_dir_path( __FILE__ ) . 'includes/dark-union-platform.php';


// function start_dark_union_platform() {
//     $plugin = new Dark_Union_Platform();
//     $plugin->run();
// }

//start_dark_union_platform();

?>