<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 20:29
 */
class EventDTO {
	public $id;
	public $name;
	public $ep;

	function __construct($id, $name, $ep) {
		$this->id = $id;
		$this->name = $name;
		$this->ep = $ep;
	}
}