<?php 

require_once("config.php");

echo session_save_path();

var_dump(session_status());

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "as sessões estão desativadas";
		break;
	
	case PHP_SESSION_NONE:
		echo "as sessões esta habilitada mas não existe";
		break;

	case PHP_SESSION_ACTIVE:
		echo "as sessões esta habilitada e há a existir";
		break;
}

?>