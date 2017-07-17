<?php

//include_once plugin_dir_path( __FILE__ )."../repositories/DUKRepository.php";

include_once plugin_dir_path( __FILE__ )."../services/EventService.php";


class DarkUnionAdmin {


	function __construct( $plugin_meta = array() ) {

		$this->plugin_meta = $plugin_meta;

		// Usage of the plugin is restricted to Administrators.
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		add_action( 'rest_api_init', function () {
			var_dump("TEST1");
			register_rest_route( 'dark-union/v1', '/events', array(
				'methods' => 'GET',
				'callback' => array($this, 'getEvents'),
			) );
			var_dump("TEST2");
		} );
	}

	function getEvents( WP_REST_Request $request ) {

		$eventService = new EventService();
		return $eventService->getAllEvents();


	}
}

?>