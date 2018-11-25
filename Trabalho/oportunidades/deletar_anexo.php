<?php

include_once '../conectar.php';
$id_arquivo = $_GET['id'];
$id_pagina = $_GET['id_pagina'];

$sql_arquivo_oportunidades = "select * from arquivo_oportunidades where id_arquivo = $id_arquivo";
$conexao_arquivo_oportunidades = mysqli_query($conexao, $sql_arquivo_oportunidades);
$linha_arquivo = mysqli_fetch_array($conexao_arquivo_oportunidades);

$sql_code = "select * from arquivos where id_arquivo = '$linha_arquivo[id_arquivo]'";

$execute_sql = mysqli_query($conexao, $sql_code);
$imagem_sql = mysqli_fetch_array($execute_sql);
echo '../uploads/' . $imagem_sql['nome_arquivo'];
if (mysqli_affected_rows($conexao) > 0) {
    do {
        if (is_file('../uploads/' . $imagem_sql['nome_arquivo'])) {
            echo $imagem_sql['nome_arquivo'] . $imagem_sql['id_arquivo'] . "<br>";
            $deletar = unlink('../uploads/' . $imagem_sql['nome_arquivo']);
            echo $deletar;
            
        }
    } while ($imagem_sql = mysqli_fetch_array($execute_sql));
    $sql_deletando_arquivo_oportunidades = "delete from arquivo_oportunidades where id_oportunidades = " . $linha_arquivo['id_oportunidades'] . " ;";
            mysqli_query($conexao, $sql_deletando_arquivo_oportunidades);
            $sql_deletando = "delete from arquivos where nome_arquivo ='$imagem_sql[nome_arquivo]' ";
            mysqli_query($conexao, $sql_deletando);

            if (mysqli_affected_rows($conexao > 0)) {
                header("Location: form_alterar.php?id=" . $id_pagina);
            } else {
                header("Location: form_alterar.php?id=" . $id_pagina);
            }
}