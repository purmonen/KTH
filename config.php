<?php
session_start();
if ($_SESSION['loggedin']) {
	define('LOGGED_IN', true);
} else {
	define('LOGGED_IN', false);
}
define('SITE_ROOT', 'http://localhost/purmonen');
define('IMG_ROOT', SITE_ROOT . '/static/img');
define('CSS_ROOT', SITE_ROOT . '/static/css');
define('JS_ROOT', SITE_ROOT . '/static/js');

define('DB_TYPE', 'psql');
define('DB_HOST', 'nestor2.csc.kth.se');
define('DB_DATABASE', 'purmonen');
define('DB_USER', 'purmonen');
define('DB_PASSWORD', 'R6rltQRT');
$SITE_ROOT = SITE_ROOT;