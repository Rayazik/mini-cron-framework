<?php

namespace Core;
/**
 * Обертка для работы крон-скриптов
 * @author Rayaz
 * @since 23/01/2016
 */
class Cron extends \Core\Library {
	
	public function __construct() {
		parent::__construct();
		
	}
	
	/**
	 * Запуск выбранного скрипта
	 * @param string $libname
	 * @param array $params
	 */
	public function run($libname = null, $params = []) {
		
		if (!is_null($libname)) {
			$this->load->cron($libname, null, $params)->init();
		}
	}
	
}