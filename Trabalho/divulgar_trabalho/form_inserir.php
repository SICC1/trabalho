<?php
include '../cabecalho.php';
include '../bd/conectar.php';

//$sql = "SELECT DATE_FORMAT(now(), '%m %d %Y') as data"; modo para visualizar a data no formato do brasil

$sql = "SELECT now() as data";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="inserir.php">
        <input type="hidden" name="id_usuario" value="<?= $_SESSION['id'] ?>">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
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
            <textarea name="descricao" class="form-control" placeholder="Descrição..." required></textarea>
<!--<input type="text" name="descricao" class="form-control" placeholder="Descrição" required>-->
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Divulgar</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
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
</div>
<?php
//include 'listar.php';
include '../rodape.php';
