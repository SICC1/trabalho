<?php

//session_start();
include '../conectar.php';

ini_set("display_errors", true);


$username = "'" . $_POST['username'] . "'";
$password = $_POST['password'];
$nome = "'" . $_POST['nome'] . "'";
$sobrenome = "'" . $_POST['sobrenome'] . "'";
$data_nasc = "'" . $_POST['data_nasc'] . "'";
$depto = "'" . $_POST['depto'] . "'";
$email = "'" . $_POST['email'] . "'";
$celular = "'" . $_POST['celular'] . "'";
$cargo = "'" . $_POST['cargo'] . "'";
$cpf = $_POST['cpf'];
$endereco = "'" . $_POST['endereco'] . "'";
$cep = $_POST['cep'];
$sexo = "'" . $_POST['sexo'] . "'";
$profissao = "'" . $_POST['profissao'] . "'";
echo $username;
if ($sobrenome == "''") {
    $sobrenome = 'null';
}
if ($depto == "''") {
    $depto = 'null';
}
if ($celular == "''") {
    $celular = 0;
}
if ($cargo == "''") {
    $cargo = 'null';
}
if ($endereco == "''") {
    $endereco = 'null';
}
if ($data_nasc == "''") {
    $data_nasc = 'null';
}

$username = "'" . $username . "'";


$sql_usuario = "insert into usuario (username, password) values ($username, $password)";

echo $sql_usuario;
$recurso_usuario = mysqli_query($conexao, $sql_usuario);

$ultimo_id = mysqli_insert_id($conexao);
echo $ultimo_id;

if ($ultimo_id == 0) {
    $sql = "delete from usuario where username = $username";
    mysqli_query($conexao, $sql);
    echo $sql;
} else {
    $sql = "insert into profissional (nome, sobrenome, email, data_nasc, depto, id_usuario, celular, cargo, "
            . "cpf, endereco, cep, sexo, profissao, dia_hora_cadastrado) values ($nome, $sobrenome, $email, $data_nasc, $depto, $ultimo_id, $celular, $cargo, $cpf, $endereco, "
            . " $cep, $sexo, $profissao, now())";
    echo $sql;
    mysqli_query($conexao, $sql);
}

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso.php');
} else {
    $sql = "delete from usuario where username = $username";
    mysqli_query($conexao, $sql);
    header('Location: ./modal_erro.php');
}

