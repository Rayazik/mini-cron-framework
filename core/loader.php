<?php

namespace Core;

/**
 * Класс-загрузщик
 * @author Rayaz
 * @since 23/01/2016
 */
class Loader {
	
	protected $instance;
	
	public function __construct() {
		$this->init();
	}
	
	public function init() {
		$this->instance = get_instance();
		// инициализация подключения в БД
		$this->database();
		return $this;
	}
	
	public function database() {
		if (is_null($this->instance->db)) {
			$this->instance->db = new \Core\Database();
		}
		return $this->instance->db;
	}
	
	public function lib($name, $system_name = null, $params = []) {
		
		if (is_null($system_name)) {
			$system_name = $name;
		}
		
		$path = explode('/', $name);
		array_map(function ($k, $v) {var_dump($k, $v);}, $path);
		
	}
	
}