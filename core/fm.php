<?php

namespace Core;

/**
 * Главный класс фреймворка
 * @author Rayaz
 * @since 23/01/2016
 */
class FM extends \Core\Pattern\Singletone {
	
	public function __construct() {
		
		parent::__construct();
		// подгружаем загрузчик классов
		$this->load = new \Core\Loader();
		
	}
	
}