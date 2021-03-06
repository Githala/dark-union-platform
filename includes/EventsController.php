<?php

//include_once plugin_dir_path( __FILE__ )."../repositories/DUKRepository.php";

include_once plugin_dir_path( __FILE__ )."../services/EventService.php";
include_once plugin_dir_path( __FILE__ )."../dtos/EventDTO.php";

class EventsController extends WP_REST_Controller {

	/**
	 * Register the routes for the objects of the controller.
	 */
	public function register_routes() {
		$version = '1';
		$namespace = 'dark-union/v' . $version;
		$base = 'events';
		register_rest_route( $namespace, '/' . $base, array(
			array(
				'methods'         => WP_REST_Server::READABLE, //GET
				'callback'        => array( $this, 'get_events' ),
				'permission_callback' => array( $this, 'get_items_permissions_check' ),
				'args'            => array(

				),
			),
//			array(
//				'methods'         => WP_REST_Server::CREATABLE,
//				'callback'        => array( $this, 'create_event' ),
//				'permission_callback' => array( $this, 'create_item_permissions_check' ),
//				'args'            => $this->get_endpoint_args_for_item_schema( true ),
//			),
		) );
		register_rest_route( $namespace, '/' . $base . '/(?P<id>\d+)', array(
			array(
				'methods'         => WP_REST_Server::READABLE, //GET
				'callback'        => array( $this, 'get_event' ),
				'permission_callback' => array( $this, 'get_items_permissions_check' ),
				'args'            => array(

				),
			),
//			array(
//				'methods'         => WP_REST_Server::CREATABLE,
//				'callback'        => array( $this, 'create_event' ),
//				'permission_callback' => array( $this, 'create_item_permissions_check' ),
//				'args'            => $this->get_endpoint_args_for_item_schema( true ),
//			),
		) );
	}

	public function get_events( $request ) {
		$eventService = new EventService();
		$events = $eventService->getAllEvents();

		$eventDTOs = array_map(array($this, "event_to_dto"), $events);

		return new WP_REST_Response($eventDTOs , 200 );
	}

	public function get_event( $request ) {
		$eventId = $request['id'];

		$eventService = new EventService();
		$event = $eventService->getEventById($eventId);

		$eventDTO = $this->event_to_dto($event);
		return new WP_REST_Response($eventDTO , 200 );
	}


	/**
	 * Check if a given request has access to get items
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_Error|bool
	 */
	public function get_items_permissions_check( $request ) {
		//return true; <--use to make readable by all
		return true;
		//return current_user_can( 'read' );
	}

	/**
	 * Check if a given request has access to get a specific item
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_Error|bool
	 */
	public function get_item_permissions_check( $request ) {
		return $this->get_items_permissions_check( $request );
	}

	/**
	 * Check if a given request has access to create items
	 *
	 * @param WP_REST_Request $request Full data about the request.
	 * @return WP_Error|bool
	 */
	public function create_item_permissions_check( $request ) {
		return current_user_can( 'manage-dark-union-platform' );
	}


	private function event_to_dto($event) {
		return new EventDTO($event->getId(), $event->getName(), $event->getEp());
	}

}

?>