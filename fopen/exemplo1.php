<?php
// \r\n -> retorna cursor e nova uma linha
// arquivo armazenado no servidor e pode capturar varias informações
// a+ adiciona informação ao arquivo
// w+ somente cria o arquivo 
$file = fopen("log.txt", "a+");
fwrite($file, date("d/m/Y H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";