<?php
include_once '../conectar.php';

//$logo = $_POST['imagem'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$sql = "update parcerias set nome='$nome', descricao='$descricao'";

echo $sql;
mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao) > 0){
    header('Location: modal_sucesso.php');
} else {
    header('Location: modal_erro.php');
}