<?php 
//exemplo de site onde vc busca pelo ano do carro etc

echo "<select>";

for ($i=date("Y") ; $i > date("Y") - 100 ; $i--) { 
	
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>"

?>