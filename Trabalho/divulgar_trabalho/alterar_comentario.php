<?php

include '../conectar.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql_comentario = "update comentario set nome='$nome', descricao='$descricao', telefone='$telefone', email='$email' where id = $id";
mysqli_query($conexao, $sql_comentario);

header('Location: listar.php');
