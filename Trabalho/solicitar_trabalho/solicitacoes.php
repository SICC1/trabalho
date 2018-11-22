<?php
include_once '../cabecalho.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <div class="container">
                <?php
//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";
                $sql = "select * from solicitar_trabalho where atendido is null order by data_inserida desc";
                $resultado = mysqli_query($conexao, $sql);
                while ($linha = mysqli_fetch_array($resultado)) {
                    ?>
                    <div class="row">
                        <div class="col-12">
                            <input type="hidden" name="id" value="<?= $linha['id'] ?>">
                            <hr>
                            <div class="row">
                                <div class="col-7"><h1><?= $linha['nome'] ?></h1></div>
                                <div class="col-4"><label>Data: </label><?= " " . $linha['data_inserida'] ?></div>
                                <div class="col-1">
                                    <a href="form_visualizar.php?id=<?= $linha['id']; ?>"><img height="15" lang="15" src="../img/mais_info.png"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a><?= $linha['descricao'] ?></a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            
                            <div class="row">
                            </div>
                            <div class="row">
                            </div>
                            
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
            </div>
        </div>
    </div>
</div>
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
