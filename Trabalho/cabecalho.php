<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta lang="br">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="Cabeçalho">
        <meta name="Iago Ramos dos Santos">
        <title>SICC - Sistema de Integração e Comunicação com a Comunidade</title>
        <!-- Bootstrap core CSS -->
        <link href="http://localhost/Trabalho/css_jv/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://localhost/Trabalho/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/Trabalho/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="http://localhost/Trabalho/css_jv/bootstrap-grid.css">
    </head>
    <body>
        <?php
        require_once 'usuario/autenticacao.php';

        if (estaLogado()) {
            if (exibirUsername() == 'admin') {
                ?>

                <div class='container b'>
                    <div class='header clearfix'>
                        <nav>
                            <ul class='nav nav-pills float-right'>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''><span class='sr-only'>(current)</span></a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''></a>
                                </li>
                            </ul>
                        </nav>
                        <h3 class='text-muted'></h3>
                    </div>

                    <!--Navigation -->
                    <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top '>
                        <div class = 'container'>
                            <a class = 'navbar-brand' href = 'http://localhost/Trabalho/index.php'><h3>SICC</h3></a>
                            <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                                <span class = 'navbar-toggler-icon'></span>
                            </button>
                            <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                                <ul class = 'navbar-nav ml-auto'>
                                    <li class = 'nav-item active'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/index.php'>Home
                                            <span class = 'sr-only'>(current)</span>
                                        </a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/confirmar_cadastro/listar.php'>Profissionais</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/divulgar_trabalho/form_inserir.php'>Divulgar Trabalhos</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/cadastro_prof/form_inserir.php'>Cadastro de Profissionais</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/usuario/logout.php'>Logout</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <span class="nav-item"><?= "Olá! " . exibirUsername(); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            <?php } else {
                ?>
                <div class='container'>
                    <div class='header clearfix'>
                        <nav>
                            <ul class='nav nav-pills float-right'>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''><span class='sr-only'>(current)</span></a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''></a>
                                </li>
                            </ul>
                        </nav>
                        <h3 class='text-muted'></h3>
                    </div>

                    <!--Navigation -->
                    <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top'>
                        <div class = 'container'>
                            <a class = 'navbar-brand' href = 'http://localhost/Trabalho/index.php'><h3>SICC</h3></a>
                            <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                                <span class = 'navbar-toggler-icon'></span>
                            </button>
                            <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                                <ul class = 'navbar-nav ml-auto'>
                                    <li class = 'nav-item active'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/index.php'>Home
                                            <span class = 'sr-only'>(current)</span>
                                        </a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/divulgar_trabalho/form_inserir.php'>Divulgar Trabalhos</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/profissional/perfilProfissional.php'>Perfil</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/usuario/logout.php'>Logout</a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-item"><?= "Olá! " . exibirUsername(); ?></a>
                                    </li>
                                </ul>
                            </div>
                    </nav>
                    <?php
                }
            } else {
                ?>
                <div class='container'>
                    <div class='header clearfix'>
                        <nav>
                            <ul class='nav nav-pills float-right'>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''><span class='sr-only'>(current)</span></a>
                                </li>
                                <li class='nav-item'>
                                    <a class='nav-link' href=''></a>
                                </li>
                            </ul>
                        </nav>
                        <h3 class='text-muted'></h3>
                    </div>  

                    <!--Navigation -->
                    <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top'>
                        <div class = 'container'>
                            <a class = 'navbar-brand' href = 'http://localhost/Trabalho/index.php'><h3>SICC</h3></a>
                            <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                                <span class = 'navbar-toggler-icon'></span>
                            </button>
                            <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                                <ul class = 'nav navbar-nav ml-auto'>
                                    <li class = 'nav-item active'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/index.php'>Home
                                            <span class = 'sr-only'>(current)</span>
                                        </a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/usuario/form_login.php'>Login</a>
                                    </li>
                                    <li class = 'nav-item'>
                                        <a class = 'nav-link' href = 'http://localhost/Trabalho/cadastro_prof/form_inserir.php'>Cadastre-se</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <?php
            }
            ?>
            <!--
                        echo "<a href='http://localhost/Trabalho/usuario/form_login.php'>Login</a>";
                        echo "<a href='http://localhost/Trabalho/cadastro_prof/form_inserir.php'>Cadastro de Prof.</a>";
            
            ;-->
            <script src="http://localhost/Trabalho/css_jv/jquery.min.js"></script>
            <script src="http://localhost/Trabalho/css_jv/bootstrap.bundle.min.js"></script>

    </body>

</html>