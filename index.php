<?php

require_once('app/_variables.php');

// auto load classes
spl_autoload_register(function($className){
	if (file_exists('app/' . $className . '.php')) {
			require_once 'app/' . $className . '.php';
	}
else if (file_exists('controller/' . $className . '.php')) {
			require_once 'controller/' . $className . '.php';
	}
else if (file_exists('model/' . $className . '.php')) {
			require_once 'model/' . $className . '.php';
	}
	else if (file_exists('library/' . $className . '.php')) {
			require_once 'library/' . $className . '.php';
	}
	else if (file_exists($className . '.php')) {
			require_once $className . '.php';
	}
});

// test
// no route calls			pass
// one route call			pass
// two route calls		pass
// post route call		pass
// echo 'request uri: '.$_SERVER['REQUEST_URI'];

// define routes
require_once('app/_routes.php');

// connect to db
include('model/config.php');
// include functions to get data
include('model/HouseModel.php');
