<?php
include_once '../cabecalho.php';
include_once '../bd/conectar.php';

if (estaLogado() == TRUE) {

} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}

//$sql = "select curso.id, curso.nome from curso join usuario on usuario.id = curso.usuario_id where usuario.username = '$_SESSION[username]'";

$sql = "select * from solicitar_trabalho where atendido != 1";
$resultado = mysqli_query($conexao, $sql);
//pegando o admin para fazer a comparação se ele é ou não usuario
$retorno_admin = "select admin from usuario where id = $_SESSION[id]";
$sql_retorno_admin = mysqli_query($conexao, $retorno_admin);
$linha_admin = mysqli_fetch_array($sql_retorno_admin);
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
            </div>
            <div class="col-sm-2 sidenav">
                <!--nao terminado-->
                <?php
                if (estaLogado()) {
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
