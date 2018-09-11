<?php
include '../cabecalho.php';
?>  


<?php
$id = $_GET['id'];
include '../bd/conectar.php';
$sql_pessoa = "select id, nome from curso where id = $id";

$resultado = pg_query($conexao, $sql_pessoa);

$linha = pg_fetch_array($resultado);
?>



<form method="post" action="alterar.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>">
    <input type="submit" value="Alterar">
</form>



</body>
</html>
