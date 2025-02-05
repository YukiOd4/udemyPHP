<?php 

$condition = true;

while ($condition) {
	
	$num = rand(1,10);

	if ($num === 3) {
		echo "TRÊS!!!";
		$condition = false;
	}

	echo $num;

}

?>