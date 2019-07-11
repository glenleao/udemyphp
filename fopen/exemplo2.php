<?php
// \r\n -> retorna cursor e nova uma linha
// arquivo armazenado no servidor e pode capturar varias informações
$file = fopen("log.txt", "a+");
fwrite($file, date("d/m/Y H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";