<?php 
//function anonimas
function test($callBack){

	//processo lento
	$callBack();

}

test(function(){
	echo "Terminou!";
});

 ?>