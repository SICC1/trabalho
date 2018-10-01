<?php

session_start();
include '../bd/conectar.php';

ini_set("display_errors", true);

$sql = "select * from usuario where username = '$_SESSION[username]'";


$retorno_id = mysqli_query($conexao, $sql);

$array = mysqli_fetch_object($retorno_id);

//echo $array->id;

$nome = $_POST['nome'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$id_usuario = $_POST['id_usuario'];

$recurso_usuario = mysqli_query($conexao, $sql_usuario);

if ($array->id_usuario == 0) {
    $sql = "delete * from trabalho where id_usuario = '$array->id_usuario'";
//    mysqli_query($conexao, $sql);
} else {
//    $sql = "insert into profissional (nome, sobrenome, email, data_nasc, telefone, depto, id_usuario, celular, cargo, "
//            . "cpf, endereco, cep, sexo, profissao, dia_hora_cadastrado) values ('$nome', '$sobrenome', '$email','$data_nasc',$telefone,'$depto', $ultimo_id, $celular, '$cargo', '$cpf', '$endereco', "
//            . " '$cep', '$sexo', '$profissao', now())";

    $sql = "insert into trabalho (nome, data, descricao, usuario_id) values ('$nome', '$data', '$descricao', $array->id_usuario)";
    echo $sql;
//    mysqli_query($conexao, $sql);
}

//if (mysqli_affected_rows($conexao) > 0) {
//    header('Location: ./modal_sucesso.php');
//} else {
//    header('Location: ./modal_erro.php');
//}



