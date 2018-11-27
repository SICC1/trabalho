<?php
include '../cabecalho.php';
$id_parcerias = $_GET['id'];

$sql = "select * from parcerias where id = $id_parcerias";

$query = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($query);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="alterar.php">
        <input type="hidden" name="id" value="<?= $linha['id'] ?>">
        <div class="row">
            <div class="col-12" style="text-align: center">
                <h1>Formulário de Alteração</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Logo:</label>
<!--                <input type="text" name="nome" class="form-control" placeholder="Nome" required>-->
            </div>
            <div class="col-md-4 mb-3">
                <label>Nome da empresa:</label>
                <input type="text" name="nome" class="form-control" value="<?= $linha['nome'] ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Descrição:</label>
            </div>
            <textarea name="descricao" class="form-control" required><?= $linha['descricao'] ?></textarea>
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enviar registro</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar inserção de dados.</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enviar registros.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Comfirmar</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div align="center" class="form-group">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#Modal_excluir">Excluir</button>
        <div class="modal fade" id="Modal_excluir" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmar exclusão.</h4>
                    </div>
                    <div class="modal-body">
                        <p>Deseja realmente excluir?</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" onclick="excluir()">Comfirmar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                    <script>
                        function excluir() {
                            window.location = "excluir.php?id=<?= $id_parcerias ?>";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include '../rodape.php';

