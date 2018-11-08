<?php

//session_start();
include '../conectar.php';

ini_set("display_errors", true);
$id_trabalho = $_POST['id_trabalho'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$descricao = $_POST['descricao'];

$sql_usuario = "insert into comentario ( id_trabalho, nome, telefone, email, descricao, data_inserida) values ('$id_trabalho', '$nome','$telefone','$email', '$descricao', now())";


$recurso_usuario = mysqli_query($conexao, $sql_usuario);

$ultimo_id = mysqli_insert_id($conexao);


if ($ultimo_id == 0) {
    $sql = "delete from comentario where id = $ultimo_id";
    mysqli_query($conexao, $sql);
    echo $sql;
}

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso_comentario.php');
} else {
    header('Location: ./modal_erro_comentario.php');
}

