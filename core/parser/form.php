<?php

namespace Parser;

/**
 * Класс для парсинга формы
 * @author Rayaz
 * @since 21/01/2016
 */
class Form {
	
	/**
	 * Код формы
	 * @var string
	 */
	protected $html = '';
	
	public function __construct($html = '') {
		if (!empty($html)) {
			$this->html = $html;
		}
	}
	
	/**
	 * Задать текущую форму
	 * @param string $html
	 * @return Form
	 */
	public function setForm($html) {
		$this->html = $html;
		return $this;
	}
	
	/**
	 * Находит инпуты на форме и возвращает из в виде массива
	 * @return Array
	 */
	public function getInputs($html = '') {
		
		if (empty($html)) {
			$html = $this->html;
		}
		
		$result = [];
		if (!empty($html)) {
			
			// ищем формы
			if (preg_match_all('#(<input[^>]+>)#Uis', $html, $m)) {
				foreach ($m[1] as $input) {
					$result[$this->getInputName($input)] = $this->getInputValue($input);
				}
			}
			
		}
		
		return $result;
		
	}
	
	/**
	 * Находим путь, по которому надо сабмитить форму
	 * @param string $html
	 */
	public function getAction($html = '') {

		if (empty($html)) {
			$html = $this->html;
		}
		
		if (!empty($html)) {
			// ищем формы
			if (preg_match('#<form[^>]+action=[\'"]([^\'"]*)[\'"][^>]*>?#Uis', $html, $m)) {
				return $m[1];
			}
		}
		
		return '';
		
	}
	
	/**
	 * Находим метод, который будет использован при сабмите формы
	 * @param string $html
	 */
	public function getMethod($html = '') {

		if (empty($html)) {
			$html = $this->html;
		}

		if (!empty($html)) {
			// ищем формы
			if (preg_match('#<form[^>]+method=[\'"](GET|POST)[\'"][^>]*>?#Uis', $html, $m)) {
				return strtoupper($m[1]);
			}
		}
		
		return 'GET';
	}
	
	/**
	 * Найти название input'а
	 * @param string $input
	 * @return string
	 */
	public function getInputName($input) {
		
		if (preg_match('#name=[\'"](.+)[\'"]#Ui', $input, $m)) {
			return empty($m[1]) ? '' : $m[1];
		}
		
		return '';
		
	}

	/**
	 * Найти значение input'а
	 * @param string $input
	 * @return string
	 */
	public function getInputValue($input) {

		if (preg_match('#value=[\'"](.+)?[\'"]#Ui', $input, $m)) {
			return empty($m[1]) ? '' : $m[1];
		}
		
		return '';
		
	}
	
}