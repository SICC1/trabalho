<?php

//Desenvolvimento
$localhost = "localhost";
$username1 = "root";
$password1 = "ikimimaro100";
$dbname = "trabalho";
$url = "http://localhost/Trabalho";

//Produção
//$url = "http://sicc-tubarao.freevar.com";
//$localhost = "localhost";
//$username1 = "1123229";
//$password1 = "sicc12345";
//$dbname = "1123229";

$conexao = mysqli_connect("$localhost", "$username1", "$password1", "$dbname", "3306");
