<?php
include './autenticacao.php';

ini_set("display_errors", true);

$username = $_POST['username'];

$password = $_POST['password'];

include '../bd/conectar.php';
include_once '../cabecalho.php';

$sql = "select * from usuario where username = '$username' and password = '$password' and admin != 0";

$retorno = mysqli_query($conexao, $sql);

$resultado = mysqli_fetch_array($retorno);

if ($resultado == null) {
?><?php echo " 
 <div class='alert alert-danger'>
  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
</div> ";
 include_once '../index.php';
} else {
logar($resultado['username'], $resultado['id'], $resultado['admin']);

header('Location: ../index.php');
}



