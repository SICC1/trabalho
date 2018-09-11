<?php

$id = $_POST['id'];
$nome = $_POST['nome'];

include '../bd/conectar.php';

$sql_pessoa = "update curso set nome='$nome' where id = $id";

pg_query($conexao, $sql_pessoa);

header('Location: form_inserir.php');
