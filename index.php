<?php
require 'core/bootstrap.php';

$routes = [
	'' => 'WelcomeController@index',
    '/erfassen' => 'WelcomeController@erfassen',
    '/bearbeiten' => 'WelcomeController@bearbeiten',
    '/anzeigen' => 'WelcomeController@anzeigen',
    '/erfasst' => 'WelcomeController@Add',
    '/bearbeitet' => 'WelcomeController@Update',
    '/home' => 'WelcomeController@index'
];

$db = [
	'name'     => 'DBname',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');