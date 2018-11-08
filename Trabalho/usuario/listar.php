<?php
session_start();
include '../cabecalho.php';
include '../conectar.php';

$sql_pessoa = "select * from usuario where username != '$_SESSION[username]'";

$resultado = mysql_query($conexao, $sql_pessoa);
?>
<h1>Usuários</h1>
<form action="excluir_lote.php" method="post">
    <table border="1">
        <tr>
            <td>#</td><td>Nome</td><td>Excluir</td><td>Alterar</td>
        </tr>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
            ?>
            <td><input type="checkbox" name="id[]" value="<?= $linha['id'] ?>"</td>

            <td><?= $linha['username'] ?></td>

            <td><a href="excluir.php?id=<?= $linha['id'] ?>">
                    <img src="../img/excluir.jpeg" height="30" width="30"/></a></td>

            <td><a href="form_alterar.php?id=<?= $linha['id'] ?>">
                    <img src="../img/alterar.png" height="30" width="30"/></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
    <input type="submit" value="Excluir">

</form>

