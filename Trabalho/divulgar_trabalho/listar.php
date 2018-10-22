<?php
include_once '../cabecalho.php';
include_once '../bd/conectar.php';

if (estaLogado() == TRUE) {
    
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

$sql = "select id as id_trabalho, nome, descricao, id_usuario, data_trab from trabalho order by id desc";
$resultado = mysqli_query($conexao, $sql);

$sql_comentario = "select * from comentario where id = id_trabalho";
$resultado_comentario = mysqli_query($conexao, $sql_comentario);
?>
<?php
while ($linha = mysqli_fetch_array($resultado)) {
    ?>
    <div class="container-fluid text-center">    
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
                                <div class="col-12">
                                    <a><?= $linha['descricao'] ?> </a>
                                </div>

                                <div class="col-12">
                                    <hr>
                                    <button class="btn btn-primary" type="button" onclick="Mudarestado('minhaDiv<?= $linha['id_trabalho'] ?>')">Comentar</button>
                                    <div id="minhaDiv<?= $linha['id_trabalho'] ?>" style="display: none">
                                        <div class="col-md-8 container-fluid" id="div-cor2">
                                            <form method="post" action="inserir_comentario.php" name="nome<?= $linha['id_trabalho'] ?>">
                                                <input type="hidden" name="id_trabalho" value="<?= $linha['id_trabalho'] ?>">
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label>Nome</label>
                                                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <label>Telefone</label>
                                                        <input type="text" name="telefone" class="form-control" placeholder="Telefone" required>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label>E-mail</label>
                                                        <input type="text" name="email" class="form-control" placeholder="E-mail" required>
                                                    </div>
                                                    <div class="col-md-1 mb-3">
                                                        <input type="hidden" name="data" placeholder="<?= $linha['data'] ?>" value="<?= $linha['data'] ?>" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <label>Comentário</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <a href="">Anexo</a>
                                                    </div>
                                                    <textarea name="descricao" class="form-control" placeholder="Comente aqui..." required></textarea>
                                                </div>
                                                <div align="center" class="form-group">
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?= $linha['id_trabalho'] ?>">Comentar</button>
                                                    <button type="reset" class="btn btn-default" value="Limpar campos">Limpar Campos</button>
                                                    <div class="modal fade" id="myModal<?= $linha['id_trabalho'] ?>" role="dialog">
                                                        <div class="modal-dialog modal-sm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Confirmar</h4>
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
                                    </div>
                                    <div class="col-12" name="naame<?= $linha['id_trabalho'] ?>">
                                        <h3>Comentários</h3>
                                        <?php
                                        while ($linha_comentario = mysqli_fetch_array($resultado_comentario)) {
                                            ?>
                                            <div class="row">
                                                <div class="col-8"><?= $linha_comentario['nome'] ?></div>
                                                <div class="col-4"><label>Data: </label><?= " " . $linha_comentario['data_inserida'] ?></div>    
                                                <div class="col-12">
                                                    <a><?= $linha_comentario['descricao'] ?> </a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <br /> 
                <?php
                if ($linha['id_usuario'] == $_SESSION['id']) {
                    ?>
                    <div class="col-1">
                        <p>
                            <a href="form_alterar.php?id=<?= $linha['id_trabalho']; ?>"><img height="15" lang="15" src="../img/configurar.png"></a>
                        </p>
                    </div>
                    <div class="well">
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
