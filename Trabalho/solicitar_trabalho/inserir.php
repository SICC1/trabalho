<?php

//session_start();
include '../conectar.php';

ini_set("display_errors", true);

$nome = $_POST['nome'];
$password = $_POST['password'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$descricao = $_POST['descricao'];
$nome_trabalho = $_POST['nome_trabalho'];
$tipo = $_POST['tipo'];

$sql = "insert into solicitar_trabalho(nome, password, sobrenome, email, celular,"
        . " descricao, nome_trabalho, tipo, data_inserida) values ('$nome', '$password', '$sobrenome', "
        . "'$email', $celular, '$descricao', '$nome_trabalho', '$tipo', now())";

echo $sql;

mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso.php');
} else {
    header('Location: ./modal_erro.php');
}

