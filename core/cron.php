<?php

namespace Core;

class Cron extends \Core\Library {
	
	public function __construct() {
		parent::__construct();
		parent::init_db();
		var_dump($this->db);
	}
	
}