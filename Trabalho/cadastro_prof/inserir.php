<?php

//session_start();
include '../bd/conectar.php';

ini_set("display_errors", true);

$username = $_POST['username'];
$password = $_POST['password'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nasc = $_POST['data_nasc'];
$telefone = $_POST['telefone'];
$depto = $_POST['depto'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$cargo = $_POST['cargo'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$sexo = $_POST['sexo'];
$profissao = $_POST['profissao'];
//$sql = "select id from usuario where username = '$_SESSION[username]'";
//
//$retorno_id = pg_query($conexao, $sql);
//
//$usuario_id = pg_fetch_array($retorno_id);
//                                                                                        returning id
$sql_usuario = "insert into usuario ( username, password) values ('$username', '$password')";


//echo $sql_usuario;
//$ultimo_id = "select max(id) from usuario";


$recurso_usuario = mysqli_query($conexao, $sql_usuario);

$ultimo_id = mysqli_insert_id($conexao);
echo $ultimo_id;
if ($ultimo_id == 0) {
    $sql = "delete * from profissional where id_usuario = '$ultimo_id'";
} else {
    $sql = "insert into profissional (nome, sobrenome, email, data_nasc, telefone, depto, id_usuario, celular, cargo, "
            . "cpf, endereco, cep, sexo, profissao, dia_hora_cadastrado) values ('$nome', '$sobrenome', '$email','$data_nasc',$telefone,'$depto', $ultimo_id, $celular, '$cargo', '$cpf', '$endereco', "
            . " '$cep', '$sexo', '$profissao', now())";
    echo $sql;
    mysqli_query($conexao, $sql);
}

if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso.php');
} else {
    header('Location: ./modal_erro.php');
}

