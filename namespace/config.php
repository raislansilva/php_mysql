<?php


spl_autoload_register(function($nameClass){

	$dirClass ="classe";
	$filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";

	if(file_exists($filename)){
		require_once($filename);
	}

});


?>