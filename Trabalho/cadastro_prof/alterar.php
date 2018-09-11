<?php
ini_set('display_errors', true);

$id = $_POST['id'];
$id_usuario= $_POST['id_usuario'];
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

include '../bd/conectar.php';

$sql_profissional = "update profissional set nome='$nome', data_nasc='$data_nasc', telefone='$telefone', depto='$depto', "
        . "sobrenome='$sobrenome', email='$email', celular='$celular', cargo='$cargo', cpf='$cpf', "
        . "endereco='$endereco', cep='$cep', sexo='$sexo' where id_usuario = $id_usuario";

echo $sql_profissional;

$recurso_profissional = mysqli_query($conexao, $sql_profissional);

$ultimo_id = mysqli_insert_id($conexao);

$sql_usuario = "update usuario set password = $password where id = $id_usuario";

echo '<br>' . $sql_usuario;
mysqli_query($conexao, $sql_usuario);

header('Location: ../confirmar_cadastro/listar.php');
