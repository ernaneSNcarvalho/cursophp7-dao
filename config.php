<?php 

require_once("C:/xampp2/htdocs/DAO/Sql.php");

spl_autoload_register(function($class_name){

	$filename = "class" . DIRECTORY_SEPARATOR. $class_name . ".php";

	if (file_exists(($filename))){
		require_once($filename);
	}
});


 ?>