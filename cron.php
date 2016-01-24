<?php

// определяем корневую директорию сайта
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);

// определяем где лежат конфиги
define('CONFIG_PATH', ROOT_PATH . 'config' . DIRECTORY_SEPARATOR);

// папка с ядром фреймворка
define('CORE_PATH', ROOT_PATH . 'core' . DIRECTORY_SEPARATOR);

// инициализируем загрузку ядра фреймворка
include_once CORE_PATH.'autoload.php';

// инициализация скрипта
$cron = new \Core\Cron();
$cron->run('vk/group/posting', []);