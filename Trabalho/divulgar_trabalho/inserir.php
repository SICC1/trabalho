<?php

session_start();
include '../bd/conectar.php';

ini_set("display_errors", true);

$sql = "select * from usuario where username = '$_SESSION[username]'";


$retorno_id = mysqli_query($conexao, $sql);

$array = mysqli_fetch_object($retorno_id);

echo $array->id;

$nome = $_POST['nome'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];

$sql = "insert into trabalho (nome, data, descricao, usuario_id) values ('$nome', '$data', '$descricao', $array->id)";
echo $sql;

//mysqli_query($conexao,$sql);

//header('Location: form_inserir.php');




