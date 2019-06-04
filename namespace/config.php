<?php


spl_autoload_register(function($nameClass){

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	

});