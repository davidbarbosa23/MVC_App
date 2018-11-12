<?php
// Root path for inclusion.
define('INC_ROOT', dirname(__DIR__));

// Require composer autoloader
require_once INC_ROOT . '/vendor/autoload.php';

define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']);

//Root URL 
define('HTTP_ROOT',
	(isset($_SERVER["HTTPS"]) ? "https" : "http") . '://' .$_SERVER['HTTP_HOST'] .
	str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\', '/', INC_ROOT).'/public')
);

// Root path for assets
define('ASSET_ROOT', HTTP_ROOT . '/assets');
