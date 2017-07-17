<?

include_once plugin_dir_path( __FILE__ )."../models/DUK.php";

class DUKRepository {

	protected $duks;

	function __construct() {
		$this->duks = array(
			123 => (new DUK())->setUserId(123)->setCharacterName("Westor the Testor")->setRace("Teston")->setClass("Test")
		);
	}

	function getDUKForUser($userId) {
      return $this->duks[$userId];
    }
}

?>
