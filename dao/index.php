<?php

require_once("config.php");

//Carrega um usuário
 $root = new Usuario();
 $root->loadbyId(4);
 echo $root;


 // $Sql = new Sql();

 // $usuarios = $Sql->select("SELECT * FROM tb_usuarios");

 // echo json_encode($usuarios);

//Carrega uma lista de usuario
  // $lista = Usuario::getList();
  // echo json_encode($lista);


//Carrega uma lista de usuários buscando pelo login
 //  $search = Usuario::search("jo");
 // echo json_encode($search);

//Carrega um usuario especifico usando login e senha
 // $usuario = new Usuario();
 // $usuario->login("keu","kg18");
 // echo $usuario;