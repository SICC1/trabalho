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
                <div class="row">
                    <div class="col-12" align="center">
                        <h1>Oportunidades</h1>
                    </div>
                    <div class="col-12">
                        <?php
                        $sql = "select * from oportunidades order by data_inserida desc";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($linha = mysqli_fetch_array($resultado)) {
                            ?>
                            <hr>
                            <div class="row">
                                <div class="col-8"><h1><?= $linha['nome'] ?></h1></div>
                                <div class="col-3"><label>Data: </label><?= " " . $linha['data_inserida'] ?></div>
                                <?php
                    if (estaLogado()) {
                        ?>
                                <div class="col-1">
                            <a href="form_alterar.php?id=<?= $linha['id']; ?>"><img height="15" lang="15" src="../img/mais_info.png"></a>
                                </div>
                    <?php } ?>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a><?= $linha['descricao'] ?></a>
                                </div>
                            </div>
                            <hr>
                            <?php
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 sidenav">
                <div class="col-1">
                </div>
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
