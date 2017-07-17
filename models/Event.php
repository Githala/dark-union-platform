<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 20:29
 */
class Event {
	private $id;
	private $name;
	private $ep;

	function __construct($id, $name, $ep) {
		$this->id = $id;
		$this->name = $name;
		$this->ep = $ep;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getEp() {
		return $this->ep;
	}
}