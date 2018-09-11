<?php

ini_set("display_errors", true);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


include '../bd/conectar.php';

$sql = "insert into usuario (username,, password, email) values ('$username', '$password', '$email')";

if (@pg_query($conexao, $sql)){
    echo 'Cadastro realizado com sucesso <br> <a href=form_login.php>OK</a>';
}else {
    echo 'Usuário ou e-mail já cadastrados <br> <a href=form_inserir.php>OK</a>';
}
//header('Location: form_inserir.php');
?>



