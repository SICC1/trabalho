<?php

ini_set("display_errors", true);

include '../conectar.php';

$id = $_POST['id'];

foreach ($id as $value) {
    $sql_pessoa = "insert into usuario(admin) values(1) where id= $value";
    mysqli_query($conexao, $sql_pessoa);
}

header('Location: listar.php');
