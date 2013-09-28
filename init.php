<?php
include 'config.php';
$con_string = sprintf("host=%s dbname=%s user=%s password=%s",
	DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD);

$con = pg_connect($con_string);

pg_query('drop table if exists blog_post');
$query = file_get_contents('init.sql');
pg_query($query);
$result = pg_query('select * from blog_post');
while ($row = pg_fetch_assoc($result)) {
	echo var_dump($row);
	echo '<br>';
	echo $row['content'];
}