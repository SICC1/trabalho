<?php
include '../cabecalho.php';
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="inserir.php">
        <div class="row" style="text-align: center">
            <h3>Cadastre sua empresa</h3>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Logo:</label>
<!--                <input type="text" name="nome" class="form-control" placeholder="Nome" required>-->
            </div>
            <div class="col-md-4 mb-3">
                <label>Nome da empresa:</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Descrição:</label>
            </div>
            <textarea name="descricao" class="form-control" placeholder="Descrição..." required></textarea>
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
</div>
<?php
include '../rodape.php';

