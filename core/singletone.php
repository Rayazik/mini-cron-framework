<?php

namespace Core;

/**
 * Класс singletone
 * @author Rayaz
 * @since 21/01/2016
 */
class Singletone {

	static protected $instance;
	
	private function __construct() {}
	
	private function __clone() {}
	
	private function __wakeup() {}
	
	static public function getInstance() {
	
		if (is_null(self::$instance)) {
			self::$instance = new self;
		}
	
		return self::$instance;
	
	}
	
}