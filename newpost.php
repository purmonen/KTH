<?php
include 'config.php';
include 'db.php';
include 'functions.php';

require_login();

if (isset($_POST['title']) && isset($_POST['content'])) {
	$title = pg_escape_string($_POST['title']);
	$content = pg_escape_string($_POST['content']);
	connect_db();
	$query = "insert into " . BLOG_TABLE . " (title, content) values ('$title', '$content')";
	echo $query;
	pg_query($query);
	redirect('blog');
}

include 'top.php';

include 'views/newpost.php';
include 'bottom.php';
?>