<?php 

require_once("config.php");
require_once("Usuario.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */


//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

/*Carrega uma lista de Usuários*/
//$lista = Usuario::getList();
//echo json_encode($lista);

/*Carrega uma lista de usuários buscando pelo login*/
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("root","$%#!");
echo $usuario;
 ?>