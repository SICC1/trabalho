<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include_once '/home/vhosts/sicc-tubarao.freevar.com/conectar.php';
include_once '/var/www/html/Trabalho/conectar.php';
?>
<head>
    <meta lang="br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Cabeçalho">
    <meta name="Iago Ramos dos Santos">
    <title>SICC - Sistema de Integração e Comunicação com a Comunidade</title>
    <link href="<?php echo $url; ?>/css_jv/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $url ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= $url ?>/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $url ?>/css_jv/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= $url ?>/css_menu_bootstrap_3.3.7/bootstrap3.3.7.php">


</head>
<body id="meubody">
    <?php
    require_once 'usuario/autenticacao.php';
    if (estaLogado()) {
        if (exibirUsername() == 'admin') {
            ?>
            <!--Navigation -->
            <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top' id="cor-menu">
                <div class = 'container'>
                    <a class = 'navbar-brand' href = '<?= $url ?>/index.php'><h3>SICC</h3></a>
                    <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                        <span class = 'navbar-toggler-icon'></span>
                    </button>
                    <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                        <ul class = 'navbar-nav ml-auto'>
                            <li class = 'nav-item active'>
                                <a class = 'nav-link' href = '<?= $url ?>/index.php'>Home
                                    <span class = 'sr-only'>(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    O que fazemos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class='dropdown-item' href = '<?= $url ?>/divulgar_trabalho/form_inserir.php'>Divulgar Trabalhos</a>
                                    <a class="dropdown-item" href="<?= $url ?>/divulgar_trabalho/listar.php">Trabalhos divulgados</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/solicitacoes.php">Trabalhos solicitados</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/solicitacoes_atendidas.php">Solicitações atendidas</a>
                                </div>
                            </li>
                            <li class = 'nav-item'>
                                <a class = 'nav-link' href = '<?= $url ?>/confirmar_cadastro/listar.php'>Profissionais</a>
                            </li>
                            <li class = 'nav-item'>
                                <a class = 'nav-link' href = '<?= $url ?>/cadastro_prof/form_inserir.php'>Cadastro de Profissionais</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contatos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= $url ?>/email/contato.php">Contatos</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/form_inserir.php">Solicitação de Trabalhos</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-thumbnail" src="<?= $url ?>/img/configurar.png" width="30" height="30"> <?= exibirUsername(); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= $url ?>/usuario/logout.php">Logout</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        <?php } else {
            ?>
            <!--Navigation -->
            <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top' id="cor-menu">
                <div class = 'container'>
                    <a class = 'navbar-brand' href = '<?= $url ?>/index.php'><h3>SICC</h3></a>
                    <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                        <span class = 'navbar-toggler-icon'></span>
                    </button>
                    <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                        <ul class = 'navbar-nav ml-auto'>
                            <li class = 'nav-item active'>
                                <a class = 'nav-link' href = '<?= $url ?>/index.php'>Home
                                    <span class = 'sr-only'>(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    O que fazemos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class='dropdown-item' href = '<?= $url ?>/divulgar_trabalho/form_inserir.php'>Divulgar Trabalhos</a>
                                    <a class="dropdown-item" href="<?= $url ?>/divulgar_trabalho/listar.php">Trabalhos divulgados</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/solicitacoes.php">Trabalhos solicitados</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/solicitacoes_atendidas.php">Solicitações atendidas</a>
                                </div>
                            </li>
                            <li class = 'nav-item'>
                                <a class = 'nav-link' href = '<?= $url ?>/profissional/perfilProfissional.php'>Perfil</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Contatos
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= $url ?>/email/contato.php">Contatos</a>
                                    <a class="dropdown-item" href="<?= $url ?>/cadastro_prof/form_inserir.php">Cadastre-se</a>
                                    <a class="dropdown-item" href="<?= $url ?>/solicitar_trabalho/form_inserir.php">Solicitação de Trabalhos</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-thumbnail" src="<?= $url ?>/img/configurar.png" width="30" height="30"> <?= exibirUsername(); ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= $url ?>/usuario/logout.php">Logout</a>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>

            <?php
        }
    } else {
        ?>
        <!--Navigation -->
        <nav class = 'navbar navbar-expand-lg navbar-light bg-light static-top' id = "cor-menu">
            <div class = 'container'>
                <a class = 'navbar-brand' href = '<?= $url ?>/index.php'><h3>SICC</h3></a>
                <button class = 'navbar-toggler' type = 'button' data-toggle = 'collapse' data-target = '#navbarResponsive' aria-controls = 'navbarResponsive' aria-expanded = 'false' aria-label = 'Toggle navigation'>
                    <span class = 'navbar-toggler-icon'></span>
                </button>
                <div class = 'collapse navbar-collapse' id = 'navbarResponsive'>
                    <ul class = 'nav navbar-nav ml-auto'>
                        <li class = 'nav-item active'>
                            <a class = 'nav-link' href = '<?= $url ?>/index.php'>Home
                                <span class = 'sr-only'>(current)</span>
                            </a>
                        </li>
                        <li class = "nav-item dropdown">
                            <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                                O que fazemos
                            </a>
                            <div class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <a class = "dropdown-item" href = "<?= $url ?>/divulgar_trabalho/listar.php">Trabalhos divulgados</a>
                                <a class = "dropdown-item" href = "<?= $url ?>/solicitar_trabalho/solicitacoes_atendidas.php">Solicitações atendidas</a>
                            </div>
                        </li>
                        <li class = "nav-item dropdown">
                            <a class = "nav-link dropdown-toggle" href = "#" id = "navbarDropdown" role = "button" data-toggle = "dropdown" aria-haspopup = "true" aria-expanded = "false">
                                Contatos
                            </a>
                            <div class = "dropdown-menu" aria-labelledby = "navbarDropdown">
                                <a class = "dropdown-item" href = "<?= $url ?>/email/contato.php">Contatos</a>
                                <a class = "dropdown-item" href = "<?= $url ?>/cadastro_prof/form_inserir.php">Cadastre-se</a>
                                <a class = "dropdown-item" href = "<?= $url ?>/solicitar_trabalho/form_inserir.php">Solicitação de Trabalhos</a>
                            </div>
                        </li>
                        <li class = 'nav-item'>
                            <a class = 'nav-link' href = '<?= $url ?>/usuario/form_login.php'>Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }
    ?>
    <script src="<?= $url ?>/css_jv/jquery.min.js"></script>
    <script src="<?= $url ?>/css_jv/bootstrap.bundle.min.js"></script>
