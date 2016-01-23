<?php

namespace \Core;

/**
 * Обертка для работы либ
 * @author Rayaz
 * @since 21/01/2016
 */
class Library {
	
	protected $fm;
	
	public function __construct() {
		$this->fm = \Core\FM::get_instance();
	}
	
	public function __get($name) {
		if (property_exists($this->fm, $method_name)) {
			return $this->fm->{$method_name};
		}
		return null;
	}
	
	public function __set($name, $value) {
		if (property_exists($this->fm, $method_name)) {
			return $this->fm->{$name} = $value;
		}
		return null;
	}
	
	public function __call($method_name, Array $values) {
		if (method_exists($this->fm, $method_name)) {
			return $this->fm->{$name}($values);
		}
		return null;
	}
	
}