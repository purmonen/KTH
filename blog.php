<?php
include 'config.php';
include 'db.php';
include 'functions.php';

connect_db();

if ($_GET['id']) {
  $id = pg_escape_string($_GET['id']);
  $res = pg_query("select * from blog_post where id=$id");
} else if ($_GET['year'] && $_GET['month']) {
  $year = pg_escape_string($_GET['year']);
  $month = pg_escape_string($_GET['month']);
  $query = "SELECT * FROM blog_post 
              WHERE time::text LIKE '" . $year . "-" . $month . "%'
              ORDER BY time DESC";  $res = pg_query($query);
} else {
  $res = pg_query('select * from blog_post order by time desc');
}

$posts = pg_fetch_all($res);

$months = array('01'=>'January', '02'=>'February', '03'=>'Mars',
       '04'=>'April', '05'=>'May', '06'=>'June',
       '07'=>'July', '08'=>'August', '09'=>'September',
       '10'=>'October', '11'=>'November', '12'=>'December');

$query = "SELECT DISTINCT extract(month from time), extract(year from time) FROM blog_post";
$yearMonths = array();
$result = pg_query($query);
while ($row = pg_fetch_row($result)) {
   $month = $row[0];
   if ($month < 10) {
       $month = '0' . $month;
   }
   $year = $row[1];
   $monthString = $months[$month];
   $yearMonth = array('year'=>$year, 'month'=>$month, 'monthString'=>$monthString);
   array_push($yearMonths, $yearMonth);
}
arsort($yearMonths);
	

$what = 'WHAT THE FUCK';

include 'top.php';
include 'views/blog.php';
include 'bottom.php';
?>