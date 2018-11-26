<?php
include '../conectar.php';

//ini_set("display_errors", true);
//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

$sql = "select * from usuario, profissional where usuario.id = profissional.id_usuario and admin = 0";
$resultado = mysqli_query($conexao, $sql);
include '../cabecalho.php';
?>
<h1 align="center">Confirmar cadastros de profissionais</h1>
<div class="col-md-8 container-fluid" align="center">
    <table class="table-bordered table-active table-hover" border="1">
        <tr>
            <td>Nome</td><td>Data nasc.</td><td>Celular</td><td>profissão</td><td>Depto</td><td>Excluir</td><td>Confirmar</td><td>Alterar</td>
        </tr>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['data_nasc'] ?></td>
            <td><?= $linha['celular'] ?></td>
            <td><?= $linha['profissao'] ?></td>
            <td><?= $linha['depto'] ?></td>
            <div class='modal fade' id="modal_excluir<?= $linha['id_usuario'] ?>" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deseja realmente excluir?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Deseja excluir o pedido de cadastro do profissional?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="modal_excluir<?= $linha['id_usuario'] ?>()" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class='modal fade' id="modal_confirmar<?= $linha['id_usuario'] ?>" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deseja realmente confirmar?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Deseja confirmar o pedido de cadastro do profissional?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="modal_confirmar<?= $linha['id_usuario'] ?>()" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <td>
                <a>
                    <img src="../img/excluir.jpeg" class="img-thumbnail" width="50" onclick="modalExluir<?= $linha['id_usuario'] ?>()"/></a>
            </td>
            <td align="center">
                <a>
                    <img src="../img/ativar.png" class="img-thumbnail" width="50" onclick="modalConfirmar<?= $linha['id_usuario'] ?>()"/></a>
            </td>
            
            <script>
                function modalExluir<?= $linha['id_usuario'] ?>() {
                    $('#documents').ready(function() {
                        $("#modal_excluir<?= $linha['id_usuario'] ?>").modal('show');
                    });
                }
                function modal_excluir<?= $linha['id_usuario'] ?>() {
                    window.location = "excluir.php?id=<?= $linha['id_usuario'] ?>";
                }

                function modalConfirmar<?= $linha['id_usuario'] ?>() {
                    $('#documents').ready(function() {
                        $("#modal_confirmar<?= $linha['id_usuario'] ?>").modal('show');
                    });
                }
                function modal_confirmar<?= $linha['id_usuario'] ?>() {
                    window.location = "confirmar.php?id=<?= $linha['id_usuario'] ?>";
                }

            </script>
            <td><a href="../cadastro_prof/form_alterar.php?id=<?= $linha['id_usuario'] ?>">
                    <img src="../img/alterar.png" class="img-thumbnail" width="50"></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
<?php
include_once '../rodape.php';
?>