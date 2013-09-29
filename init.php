<?php
include 'config.php';
$con_string = sprintf("host=%s dbname=%s user=%s password=%s",
	DB_HOST, DB_DATABASE, DB_USER, DB_PASSWORD);

$con = pg_connect($con_string);

pg_query('drop table if exists blog_post');
$query = file_get_contents('init.sql');
pg_query($query);
$result = pg_query('select * from posts');
while ($row = pg_fetch_assoc($result)) {
	$id = $row['id'];
	$title = pg_escape_string($row['title']);
	$content = pg_escape_string($row['content']);
	$time = pg_escape_string($row['time']);
	$query = "insert into blog_post values ($id, '$title', '$content', '$time')";
	pg_query($query);
}