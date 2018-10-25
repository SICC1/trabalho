<?php

ini_set("display_errors", true);

include '../bd/conectar.php';

$id = $_GET['id'];

$sql_excluir_comentario = "delete from comentario where id_trabalho = $id";
mysqli_query($conexao, $sql_excluir_comentario);

$sql_trabalho = "delete from trabalho where id = $id";

echo $sql_trabalho;
mysqli_query($conexao, $sql_trabalho);

header('Location: listar.php');