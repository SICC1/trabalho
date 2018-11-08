<?php

ini_set('display_errors', true);

$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$password = $_POST['password'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$data_nasc = $_POST['data_nasc'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$depto = $_POST['depto'];
$cargo = $_POST['cargo'];
$profissao = $_POST['profissao'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];

include '../conectar.php';

$sql_profissional = "update profissional set nome='$nome', sobrenome='$sobrenome', email='$email', cpf='$cpf'"
        . ", sexo='$sexo', data_nasc='$data_nasc', telefone='$telefone', celular='$celular', depto='$depto' "
        . ", cargo='$cargo', profissao='$profissao', cep='$cep', endereco='$endereco' where id_usuario = $id_usuario";

echo $sql_profissional;

$recurso_profissional = mysqli_query($conexao, $sql_profissional);

$ultimo_id = mysqli_insert_id($conexao);

$sql_usuario = "update usuario set password = $password where id = $id_usuario";

mysqli_query($conexao, $sql_usuario);

header('Location: perfilProfissional.php');
