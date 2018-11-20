<?php
include_once '../conectar.php';

$id = $_POST['id'];
//$logo = $_POST['imagem'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];


$sql = "update oportunidades set nome='$nome', descricao ='$descricao' where id = $id";

echo $sql;
mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) > 0){
    header('Location: modal_sucesso_alterar.php');
} else {
    header('Location: modal_erro_alterar.php');
}