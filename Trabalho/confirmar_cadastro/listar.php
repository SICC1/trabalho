<?php
include '../bd/conectar.php';

ini_set("display_errors", true);


//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

$sql = "select * from usuario, profissional where usuario.id = profissional.id_usuario and admin = 0";
$resultado = mysqli_query($conexao, $sql);
include '../cabecalho.php';
?>
<h1 align="center">Confirmar cadastros de profissionais</h1>
<div class="col-md-8 container-fluid" align="center">
<table class="table-bordered table-active table-hover" border="1">
    <tr>
        <td>Nome</td><td>Data nasc.</td><td>Telefone</td><td>profissão</td><td>Depto</td><td>Excluir</td><td>Confirmar</td><td>Alterar</td>
    </tr>
    <?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <input type="hidden" name="id" value="<?php $linha[id]?>">
            <td><?= $linha['nome']?></td>
            <td><?= $linha['data_nasc']?></td>
            <td><?= $linha['telefone']?></td>
            <td><?= $linha['profissao']?></td>
            <td><?= $linha['depto']?></td>
            
            <td><a href="excluir.php?id=<?= $linha['id_usuario']?>">
                    <img src="../img/excluir.jpeg" class="img-thumbnail" width="50"/></a></td>
              
              <td align="center"><a href="confirmar.php?id=<?= $linha['id_usuario']?>">
                      <img src="../img/ativar.png" class="img-thumbnail" width="50"/></a></td>
                
                <td><a href="../cadastro_prof/form_alterar.php?id=<?= $linha['id_usuario']?>">
                        <img src="../img/alterar.png" class="img-thumbnail" width="50"></a></td>
        </tr>
    <?php
}
?>

</table>
</div>