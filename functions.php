<?php
function require_login() {
	if (!LOGGED_IN) {
		redirect('login');
	}
}

function redirect($page) {
	header('location: ' . SITE_ROOT . '/' . $page . '/');
}

function escape_db($str) {
	return str_replace("'", "''", $str);
}

function unescape_db($str) {
	return str_replace("''", "'", $str);
}