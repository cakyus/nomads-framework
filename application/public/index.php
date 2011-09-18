<?php

error_reporting(E_ALL);

define('APPLICATION_MODE', 'DEVELOPMENT');
define('APPLICATION_PATH', realpath(__DIR__.'/../'));

set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

include 'Nomads/Application.php';

$application = new Nomads_Application;
$application->start();
