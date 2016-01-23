<?php

namespace Core;

/**
 * Класс для работы с БД
 * @author Rayaz
 * @since 21/01/2016
 */
class Database {
	
	protected $db;
	
	public function __construct() {
		if (config('db_autoload')) {
			$this->init();
		}
	}
	
	/**
	 * Разрешаем клонировать объект только по ссылке
	 * @return \Core\Database
	 */
	public function &__clone() {
		return $this;
	}
	
	/**
	 * Инициализация подклчения к БД
	 * @throws \Core\Database\Exception
	 * @return boolean
	 */
	public function init() {
		
		if (is_null($this->db)) {
		
			try {
				// коннектимся к mysql
				$this->db = mysqli_connect(config('db_hostname'), config('db_username'), config('db_password'));
				mysqli_select_db($this->db, config('db_database'));
				mysqli_query($this->db, "SET NAMES " . config('db_char_set') . " COLLATE " . config('db_dbcollat'));
				var_dump("DB is loaded!");
			} catch (Exception $e) {
				throw new \Core\Database\Exception("Ошибка БД: " . mysqli_error($this->db));
				return false;
			}
			
		}
		
		return true;
	}
	
	public function query($query) {

		// если запрос не пустой
		if (!empty($query)) {
			
			if (is_null($this->db)) {
				throw new \Core\Database\Exception("DB is not loaded");
				return new \Core\Database\Result();
			}
			
			$result = mysqli_query($this->db, $query);
				
			if (!$result) {
				throw new \Core\Database\Exception(mysqli_error($this->db), mysqli_errno($this->db));
				// экономим память, освобождаем результат запроса
				mysqli_free_result($this->db, $result);
			} else {
				// экономим память, освобождаем результат запроса
				mysqli_free_result($this->db, $result);
				return new \Core\Database\Result($this->db, $result);
			}
					
		}
		
		return new \Core\Database\Result();
		
	}
	
}