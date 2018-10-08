<?php
include_once '../bd/conectar.php';
session_start();

ini_set("display_errors", true);

$sql = "select * from usuario where username = '$_SESSION[username]'";
echo $sql;

$retorno_id = mysqli_query($conexao, $sql);

$array = mysqli_fetch_object($retorno_id);


$nome = $_POST['nome'];
$data = $_POST['data'];
$descricao = $_POST['descricao'];
$id_usuario = $_POST['id_usuario'];
echo "sad" . $data;

$sql_trabalho = "insert into trabalho(nome, descricao, data_trab, id_usuario)"
        . " values('$nome', '$descricao', '$data', $id_usuario)";

echo $sql_trabalho;
mysqli_query($conexao, $sql_trabalho);



if (mysqli_affected_rows($conexao) > 0) {
    header('Location: ./modal_sucesso.php');
} else {
    header('Location: ./modal_erro.php');
}
