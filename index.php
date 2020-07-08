<?php 

require_once("config.php");
require_once("Usuario.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */

$root = new Usuario();
$root->loadbyId(3);

echo $root;

 ?>