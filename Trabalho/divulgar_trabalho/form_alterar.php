<?php
include '../cabecalho.php';
?>  


<?php
$id = $_GET['id'];
include '../bd/conectar.php';
$sql_pessoa = "select * from trabalho where id = $id";

$resultado = mysqli_query($conexao, $sql_pessoa);

$linha = mysqli_fetch_array($resultado);
?>
<form method="post" action="alterar.php">
    <input type="hidden" name="id" value="<?= $id ?>">
    Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>">
    <input type="hidden" name="data_trab" value="<?= $linha['data_trab'] ?>">
    Descrição: <input type="text" name="nome" value="<?= $linha['descricao'] ?>">
    <input type="submit" value="Alterar">
</form>



</body>
</html>
