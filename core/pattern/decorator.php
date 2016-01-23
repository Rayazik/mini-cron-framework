<?php

namespace Core\Pattern;

class Decorator {

	protected $fm;
	
	public function __construct() {
		$this->fm = \Core\FM::getInstance();
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