<?php
include_once '../cabecalho.php';
include_once '../bd/conectar.php';

if (estaLogado() == TRUE) {
    
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";


$sql = "select id as id_trabalho, nome, descricao, id_usuario, data_trab from trabalho order by data_trab desc";
$resultado = mysqli_query($conexao, $sql);
?>
<?php
while ($linha = mysqli_fetch_array($resultado)) {
    ?>

    
    <div class="container-fluid text-center" >    
        <div class="row content">
            <div class="col-sm-2 sidenav">
        <!--      <p><a href="#">Link</a></p>
              <p><a href="#">Link</a></p>
              <p><a href="#">Link</a></p>-->
            </div>
            <div class="col-sm-8 text-left"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="id" value="<?= $linha['id_trabalho'] ?>">
                            <hr>
                            <div class="row">
                                <div class="col-9"><h1><?= $linha['nome'] ?></h1></div>
                                <div class="col-3"><label>Data: </label><?= " " . $linha['data_trab'] ?></div>    
                            </div>
                            <p><?= $linha['descricao'] ?></p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <?php
                if ($linha['id_usuario'] == $_SESSION['id']) {
                    ?>
                    <div class="well">
                        <p>
                            <button type="button" class="btn btn-info btn-lg" onclick="redirecionar()">Alterar trabalho</button>
                        </p>
                    </div>
                    <div class="well">
                        <p>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_excluir">Excluir trabalho</button>
                        </p>

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
                                window.location = "excluir.php?id=<?= $linha['id_trabalho'] ?>";
                            }
                            function redirecionar(){
                                window.location = "form_alterar.php?id=<?= $linha['id_trabalho'] ?>";
                            }
                        </script>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
    <?php
}
?>

