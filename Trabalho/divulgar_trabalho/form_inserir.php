<?php
include '../cabecalho.php';
include '../bd/conectar.php';

$sql = "SELECT DATE_FORMAT(now(), '%m %d %Y') as data";

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);

?>
<div class="col-md-8 container-fluid" id="div-cor1">
    <form method="post" action="inserir.php">
        <input type="hidden" name="id_usuario">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Data</label>
                <input type="text" disabled="true" name="data" placeholder="<?=  $linha['data'];  ?>" class="form-control" required>
            </div>    
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>Descrição</label>
                <textarea name="descricao" class="form-control" placeholder="Descrição..." required></textarea>
                <!--<input type="text" name="descricao" class="form-control" placeholder="Descrição" required>-->
            </div>
        </div>
        <div align="center" class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Aceitar os Termos e as Condições
                </label>
            </div>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Cadastrar-se</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar cadastro</h4>
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

        <?php
        //include 'listar.php';
include '../rodape.php';