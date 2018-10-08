<?php

ini_set("display_errors", true);

include '../bd/conectar.php';

$id = $_GET['id_trabalho'];

$sql_trabalho = "delete from trabalho where id = $id";

echo $id;
echo $sql_trabalho;
//mysqli_query($conexao, $sql_trabalho);
//
//header('Location: listar.php');