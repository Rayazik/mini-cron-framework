<?php

namespace Lib\Parser;

class Html {
	
	/**
	 * Код страницы
	 * @var string
	 */
	protected $html = '';
	
	public function __construct($html = '') {
		if (!empty($html)) {
			$this->html = $html;
		}
	}
	
	/**
	 * Задать код страницы
	 * @param string $html
	 * @return Parser
	 */
	public function setHtml($html) {
		$this->html = $html;
		return $this;
	}
	
	/**
	 * Находит инпуты на форме и возвращает из в виде массива
	 * @return Array
	 */
	public function getForms($html = '') {
	
		if (empty($html)) {
			$html = $this->html;
		}
	
		$result = [];
		if (!empty($html)) {
	
			// ищем формы
			if (preg_match_all('#(<form.+form>)#Uism', $html, $m)) {
				foreach ($m[1] as $form) {
					$result[] = $form;
				}
			}
	
		}
	
		return $result;
	
	}
	
	/**
	 * Ищем форму по его атрибуту
	 * @param string $attr - название аттрибута (name, id)
	 * @param unknown $value - значение, которое должно ПРИСУТСТВОВАТЬ в атрибуте
	 * то есть в атрибуте могут присутствовать и другие значения, например: "trali-vali %value% param-purum"
	 * @param string $html
	 * @return string - в случае, если ничего не найдется, то вернется пустая строка
	 */
	public function getFormByAttr($attr, $value, $html = '') {

		if (empty($html)) {
			$html = $this->html;
		}
		
		if (!empty($html)) {
			// ищем формы
			if (preg_match('#(<form[^>]+'.$attr.'=[\'"][^\'"]*'.$value.'[^\'"]*[\'"].+form>)#Uism', $html, $m)) {
		
				return $m[1];
		
			}
		}
		
		return '';
		
	}
	
	public function getFormByClass($class, $html = '') {
		return $this->getFormByAttr('class', $class, $html);
	}
	
	public function getFormByName($name, $html = '') {
		return $this->getFormByAttr('name', $name, $html);
	}
	
	public function getFormById($id, $html = '') {
		return $this->getFormByAttr('id', $name, $html);
	}
	
}