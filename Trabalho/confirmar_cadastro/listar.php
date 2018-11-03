<?php
include '../bd/conectar.php';

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
            <td>Nome</td><td>Data nasc.</td><td>Telefone</td><td>profissão</td><td>Depto</td><td>Excluir</td><td>Confirmar</td><td>Alterar</td>
        </tr>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
            <input type="hidden" name="id" value="<?php $linha[id] ?>">
            <td><?= $linha['nome'] ?></td>
            <td><?= $linha['data_nasc'] ?></td>
            <td><?= $linha['telefone'] ?></td>
            <td><?= $linha['profissao'] ?></td>
            <td><?= $linha['depto'] ?></td>


            <div class='modal fade' id='modal_excluir' role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deseja realmente excluir?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Deseja excluir o pedido de cadastro do profissional?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="modal_excluir()" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class='modal fade' id='modal_confirmar' role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Deseja realmente confirmar?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Deseja confirmar o pedido de cadastro do profissional?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="modal_confirmar()" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                function modalExluir() {
                    $('#documents').ready(function() {
                        $('#modal_excluir').modal('show');
                    });
                }
                function modal_excluir() {
                    window.location = "excluir.php?id=<?= $linha['id_usuario'] ?>";
                }

                function modalConfirmar() {
                    $('#documents').ready(function() {
                        $('#modal_confirmar').modal('show');
                    });
                }
                function modal_confirmar() {
                    window.location = "confirmar.php?id=<?= $linha['id_usuario'] ?>";
                }

            </script>

            <td>
                <a>
                    <img src="../img/excluir.jpeg" class="img-thumbnail" width="50" onclick="modalExluir()"/></a>
            </td>

            <td align="center">
                <a>
                    <img src="../img/ativar.png" class="img-thumbnail" width="50" onclick="modalConfirmar()"/></a>
            </td>

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