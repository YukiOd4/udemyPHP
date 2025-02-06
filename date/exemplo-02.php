<?php 

$ts = strtotime("2003-02-12");

//$ts = strtotime("now");

//$ts = strtotime("+1 day");

//$ts = strtotime("+1 week");

//$ts = strtotime("+1 year");

echo date("l, d/m/Y", $ts);

 ?>