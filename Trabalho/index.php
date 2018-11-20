<?php
include_once './cabecalho.php';

if (estaLogado()) {
    $id = $_SESSION['id'];
    $sql = "select * from usuario where id = $id";
    $sql_linha = mysqli_query($conexao, $sql);
    $linha_admin = mysqli_fetch_array($sql_linha);
}
?>
<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/ativar.png" width="300" height="400" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/alterar.png" width="300" height="400" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/alterar.png" width="300" height="400" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>O que há de novo?</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequatsa.</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <?php
                include_once './conectar.php';
                $procura = "select * from parcerias";
                $array = mysqli_query($conexao, $procura);
                ?>
                <div class="col-sm-12">
                    <div class="form-row">
                        <h1>Parceiros</h1>
                    </div>
                    <div class="form-row">
                        <?php
                        while ($linha = mysqli_fetch_array($array)) {
                            ?>
                            <div class="col-md-5 mb-3">
                                Nome da empresa: <?= $linha['nome'] ?>
                                    <br>
                                Descrição:
                                <?= $linha['descricao'] ?>
                            </div>
                        <?php
                                 if(estaLogado() && $linha_admin['admin'] == 2){if ($linha_admin['admin'] == 2) {
                                        ?>
                        <div class="col-md-1 mb-3" style="z-index: 1;">
                                        <p>
                                            <a href="./patrocinadores/form_alterar.php?id=<?= $linha['id']; ?>"><img height="15" lang="15" src="img/configurar.png"></a>
                                        </p>
                                    </div>
                        <?php }}
                                ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
    <div class="row content">
        <div class="col-sm-2 sidenav">
        </div>
        <div class="col-sm-8 text-left">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            <div class="col-12">

                <div class="col-sm-12">
                    <div class="form-row">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
        </div>
    </div>
</div>
<?php
include_once 'rodape.php';
?>
