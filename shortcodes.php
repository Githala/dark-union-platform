<?

include_once plugin_dir_path( __FILE__ ).'services/DUKService.php';
include_once plugin_dir_path( __FILE__ ).'controllers/DUController.php';

function create_shortcodes() {
  add_shortcode('du_platform', 'du_platform_handler');
}

function du_platform_handler( $atts ) {

	$dukService = new DUKService();
	$duk = $dukService->getDUKForUser(123);

	$controller = new DUController(plugin_dir_path( __FILE__ )."templates/duk.php", $duk);
	return $controller->render();

//  return "
//    <ul>
//      <li><a href=\"#account\">Account</a></li>
//      <li>Bestellingen</li>
//      <li>DUK en Achtergrond</li>
//      <li>Vragen/Uploads</li>
//    </ul>";
}

?>