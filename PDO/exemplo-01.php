<?php 
//PDO = php data object
$conn = new PDO("mysql:dbname=dbphp7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
	foreach ($row as $key => $value) {
		echo $key.": <strong> ".$value."</strong></br>";
	}
	echo "================================</br>";
}

?>