<?php
include_once '../cabecalho.php';

if (estaLogado() == TRUE) {
    
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

$sql = "select * from solicitar_trabalho where atendido = 2";
$resultado = mysqli_query($conexao, $sql);
//pegando o admin para fazer a comparação se ele é ou não usuario
$retorno_admin = "select admin from usuario where id = $_SESSION[id]";
$sql_retorno_admin = mysqli_query($conexao, $retorno_admin);
$linha_admin = mysqli_fetch_array($sql_retorno_admin);
?>
<div class="row">
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
    <div class="col-8" style="text-align: center">
        <h1 style="text-decoration: underline">Solicitações atendidas</h1>
    </div>
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
</div>
<?php
while ($linha = mysqli_fetch_array($resultado)) {
    ?>
    <div class="row">
        <div class="col-2" style="background-color: #f1f1f1">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12">
                    <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                    <hr>
                    <div class="row">
                        <div class="col-9"><h1><?= $linha['nome'] ?></h1></div>
                        <div class="col-3"><label>Data: </label><?= " " . $linha['data_inserida'] ?></div>
                        <div class="col-12">
                            <a><?= $linha['descricao'] ?> </a>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="col-2" style="background-color: #f1f1f1">
            <?php
            if (estaLogado()) {
                ?>
                <div class="col-1">
                    <p>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?= $linha['id'] ?>"><img height="15" lang="15" src="../img/excluir.png"></button>
                    </p>
                </div>
                <div class="modal fade" id="myModal<?= $linha['id'] ?>" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Confirmar exclusão</h4>
                            </div>
                            <div class="modal-body">
                                <p>Deseja realmente excluir a solicitação?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" onclick="redicecionar()">Confirmar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                            <script>
                                function redicecionar() {
                                    window.location = "excluir_solicitacao_atendidas.php?id=<?= $linha['id'] ?>";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}
?>
<script>
    function Mudarestado(di) {
        var display = document.getElementById(di).style.display;
        if (display == "none")
            document.getElementById(di).style.display = 'block';
        else
            document.getElementById(di).style.display = 'none';
    }


</script>
<?php
include_once '../rodape.php';
?>
