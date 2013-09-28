<?php
include 'config.php';
include 'db.php';
include 'functions.php';

require_login();

if (isset($_POST['title']) && isset($_POST['content'])) {
	$id = $_POST['id'];
	$title = pg_escape_string($_POST['title']);
	$content = pg_escape_string($_POST['content']);
	connect_db();
	$query = "update blog_post set title='$title', content='$content' where id=$id";
	pg_query($query);
	header('location: ' . SITE_ROOT . '/blog/');
}
include 'top.php';

include 'views/editpost.php';

include 'bottom.php';
?>