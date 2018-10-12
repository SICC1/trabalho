<?php

$id = $_POST['id'];


$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data_trab = $_POST['data_trab'];

include '../bd/conectar.php';

$sql_pessoa = "update trabalho set nome='$nome', descricao='$descricao', data_trab='$data_trab' where id = $id";
echo $sql_pessoa;
mysqli_query($conexao, $sql_pessoa);

header('Location: listar.php');
