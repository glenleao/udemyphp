<?php
//comentando a linha 7, a pasta images é criada, colocando arquivos dentro dela, e tirando o comentario, os arquivos são excluidos por conta da funçao unlink
if(!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item){
	if(!in_array($item, array(".",".."))){
		// unlink("images/". $item);
	}
}
echo "Feito";