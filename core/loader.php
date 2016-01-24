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
		
		// свойство для хранения загруженных крон-скриптов
		if (!property_exists($this, 'cron')) {
			$this->instance->cron = new \Core\Pattern\Property();
		}
		
		// инициализация подключения в БД
		$this->database();
		
		return $this;
		
	}
	
	/**
	 * Загрузка БД
	 */
	public function database() {
		if (is_null($this->instance->db)) {
			$this->instance->db = new \Core\Database();
		}
		return $this->instance->db;
	}
	
	/**
	 * Загрузка либы
	 * @param string $name - имя либы из папки Libraries
	 * @param string $system_name - имя под которым оно будет доступно 
	 * в контексте $this
	 * @param array $params
	 * @return instance of Library
	 */
	public function lib($name, $system_name = null, $params = []) {
		
		if (is_null($system_name)) {
			$system_name = str_replace('/', '_', $name);
		}
		
		// если либа все еще не загружена
		if (!property_exists($this, $system_name)) {
			
			$path = explode('/', $name);
			$path = array_map(function ($el) {return ucfirst($el);}, $path);
			
			$classname = 'Lib\\' . implode('\\', $path);
		
			$this->instance->{$system_name} = new $classname($params);
		
		}
		
		return $this->instance->{$system_name};
		
	}

	/**
	 * Загрузка либы
	 * @param string $name - имя либы из папки Cron
	 * @param string $system_name - имя под которым оно будет доступно
	 * в контексте $this->cron
	 * @param array $params
	 * @return instance of Library
	 */
	public function cron($name, $system_name = null, $params = []) {
	
		if (is_null($system_name)) {
			$system_name = str_replace('/', '_', $name);
		}
	
		// если либа все еще не загружена
		if (!property_exists($this->instance->cron, $system_name)) {
			
			$path = explode('/', $name);
			$path = array_map(function ($el) {return ucfirst($el);}, $path);
				
			$classname = 'Cron\\' . implode('\\', $path);
	
			$this->instance->cron->{$system_name} = new $classname($params);
	
		}
	
		return $this->instance->cron->{$system_name};
	
	}
	
}