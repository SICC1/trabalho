<?php
include_once '../cabecalho.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<div class="row" >
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
    <div class="col-8">
        <div class="row">
            <div class="col-12" align="center">
                <h1>Oportunidades</h1>
                <p>O IFSC dispõe de vários serviços e oportunidades para a comunidade externa nas 
                    áreas de pesquisa e extensão. Veja as opções disponíveis:</p>
            </div>
            <div class="col-12">
                <div class="row">
                </div>
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
</div>
<?php
$sql = "select * from oportunidades order by data_inserida desc";
$resultado = mysqli_query($conexao, $sql);
while ($linha = mysqli_fetch_array($resultado)) {
    ?>
    <div class="row">
        <div class="col-2" style="background-color: #f1f1f1">
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-12" align="center">
                </div>
                <div class="col-12">
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
                    <div class="col-12">
                        <a><?= $linha['descricao'] ?></a>
                    </div>
                    <div class="col-12">
                        <?php
                        $selecao = "SELECT arquivos.* FROM arquivos "
                                . "INNER JOIN arquivo_oportunidades "
                                . "ON arquivos.id_arquivo = arquivo_oportunidades.id_arquivo "
                                . "WHERE arquivo_oportunidades.id_oportunidades = " . $linha['id'] . ";";
                        $retorno = mysqli_query($conexao, $selecao);
                        $linha_arquivo = mysqli_fetch_array($retorno);
                        $nome_arquivo = $linha_arquivo['nome_arquivo'];
                        if(mysqli_affected_rows($conexao)){ ?>
                        <a href="../uploads/<?= $nome_arquivo ?>" download>Link</a>
                        <?php
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2" style="background-color: #f1f1f1">
        </div>
    </div>
    <?php
}
?>
<?php
include_once '../rodape.php';
?>
