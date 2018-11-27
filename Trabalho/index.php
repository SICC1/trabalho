<?php
include_once './cabecalho.php';
if (estaLogado()) {
    $id = $_SESSION['id'];
    $sql = "select * from usuario where id = $id";
    $sql_linha = mysqli_query($conexao, $sql);
    $linha_admin = mysqli_fetch_array($sql_linha);
}
?>
<div class="row content">
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
    <div class="col-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/IFSC3.jpg" width="300" height="450" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/IFSC2.jpg" width="300" height="450" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/IFSC.jpg" width="300" height="450" alt="Third slide">
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
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
</div>
<div class="row">
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
    <div class="col-8">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-sm-12" align="center">
                        <h1>O que há de novo?</h1>
                    </div>
                    <p>O Câmpus Tubarão está localizado no bairro Dehon (Rua Deputado Olices Pedra de Caldas, 480).
                        Ainda em fase de implantação, em 2016 o Câmpus Tubarão ofereceu 13 cursos, que tiveram um total de 437 alunos. O câmpus atua com cursos de qualificação (FIC), técnicos e de graduação.
                        A qualidade do ensino do IFSC é confirmada por meio de avaliações e do desempenho dos seus estudantes em concursos, prêmios e exames.
                        Quer ensino gratuito e de qualidade? Vem pro IFSC! Visite o site do Câmpus Tubarão para saber mais.</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
</div>
<div class="row">
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
    <div class="col-8">
        <div class="col-12">
            <?php
            $procura = "select * from parcerias";
            $array = mysqli_query($conexao, $procura);
            ?>
            <div class="col-sm-12">
                <div class="form-row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <h1>Parceiros</h1>
                    </div>
                    <div class="col-4"></div>
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
                        if (estaLogado() && $linha_admin['admin'] == 2) {
                            if ($linha_admin['admin'] == 2) {
                                ?>
                                <div class="col-md-1 mb-3" style="z-index: 1;">
                                    <p>
                                        <a href="./patrocinadores/form_alterar.php?id=<?= $linha['id']; ?>"><img height="15" lang="15" src="img/configurar.png"></a>
                                    </p>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2" style="background-color: #f1f1f1">
    </div>
</div>
<?php
include_once 'rodape.php';
?>
