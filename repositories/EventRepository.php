<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 20:32
 */

include_once plugin_dir_path( __FILE__ )."../models/Event.php";

class EventRepository {

	private $events;

	function __construct() {
		$this->events = array(
			1 => new Event(1,"Live 1", 6),
			2 => new Event(2,"Baravond 1", 3)
		);
	}

	function getEventById($id) {
		return $this->events[$id];
	}

	function getAllEvents() {
		return $this->events;
	}
}