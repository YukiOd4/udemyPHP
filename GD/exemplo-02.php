<?php 

if (!file_exists("certificado.jpg")) {
    die("Erro: Arquivo 'certificado.jpg' não encontrado.");
}

$im = imagecreatefromjpeg("certificado.jpg");

$tittleColor = imagecolorallocate($im, 0, 0, 0);
$grey = imagecolorallocate($im, 100, 100, 100);

imagestring($im, 5, 450, 150, "CERTIFICADO", $tittleColor);
imagestring($im, 5, 440, 350, "Divanei Aparecido", $tittleColor);
imagestring($im, 3, 440, 370, utf8_decode("Concluído em: ").date("Y/m/d"), $tittleColor);

header("Content-Type: image/jpeg");

imagejpeg($im, "certificado_".date("Y-m-d").".jpg", 10);

imagedestroy($im);

?>