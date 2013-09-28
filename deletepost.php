<?php
include 'config.php';
include 'db.php';
include 'functions.php';

require_login();

connect_db();
$id = pg_escape_string($_GET['id']);
$query = "delete from blog_post where id = $id";
pg_query($query);

header('location: ' . SITE_ROOT . '/blog/');