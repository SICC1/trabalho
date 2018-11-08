<?php

ini_set("display_errors", true);
include '../usuario/autenticacao.php';
include '../conectar.php';

$id = $_GET['id'];

$sql = "DELETE FROM usuario where id= '$id'";

mysqli_query($conexao, $sql);

header('Location: ../usuario/logout.php');
