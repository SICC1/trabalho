<?php
include_once '../cabecalho.php';
include_once '../conectar.php';

$id = $_GET['id'];
$sql = "select * from solicitar_trabalho where id = $id";

$id_pegar_id_usuario = $_SESSION['id'];
$id_usuario = "select id from usuario where id = $id_pegar_id_usuario";
$resultado_usuario = mysqli_query($conexao, $id_usuario);
$linha_usuario = mysqli_fetch_array($resultado_usuario);

$resultado = mysqli_query($conexao, $sql);

$linha = mysqli_fetch_array($resultado);
?>
<div class="col-md-8 container-fluid" id="div-cor2">
    <h1>Informações do(a) <?= $linha['nome'] ?></h1>
    <form method="post" action="#">
        <input name="id_usuario" type="hidden" value="<?= $linha_usuario['id'] ?>">
        <div class="form-row">
            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
            <div class="col-md-4 mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" value="<?= $linha['nome'] ?>" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome" value="<?= $linha['sobrenome'] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Celular</label>
                <input type="number" name="celular" class="form-control" placeholder="Celular" value="<?= $linha['celular'] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?= $linha['email'] ?>" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="<?= $linha['password'] ?>" disabled>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>Nome do Trabalho</label>
                <input type="text" name="nome_trabalho" class="form-control" value="<?= $linha['nome_trabalho'] ?>" disabled>
            </div>
            <div class="col-md-6 mb-3">
                <label>Tipo de Trabalho</label>
                <input type="text" name="tipo" class="form-control" disabled value="<?= $linha['tipo'] ?>" required>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <a>Data do trabalho: <?= $linha['data_inserida'] ?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <label>Descrição:</label>
            </div>
            <div class="col-md-1">
                <a href="">Anexo</a>
            </div>
            <textarea name="descricao" class="form-control" disabled="true"><?= $linha['descricao'] ?></textarea>
        </div>
        <div align="center" class="form-group">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_atender">Atender ao pedido</button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" onclick="alterar()">Alterar informações</button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Excluir solicitação</button>

        </div>
    </form>
    <div class="modal fade" id="modal_atender" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Atender a solicitação de trabalho?</h4>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="atender()">Confirmar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmar exclusão.</h4>
                </div>
                <div class="modal-body">
                    <p>Deseja realmente excluir?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" onclick="excluir()">Confirmar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function alterar() {
        window.location = "form_alterar.php?id=<?= $linha['id'] ?>";
    }
    function excluir() {
        window.location = "excluir_solicitacao.php?id=<?= $linha['id'] ?>";
    }
    function atender() {
        window.location = "atender_solicitacao.php?id=<?= $linha['id'] ?>&id_usuario=<?= $linha_usuario['id'] ?>";
    }
</script>
<?php
//include 'listar.php';
include '../rodape.php';

