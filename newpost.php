<?php
include 'config.php';
include 'db.php';

if (isset($_POST['title']) && isset($_POST['content'])) {
	$title = pg_escape_string($_POST['title']);
	$content = pg_escape_string($_POST['content']);
	connect_db();
	$query = "insert into blog_post (title, content) values ('$title', '$content')";
	pg_query($query);
	header('location: ' . SITE_ROOT . '/blog/');
}

include 'top.php';

include 'views/newpost.php';
include 'bottom.php';
?>