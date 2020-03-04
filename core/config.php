<?php
// Database instellingen
define('DB_TYPE', 'mysql');					// Type of Database.
define('DB_HOST', '127.0.0.1'); 			// Ip adress of the Database.
define('DB_NAME', ''); 				// Name of the Database.
define('DB_USER', 'root'); 					// Name of the Database user.
define('DB_PASS', 'mysql');					// Database password.
define('DB_CHARSET', 'utf8'); 				// Character set.

define('URL_PUBLIC_FOLDER', 'view');
define('URL_PROTOCOL', '//');					
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME']))); 
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER); 
define('DEFAULT_CONTROLLER', 'MainController'); 	// Define the default controller.
