<?php

namespace Core\Database;

/**
 * Класс для обработки результата запроса к БД
 * @author Rayaz
 * @since 21/01/2016
 */
class Result {
	
	protected $result = [];
	
	public function __construct(&$db = null, &$response = null, $need_response = true) {

		$this->result = [];
		// если должен вернуться результат
		if ($need_response) {
			// перебираем результаты и сформировываем их в массив
			while ($row = mysqli_fetch_assoc($db, $response)) {
				$this->result[] = $row;
			}
		}
		
	}
	
	public function assoc() {
		return $this->result;
	}
	
	public function row() {
		return isset($this->result[0]) ? $this->result[0] : [];
	}
	
}