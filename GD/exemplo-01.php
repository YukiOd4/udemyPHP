<?php 

/*
		Aqui estão algumas dicas para solucionar o problema:

		Extensão GD Ativada Certifique-se de que a extensão GD está instalada e ativada no seu ambiente PHP. Você pode verificar isso criando um arquivo phpinfo() para listar os módulos carregados:

		php
		<?php
		phpinfo();
		?>
		Procure pela seção "gd". Se não aparecer, você precisará ativar a extensão no arquivo php.ini.

		Verifique os Headers (Cabeçalhos) Certifique-se de que o cabeçalho "Content-Type: image/png" está sendo enviado antes de qualquer saída no PHP. Caso tenha espaços ou quebras de linha antes do código PHP, remova-os.

		Permissões de Criação de Imagens Confirme se o servidor tem as permissões necessárias para criar e manipular imagens.

		Atualize seu Código para Compatibilidade Embora seu código pareça válido, é recomendado testar o uso da função imagedestroy() após imagepng($im) para liberar a memória:

		php
		imagepng($im);
		imagedestroy($im);
		Fontes no GD Caso o erro esteja relacionado ao tamanho de fonte usado (5), é bom saber que GD possui tamanhos predefinidos para imagestring (1 a 5). Não é possível usar fontes personalizadas diretamente com esta função; para isso, utilize imagettftext e uma fonte TTF externa.
*/

header("Content-Type: image/png");

$string = "Curso PHP 7!";
$im = imagecreate(256, 256);
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);

imagestring($im, 5, 60, 120, $string, $red);

imagepng($im);

?>