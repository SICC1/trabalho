<?php
include '../cabecalho.php';

//$sql = "SELECT DATE_FORMAT(now(), '%m %d %Y') as data"; modo para visualizar a data no formato do brasil
$sql = "SELECT now() as data";
$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);

$nome_admin = "select * from usuario where admin = 2";

$retorno_admin = mysqli_query($conexao, $nome_admin);
$linha_admin = mysqli_fetch_array($retorno_admin);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <form method="post" action="enviar.php">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <input type="hidden" name="nome_admin" value="<?= $linha_admin['username'] ?>">
                <label>Administrador do site: <?= $linha_admin['username'] ?></label>
            </div>
            <div class="col-md-8 mb-3">
                E-mail: siccsistema@gmail.com
            </div>
        </div>
        <div class="row">
            <h3>Localidade</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p>Rua Deputado Olices Pedra de Caldas</p>
                <p>nº 480 - Dehon</p>
                <p>Tubarão - SC</p>
                <p>Cep:&nbsp;88704-296</p>

            </div>
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-21by9">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.1774294998345!2d-49.02789578543496!3d-28.474202782480425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952142615b5dc85d%3A0xa13ab559b5073c55!2sIFSC+-+C%C3%A2mpus+Tubar%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1541189892624" width="100" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
        <div class="row">
            <h3>Envie sua mensagem</h3>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Seu nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>E-mail:</label>
                <input type="text" name="email" class="form-control" placeholder="E-mail" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Mensagem:</label>
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

