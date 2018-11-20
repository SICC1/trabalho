<?php
include '../cabecalho.php';
include '../conectar.php';

//$sql = "SELECT DATE_FORMAT(now(), '%m %d %Y') as data"; modo para visualizar a data no formato do brasil

$sql = "SELECT now() as data";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);

$id = $_GET['id'];
$sql_oportunidades = "select * from oportunidades where id = $id";
$resultado_oportunidades = mysqli_query($conexao, $sql_oportunidades);
$linha_oportunidades = mysqli_fetch_array($resultado_oportunidades);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="alterar.php">
        <input type="hidden" name="id" value="<?= $linha_oportunidades['id'] ?>">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" value="<?= $linha_oportunidades['nome'] ?>" required>
            </div>
            <div class="col-md-4 mb-3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Descrição:</label>
            </div>
            <div class="col-md-1">
                <a href="">Anexo</a>
            </div>
            <textarea name="descricao" class="form-control" placeholder="Descrição..." required><?= $linha_oportunidades['descricao'] ?></textarea>
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Alterar</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Modificações</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar divulgação</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enviar registros.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Inserir</button>
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
                            window.location = "excluir.php?id=<?= $id ?>";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
//include 'listar.php';
include '../rodape.php';
