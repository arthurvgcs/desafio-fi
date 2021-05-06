<!--Código php para logout do dashboard -->
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('location: http://localhost/login.php');
}
?>

<!--Inicio código HTML-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FI</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/custom.css">
</head>

<body>
    <!--Inicio Header-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-header py-3">
            <a class="navbar-brand px-sm-5" href="#"><img src="img/fi-arena.svg" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <div class="input-group">
                        <input type="text" class="form-search" placeholder="Digite sua busca" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn bg-transparent text-fi" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </ul>
                <ul class="navbar-nav px-4">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-white">Olá, <span
                                    class='font-weight-bold'><?php echo $_SESSION['usuario']; ?></span></span>
                            <img class="img-profile rounded-circle" src="img/user-logo-certo.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Configurações
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cursos
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Sair
                            </a>
                        </div>
                    </li>
                </ul>
                <a href="http://localhost/script/logout.php" class="btn btn-danger px-5">Sair</a>
            </div>
        </nav>
    </header>
    <!--Fim do header-->

    <main>
        <!--Inicio da barra de navegação utilizando flex tabs-->
        <nav class="navbar-expand-lg navbar-dark bg-header">
            <ul class='nav d-flex justify-content-center'>
                <li class="nav-item active">
                    <a class="nav-link nav-fi" href="#home" data-toggle="tab">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-fi" href="#menu1" data-toggle="tab">Todos os cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-fi" href="#menu2" data-toggle="tab">Turmas abertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-fi" href="#menu3" data-toggle="tab">Turmas fechadas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-fi" href="#menu4" data-toggle="tab">Meus cursos</a>
                </li>
            </ul>
        </nav>
        <!--Banner principal-->
        <div class="banner-principal text-center">
            <p class="py-2 text-white">A Maior Plataforma e melhor de Educação para o Futebol das Américas</p>
        </div>
        <!--Primeiro conteiner fluid-->
        <div class="container-fluid">
            <!--Inicio das flex tabs-->
            <div class="tab-content bg-tabcontent">
                <!--Código da aba Início-->
                <div id="home" class="tab-pane fade">

                </div>
                <!--Fim do código da aba Início-->
                <!--Inicio do código da aba Todos os cursos-->
                <div id="menu1" class="tab-pane fade">
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--linha para botar número de aulas disponiveis-->
                        <div class="row">
                            <div class="disponibilidade-curso pt-3">
                                <p><span class="font-weight-bold">06 </span>cursos disponíveis </p>
                            </div>
                        </div>
                        <!--Criação de linhas para dividir os cards igualmente em 3 colunas-->
                        <div class="row">
                            <div class="col-sm-4 mt-3">
                                <!--Código do primeiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h5 class="card-title">Curso modelo de jogo</h5>
                                            <!--texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>04
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>50
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do primeiro card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do segundo card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Psicologia para o esporte</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do segundo card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do terceiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Medicina para o futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>04
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>50
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do terceiro card-->
                            </div>
                        </div>
                        <!--Fim da primeira linha-->
                        <!--Inicio da segunda linha-->
                        <div class="row pb-3">
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do primeiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Curso Básico de Arbitragem no
                                                Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>06
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>80
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card"
                                                        href="http://localhost/curso-arbitragem.php">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do primeiro card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do segundo card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Nutrição para o Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do segundo card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do terceiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Fisioterapia para o Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do terceiro card-->
                            </div>
                        </div>
                        <!--Fim da segunda linha-->
                    </div>
                    <!--Fim do container fluid-->
                </div>
                <!--Fim da aba todos os cursos-->
                <!--Inicio da aba Turmas abertas-->
                <div id="menu2" class="tab-pane fade">
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--linha para botar número de aulas disponiveis-->
                        <div class="row">
                            <div class="disponibilidade-curso pt-3">
                                <p><span class="font-weight-bold">06 </span>cursos disponíveis </p>
                            </div>
                        </div>
                        <!--Criação de linhas para dividir os cards igualmente em 3 colunas-->
                        <div class="row">
                            <div class="col-sm-4 mt-3">
                                <!--Código do primeiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h5 class="card-title">Curso modelo de jogo</h5>
                                            <!--texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>04
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>50
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do primeiro card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do segundo card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Psicologia para o esporte</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do segundo card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do terceiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Medicina para o futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>04
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>50
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do terceiro card-->
                            </div>
                        </div>
                        <!--Fim da primeira linha-->
                        <!--Inicio da segunda linha-->
                        <div class="row pb-3">
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do primeiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Curso Básico de Arbitragem no
                                                Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>06
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>80
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão Saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card"
                                                        href="http://localhost/curso-arbitragem.php">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do primeiro card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do segundo card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Nutrição para o Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do segundo card-->
                            </div>
                            <div class="col-sm-4 mt-3">
                                <!--Inicio do terceiro card-->
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Fisioterapia para o Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>10
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>120
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card" href="">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                    <!--Fim das duas divs que são utilizadas para estilização do card-->
                                </div>
                                <!--Fim do terceiro card-->
                            </div>
                        </div>
                        <!--Fim da segunda linha-->
                    </div>
                    <!--Fim do container fluid-->
                </div>
                <!--Fim da aba turmas abertas-->
                <!--Inicio da aba turmas fechadas-->
                <div id="menu3" class="tab-pane fade">
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--Linha para criação de frase com numero de turmas disponiveis-->
                        <div class="disponibilidade-curso">
                            <p>Não há turmas fechadas</p>
                        </div>
                    </div>
                    <!--Fim do container fluid-->
                </div>
                <!--Fim da aba turmas fechadas(não tem)-->
                <!--Inicio da aba meus cursos-->
                <div id="menu4" class="tab-pane fade">
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--Linha para criação de frase com numero de turmas disponiveis-->
                        <div class="disponibilidade-curso">
                            <p><span class="font-weight-bold">01 </span>curso disponível </p>
                        </div>
                        <!--Inicio da linha para dividir em colunas-->
                        <div class="row pt-3">
                            <!--Inicio do card e divisão em colunas-->
                            <div class="col-sm-4 mt-3">
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="card-body">
                                            <!--Titulo do card-->
                                            <h4 class="card-title">Curso Básico de Arbitragem no
                                                Futebol</h4>
                                            <!--Texto do card-->
                                            <p class="card-text">O curso vai elevar o seu nível de conhecimento e
                                                atuação nos tipos de Modelos de Jogo através de conteúdos
                                                específicos
                                                que serão aprofundados por grandes referências profissionais
                                                atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol
                                                brasileiro e
                                                mundial.</p>
                                            <!--Criação de linha para dividir informações em 4 colunas-->
                                            <div class="row">
                                                <!--Data de inicio-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Inicio</span><br>06
                                                        Maio</p>
                                                </div>
                                                <!--Duração-->
                                                <div class="borda-card col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Duração</span><br>80
                                                        horas</p>
                                                </div>
                                                <!--Modalidade-->
                                                <div class="col-3">
                                                    <p class="descricao-cards"><span
                                                            class="font-weight-bold colunas-card">Modalidade</span><br>Online
                                                    </p>
                                                </div>
                                                <!--Botão saiba mais-->
                                                <div class="col-3">
                                                    <a class="btn btn-card"
                                                        href="http://localhost/curso-arbitragem.php">Saiba mais</a>
                                                </div>
                                            </div>
                                            <!--Fim da linha para dividir informações-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Fim do card e das divs para estilização dele e divisão de colunas-->
                        </div>
                        <!--Fim da unica linha-->
                    </div>
                    <!--Fim do container fluid-->
                </div>
                <!--Fim da aba meus cursos-->
            </div>
            <!--Fim da flex tab-->
        </div>
        <!--Fim do outro container fluid-->

    </main>


    <!--Fim do código-->

    <!--JS bootstrap-->
    <script src="https://kit.fontawesome.com/53c5c38d7a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>