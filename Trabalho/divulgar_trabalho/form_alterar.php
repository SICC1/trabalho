<?php
include_once '../cabecalho.php';
include_once '../conectar.php';

$id = $_GET['id'];
$sql_pessoa = "select * from trabalho where id = $id";
$sql_data = "select now() as data_trab";

$resultado_data = mysqli_query($conexao, $sql_data);
$linha_data = mysqli_fetch_array($resultado_data);

$resultado = mysqli_query($conexao, $sql_pessoa);

$linha = mysqli_fetch_array($resultado);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="alterar.php">
        <input type="hidden" name="id" value="<?= $linha['id'] ?>">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="hidden" name="data_trab" value="<?= $linha_data['data_trab'] ?>">
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?= $linha['nome'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <input type="hidden" name="data" placeholder="<?= $linha['data'] ?>" value="<?= $linha['data'] ?>" class="form-control" required>
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
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Salvar alterações</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar alterações</h4>
                        </div>
                        <div class="modal-body">
                            <p>Confirmar alterações.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Confirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_excluir">Excluir trabalho</button>
            <div class="modal fade" id="modal_excluir" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar exclusão.</h4>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza que deseja realmente excluir?</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="button" onclick="excluir()">Confirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function excluir() {
                    window.location = "excluir.php?id=<?= $linha['id'] ?>";
                }
            </script>
        </div>
    </form>

</div>

<?php
//include 'listar.php';
include '../rodape.php';

