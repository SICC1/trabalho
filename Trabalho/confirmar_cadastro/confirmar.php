<?php

$id = $_GET['id'];

include '../conectar.php';

$sql_pessoa = "update usuario set admin=1 where id=$id";
echo $sql_pessoa;
mysqli_query($conexao, $sql_pessoa);


if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso_confirmar.php');
} else {
    header('Location: ./modal_erro_confirmar.php');
}

//header('Location: listar.php');
