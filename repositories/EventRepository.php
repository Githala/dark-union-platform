<?php

/**
 * Created by IntelliJ IDEA.
 * User: quantu
 * Date: 22/06/2017
 * Time: 20:32
 */

include_once plugin_dir_path( __FILE__ )."../models/Event.php";



class EventRepository {

	private $db;
	private $table_name;

	public function __construct() {
		global $wpdb;
		$this->db = $wpdb;
		$this->table_name = $wpdb->prefix . "events";
	}


	function getEventById($id) {
		$query = $this->db->prepare(
			"
					SELECT * FROM $this->table_name
					WHERE id = %d
				",
			$id
		);

		$row = $this->db->get_row( $query);
		return $this->to_event($row);
	}

	function getAllEvents() {
		$query = "SELECT * FROM $this->table_name";
		$results = $this->db->get_results($query);

		return array_map(array($this, "to_event"), $results);
	}

	function create_table() {
		global $wpdb;


		$charset_collate = $wpdb->get_charset_collate();

		$sql = "CREATE TABLE $this->table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(50) NOT NULL,
        ep smallint(5) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );
	}

	private function to_event($row) {
		return new Event($row->id, $row->name, $row->ep);
	}
}