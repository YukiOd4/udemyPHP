<?php 

header('Content-Type: application/json');

function error_handler($code, $message, $file, $line){
    // Registro do erro no log
    error_log(json_encode(array(
        "code" => $code,
        "message" => $message,
        "line" => $line,
        "file" => $file
    )), 3, 'errors.log');
    
    // Não imprime o erro na tela
    http_response_code(500); // Define o código de status HTTP
    echo json_encode(array("error" => "Ocorreu um erro. Por favor, tente novamente mais tarde."));
}

set_error_handler("error_handler");

$total = 100 / 0;

?>