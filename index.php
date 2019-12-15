<?php

require_once ("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Gil");
//echo json_encode($search);

//Carrega os dados com base no deslogin e dessenha
//$usuario = new Usuario();
//$usuario->login("Gilberto José Silva", "g1j2s3scp");
//echo $usuario;

/*
//seleciona toda a tabela e mostra no formato json
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

// inserir um usuario
$aluno = new Usuario("Cristina Pessanha", "458796");
$aluno->insert();

echo ("<h2>Inserido com sucesso!</h2><br/>");

// alterar um usuario identificado pelo :ID
$usuario = new Usuario();

$usuario->loadById(8);
$usuario->update("professor", "qwertdf");

echo $usuario;


// deletar um usuario

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();

echo "<h2>Usuário eliminado.</h2><br>" . $usuario;
*/

?>