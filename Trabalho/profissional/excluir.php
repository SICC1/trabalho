<?php

ini_set("display_errors", true);
include '../usuario/autenticacao.php';
include '../bd/conectar.php';

$id = $_GET['id'];

$sql_pessoa = "DELETE * FROM usuario, profissional USING usuario, profissional WHERE "
        . "usuario.id = $id AND profissional.id_usuario = $id";

mysqli_query($conexao, $sql_pessoa);

header('Location: ../usuario/logout.php');