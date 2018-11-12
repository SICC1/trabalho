<?php

include_once '../conectar.php';

$id = $_GET['id'];


$sql = "delete from solicitar_trabalho where id = $id";

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) > 0) {
    header("Location: ./modal_sucesso_excluir.php");
} else {
    header("Location: ./modal_erro_excluir.php?id=$id");
}