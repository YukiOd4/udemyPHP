<?php 

$json = '[{"nome":"Yuki","idade":21},{"nome":"Yudi","idade":20}]';

$data = json_decode($json, true);

var_dump($data);

?>