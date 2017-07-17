<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 20:37
 */

include_once plugin_dir_path( __FILE__ )."../repositories/EventRepository.php";

class EventService {

	private $eventRepository;

	function __construct() {
		$this->eventRepository = new EventRepository();
	}

	function getEventById($id) {
		return $this->eventRepository->getEventById($id);
	}

	function getAllEvents() {
		return $this->eventRepository->getAllEvents();
	}

}