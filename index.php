<?php
include 'config.php';
include 'db.php';

connect_db();

$query = "select * from " . BLOG_TABLE . " order by time desc limit 1";
$result = pg_query($query);
$post = pg_fetch_assoc($result);

$title = $post['title'];
$content = explode('<br>', $post['content']);
$content = $content[0];

include 'top.php';
include 'views/home.php';
include 'bottom.php';
?>