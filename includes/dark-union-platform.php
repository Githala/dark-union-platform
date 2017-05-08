<?php
class Dark_Union_Platform {

    public function activate_plugin() {
        
    }

    public function deactivate_plugin() {
        
    }

    function dark_union_menu() {
        
    }

    public function __construct(){
        add_action('admin_menu', array($this,'dark_union_menu'));

        $this->plugin_name = 'plugin-name';
		$this->version = '1.0.0';
		// $this->load_dependencies();
		// $this->set_locale();
		// $this->define_admin_hooks();
		// $this->define_public_hooks();
    }

}
?>