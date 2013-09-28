<?php

include 'functions.php';


$str = "I'm an a'pa ''and \"he\" so'stuff";

$estr = escape_db($str);

echo $str;
echo '<br>';
echo $estr;
echo '<br>';

echo unescape_db($estr);