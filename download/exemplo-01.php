<?php 

$link = "https://www.php.net/images/logos/php-logo-white.svg";
$content = file_get_contents($link);
$parse = parse_url($link);
$basename = basename($parse["path"]);
$file = fopen($basename, "w+");
fwrite($file, $content);
fclose($file);

?>

<img src="<?=$basename?>">

<style type="text/css">
	body{background-color: black;}
</style>