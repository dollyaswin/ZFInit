<?php
ob_start();
define('BASE_PATH', realpath(dirname(__FILE__) .  '/../'));
define('APPLICATION_PATH', BASE_PATH . '/application');
define('APPLICATION_ENV' , 'testing');
define('APPLICATION_CONFIG', APPLICATION_PATH . '/configs/application.ini');

set_include_path(implode(PATH_SEPARATOR,
    array('.', BASE_PATH . '/library', get_include_path())
    ));

ini_set('date.timezone' , 'Asia/Jakarta');
error_reporting(E_ALL|E_STRICT);
