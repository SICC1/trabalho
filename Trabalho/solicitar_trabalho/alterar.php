<?php
include_once '../conectar.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$password = $_POST['password'];
$nome_trabalho = $_POST['nome_trabalho'];
$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];

$sql = "update solicitar_trabalho set nome='$nome', sobrenome='$sobrenome', "
        . "celular=$celular, email='$email', password='$password', "
        . "nome_trabalho='$nome_trabalho', tipo='$tipo', descricao='$descricao' where id = $id";

echo $sql;
mysqli_query($conexao, $sql);

if (mysqli_affected_rows($conexao) > 0){
    header('Location: modal_sucesso_alteracao.php');
} else {
    header('Location: modal_erro_alteracao.php');
}