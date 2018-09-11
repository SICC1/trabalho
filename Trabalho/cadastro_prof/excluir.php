<?php

ini_set("display_errors", true);

include '../bd/conectar.php';

$id = $_GET['id'];

$sql_pessoa = "delete from profissional where id= $id";

pg_query($conexao, $sql_pessoa);

header('Location: form_inserir.php');