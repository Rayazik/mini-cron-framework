<?php

namespace Core\Pattern;

/**
 * Паттерн декоратор (wrapper)
 * @author Rayaz
 * @since 23/01/2016
 */
class Decorator {

	protected static $fm;
	
	public function __construct() {
		self::$fm = \Core\FM::getInstance();
	}
	
	public function __get($name) {
		if (property_exists(self::$fm, $name)) {
			return self::$fm->{$name};
		}
		return null;
	}
	
	public function __set($name, $value) {
		if (property_exists(self::$fm, $name)) {
			return self::$fm->{$name} = $value;
		}
		return null;
	}
	
	public function __call($method_name, Array $values) {
		if (method_exists(self::$fm, $method_name)) {
			return self::$fm->{$name}($values);
		}
		return null;
	}
	
}