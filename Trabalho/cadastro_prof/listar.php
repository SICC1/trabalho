<?php

session_start();
include '../bd/conectar.php';

ini_set("display_errors", true);


//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";
$sql = "select * from profissional";
$resultado = mysqli_query($conexao, $sql);
?>

<table border="1" id="table_listar_cadastro">
    <tr>
        <td>Nome</td><td>Data nasc.</td><td>Telefone</td><td>Depto</td><td>Excluir</td><td>Alterar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr align="center">
            
            <td><?= $linha['nome']?></td>
            <td><?= $linha['data_nasc']?></td>
            <td><?= $linha['telefone']?></td>
            <td><?= $linha['depto']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id']?>">
              <img src="../img/excluir.jpeg" height="30" width="30"/></a></td>
            
            <td><a href="form_alterar.php?id=<?= $linha['id']?>">
              <img src="../img/alterar.png" height="30" width="30"/></a></td>
        </tr>
    <?php
}
?>

</table>

