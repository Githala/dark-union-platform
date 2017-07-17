<?php

include_once plugin_dir_path( __FILE__ )."../repositories/DUKRepository.php";

class DUKService {

	private $dukRepository;

	function __construct() {
		$this->dukRepository = new DUKRepository();
	}

	function getDUKForUser($userId) {
		return $this->dukRepository->getDUKForUser($userId);
	}
}

?>