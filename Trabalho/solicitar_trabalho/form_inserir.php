<?php
include '../cabecalho.php';
include '../bd/conectar.php';

//$sql = "SELECT DATE_FORMAT(now(), '%m %d %Y') as data"; modo para visualizar a data no formato do brasil
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="inserir.php">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Telefone</label>
                <input type="number" name="telefone" class="form-control" placeholder="Telefone" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Celular</label>
                <input type="number" name="celular" class="form-control" placeholder="Celular" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha (caso precise de alterações)" required>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Nome do Trabalho</label>
                <input type="text" name="nome_trabalho" class="form-control" placeholder="Nome do Trabalho" required>
            </div>
            <div class="col-md-6 mb-3">
                <label>Tipo de Trabalho</label>
                <input type="text" name="tipo" class="form-control" placeholder="Tipo de Trabalho" required>
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
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Divulgar</button>
            <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmar solicitação</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enviar registros de solicitação de trabalhos?</p>
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
