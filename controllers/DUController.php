<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 09:54
 */
class DUController {
	private $template;
	private $model;

	function __construct($template, $model) {
		$this->template = $template;
		$this->model = $model;
	}

	public function render() {
		require($this->template);
	}

}