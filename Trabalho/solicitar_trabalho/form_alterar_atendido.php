<?php
include '../cabecalho.php';

$id = $_GET['id'];
$id_prof = $_GET['id_profissional'];
$mostrar = $_GET['mostrar'];

$sql_solicitacao = "select * from solicitar_trabalho where id = $id";

$retorno = mysqli_query($conexao, $sql_solicitacao);

$linha = mysqli_fetch_array($retorno);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="alterar_atendido.php">
        <input type="hidden" name="id" value="<?= $linha['id'] ?>">
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h1>Formulário de Alteração</h1>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $linha['nome'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" value="<?= $linha['sobrenome'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Celular</label>
                <input type="number" name="celular" class="form-control" value="<?= $linha['celular'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" value="<?= $linha['email'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="<?= $linha['password'] ?>" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Nome do Trabalho</label>
                <input type="text" name="nome_trabalho" class="form-control" value="<?= $linha['nome_trabalho'] ?>" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Tipo de Trabalho</label>
                <input type="text" name="tipo" class="form-control" value="<?= $linha['tipo'] ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Descrição:</label>
            </div>
            <div class="col-md-1">
                <a href="">Anexo</a>
            </div>
            <textarea name="descricao" class="form-control" required><?= $linha['descricao'] ?></textarea>
        </div>
        <div align="center" class="form-group">
            <?php
            if ($_SESSION['id'] == $id_prof && $mostrar == 10) {
                ?>
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#concluir">Concluir trabalho</button>
                <div class="modal fade" id="concluir" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Confirmar a conclusão do trabalho</h4>
                            </div>
                            <div class="modal-body">
                                <p>Deseja passar o estado desse trabalho como concluído?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="concluir()">Confirmar</button>
                                <script>
                                    function concluir() {
                                        window.location = "concluir_solicitacao.php?id=<?= $id ?>&id_profissional=<?= $_SESSION['id'] ?>";
                                    }
                                </script>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alterar</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Modificações</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar alteração</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enviar registros para fazer alteração?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Confirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
//include 'listar.php';
include '../rodape.php';
