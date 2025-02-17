<?php 
//PDO = php data object
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS01;connectionPooling=0", "sa", "");

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