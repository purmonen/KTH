<?php
session_start();
include 'config.php';

$username = 'ab';
$password = 'bc';
if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($_POST['username'] === $username && $_POST['password'] === $password) {
		$_SESSION['loggedin'] = true;
	}
	header('location: ' . SITE_ROOT);
}
include 'views/login.php';
?>