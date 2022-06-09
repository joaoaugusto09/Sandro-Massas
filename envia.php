<?php 
/**
 * _GET - captura os dados/variaveis na URL
 * _POST - captura os dados do formulario
 * _REQUEST - captura os dados por POST e/ou GET
 * _SERVER - captura informações do servidor
 * _FILE - permite enviar arquivo para o site/ MIME type list
 * _SESSION
 * _COOKIES
 * 
 * POST, REQUEST e FILES -> nome dosw elemntos atraves do atributo name
 */
$dados = $_FILES;

echo '<pre>';
print_r($dados);
echo '</pre>';

?>