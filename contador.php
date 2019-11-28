<?php

$aquivo = "contador.txt";

$manipular = fopen($aquivo,'r+');

$dado = fread($manipular,512);

$contador = $dado + 1;

fseek($manipular,0);//volta para o inicio do arquivo

fwrite($manipular,$contador);

fclose($manipular);

?>
