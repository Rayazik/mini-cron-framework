<?php

// инициализируем загрузчик классов
spl_autoload_register(function ($class) {

	// base directory for the namespace prefix
	$base_dir = ROOT_PATH;

	// get the relative class name
	$relative_class = substr($class, $len);

	// replace the namespace prefix with the base directory, replace namespace
	// separators with directory separators in the relative class name, append
	// with .php
	$file = $base_dir . strtolower(str_replace('\\', DIRECTORY_SEPARATOR, $relative_class)) . '.php';

	var_dump($file);
	
	// if the file exists, require it
	if (file_exists($file)) {
		require_once $file;
	}
	
});


// загружаем файлы конфигов
foreach (['config', 'database',] as $config_filename) {
	$path = CONFIG_PATH . $config_filename . '.php';
	if (file_exists($path)) {
		include_once $path;
	}
}

/**
 * Возвращает элемент конфига или все конфиги сразу
 * @param string $item
 */
function config($item = null) {
	global $config;
	if (is_null($item)) {
		return $config;
	} else {
		return isset($config[$item]) ? $config[$item] : null;
	}
}

// чтобы обращаться к ядру вне классов (хелпер)
function &get_instance() {
	return \Core\FM::getInstance();
}

// инициализируем ядро фреймворка
new \Core\FM();
