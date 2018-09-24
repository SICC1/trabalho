<?php

ini_set("display_errors", true);

include_once '../bd/conectar.php';

$id = $_GET['id'];

$sql_pessoa = "DELETE FROM usuario, profissional USING usuario, profissional WHERE "
        . "usuario.id = $id AND profissional.id_usuario = $id";

mysqli_query($conexao, $sql_pessoa);

echo $sql_pessoa;

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso_excluir.php');
} else {
    header('Location: ./modal_erro_excluir.php');
}
