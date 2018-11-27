<?php
ini_set('display_errors', true);
include '../conectar.php';

$id_usuario = $_POST['id'];
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

$sql_profissional = "update profissional set nome=$nome, data_nasc=$data_nasc,  depto=$depto, "
        . "sobrenome=$sobrenome, email=$email, celular=$celular, cargo=$cargo, cpf=$cpf, "
        . "endereco=$endereco, cep=$cep, sexo=$sexo, profissao=$profissao where id_usuario = $id_usuario";

echo $sql_profissional;

$recurso_profissional = mysqli_query($conexao, $sql_profissional);

$ultimo_id = mysqli_insert_id($conexao);

$sql_usuario = "update usuario set password = $password where id = $id_usuario";

echo '<br>' . $sql_usuario;
mysqli_query($conexao, $sql_usuario);


header('Location: ../confirmar_cadastro/listar.php');


