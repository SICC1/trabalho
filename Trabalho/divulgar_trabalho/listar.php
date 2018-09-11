<?php

session_start();
include '../bd/conectar.php';

ini_set("display_errors", true);


//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

//$resultado = pg_query($conexao, $sql);
?>

<table border="1">
    <tr>
        <td>Nome</td><td>Excluir</td><td>Alterar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            
            <td><?= $linha['nome']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id']?>">
              <img src="../img/excluir.jpeg" height="30" width="30"/></a></td>
            
            <td><a href="form_alterar.php?id=<?= $linha['id']?>">
              <img src="../img/alterar.png" height="30" width="30"/></a></td>
        </tr>
    <?php
}
?>

</table>

