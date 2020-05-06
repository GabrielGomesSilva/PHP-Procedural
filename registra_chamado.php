<?php

echo '<pre>';
print_r($_POST);
echo '<pre>'; 


//Montagem do texto
$titulo = implode(',', $_POST);
$titulo = str_replace('#', '-', $titulo);
$titulo = str_replace(',', '#', $titulo).PHP_EOL;

//abrindo o arquivo
$arquivo = fopen('arquivo.hd', 'a');
//escrevendo o texto
fwrite($arquivo, $titulo);

//Fechando o arquivo
fclose($arquivo);

header('location:abrir_chamado.php');


//echo $titulo;


?>