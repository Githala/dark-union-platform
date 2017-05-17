<?

echo 'test';

function create_shortcodes() {
  add_shortcode('du-menu', 'du_menu_handler');
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


?>