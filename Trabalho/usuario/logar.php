<?php

include './autenticacao.php';

ini_set("display_errors", true);

$username = $_POST['username'];

$password = $_POST['password'];

include '../bd/conectar.php';

$sql = "select * from usuario where username = '$username' and password = '$password' and admin != 0";

$retorno = mysqli_query($conexao, $sql);

$resultado = mysqli_fetch_array($retorno);

if ($resultado == null) {
    header('Location: erro_logar.php');
} else {
    logar($resultado['username'], $resultado['id'], $resultado['admin']);
    header('Location: ../index.php');
}