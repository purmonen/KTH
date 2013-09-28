<?php
function connect_db() {
	$con_string = sprintf("host=%s dbname=%s user=%s password=%s",
	DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD);
	$con = pg_connect($con_string);
	return $con;
}