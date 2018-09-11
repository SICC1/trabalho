<?php
ini_set('display_errors', true);

$id = $_POST['id'];
$id_usuario= $_POST['id_usuario'];
$nome = $_POST['nome'];
$password = $_POST['password'];
$data_nasc = $_POST['data_nasc'];
$telefone = $_POST['telefone'];
$depto = $_POST['depto'];

include '../bd/conectar.php';

$sql_profissional = "update profissional set nome='$nome', data_nasc='$data_nasc', telefone='$telefone', depto='$depto' "
        . "where id_usuario = $id_usuario";

echo $sql_profissional;

$recurso_profissional = mysqli_query($conexao, $sql_profissional);

$ultimo_id = mysqli_insert_id($conexao);

$sql_usuario = "update usuario set password = $password where id = $id_usuario";

mysqli_query($conexao, $sql_usuario);

header('Location: perfilProfissional.php');
