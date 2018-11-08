<?php

ini_set("display_errors", true);

include '../conectar.php';

$id = $_GET['id'];

$sql_excluir_comentario = "delete from comentario where id = $id";

mysqli_query($conexao, $sql_excluir_comentario);

header('Location: listar.php');
