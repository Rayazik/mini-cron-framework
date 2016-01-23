<?php

namespace Core\Pattern;

/**
 * Паттерн singletone
 * @author Rayaz
 * @since 21/01/2016
 */
class Singletone {

	static protected $instance;
	
	public function __construct() {
		self::$instance =& $this;
	}
	
// 	private function __clone() {}
	
// 	private function __wakeup() {}
	
	static public function &getInstance() {
	
		if (is_null(self::$instance)) {
			self::$instance = new self;
		}
	
		return self::$instance;
	
	}
	
}