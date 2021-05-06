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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - FI</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/dashboard.css">
</head>

<body>
    <!--Inicio Header-->
    <header>
        <div class="barra-cabecalho">
            <!--Logo FI Arena-->
            <div class="logo-header">
                <img src="./img/dashboard-logo.svg" alt="">
            </div>
            <!--Form de busca FI Arena-->
            <div class="search-header">
                <form action="">
                    <input type="text" placeholder="Digite sua busca">
                    <button type="submit">
                        <img src="./img/lupa-busca.svg" alt="">
                    </button>
                </form>
            </div>
            <!--Simulação de um dropdown(não codei o dropdown)-->
            <div class="usuario-cabecalho">
                <h6>Olá, <span class="font-weight-bold">André.</span><span class="user-logo"><img
                            src="./img/user-logo-certo.svg" alt=""></span></h6>
            </div>
            <!--Botão de saida(log out)-->
            <div class="button-header"></div>
            <a class="botao-real" href="http://localhost/script/logout.php">Sair</a>
        </div>
    </header>
    <!--Fim do header-->

    <!--Inicio da barra de navegação utilizando flex tabs-->
    <nav class="barra-nav">
        <ul class="nav ">
            <li><a class="abas" data-toggle="tab" href="#home">Início</a></li>
            <li><a class="abas" data-toggle="tab" href="#menu1">Todos os cursos</a></li>
            <li><a class="abas" data-toggle="tab" href="#menu2">Turmas abertas</a></li>
            <li><a class="abas" data-toggle="tab" href="#menu3">Turmas fechadas</a></li>
            <li><a class="abas" data-toggle="tab" href="#menu4">Meus cursos</a></li>
        </ul>
        <!--Flex tabs-->
        <div class="tab-content bg-tabcontent">
            <!--Código da aba Início-->
            <div id="home" class="tab-pane fade">
                <div class="container">
                    <!--div com frase da Arena FI-->
                    <div class="barra-menu">
                        <h6 class="texto-barra-menu">A Maior Plataforma e melhor de Educação para o Futebol das Américas
                        </h6>
                    </div>
                    <!--Pequena arte do desafio FI-->
                    <div class="imagem-fundo">
                        <img src="./img/fi-fundo.svg" alt="">
                    </div>
                </div>
            </div>
            <!--Fim do código da aba Início-->
            <!--Inicio do código da aba Todos os cursos-->
            <div id="menu1" class="tab-pane fade">
                <div class="container">
                    <!--div com frase da Arena FI-->
                    <div class="barra-menu">
                        <h6 class="texto-barra-menu">A Maior Plataforma e melhor de Educação para o Futebol das Américas
                        </h6>
                    </div>
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--linha para botar número de aulas disponiveis-->
                        <div class="row pt-5">
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
            </div>
            <!--Fim da aba todos os cursos-->
            <!--Inicio da aba Turmas abertas-->
            <div id="menu1" class="tab-pane fade">
                <div class="container">
                    <!--div com frase da Arena FI-->
                    <div class="barra-menu">
                        <h6 class="texto-barra-menu">A Maior Plataforma e melhor de Educação para o Futebol das Américas
                        </h6>
                    </div>
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--linha para botar número de aulas disponiveis-->
                        <div class="row pt-5">
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
            </div>
            <!--Fim da aba turmas abertas-->
            <!--Inicio da aba turmas fechadas-->
            <div id="menu3" class="tab-pane fade">
                <div class="container">
                    <!--div com frase da Arena FI-->
                    <div class="barra-menu">
                        <h6 class="texto-barra-menu">A Maior Plataforma e melhor de Educação para o Futebol das Américas
                        </h6>
                    </div>
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--Linha para criação de frase com numero de turmas disponiveis-->
                        <div class="disponibilidade-curso pt-5">
                            <p>Não há turmas fechadas</p>
                        </div>
                    </div>
                    <!--Fim do container fluid-->
                </div>
            </div>
            <!--Fim da aba turmas fechadas(não tem)-->
            <!--Inicio da aba meus cursos-->
            <div id="menu4" class="tab-pane fade">
                <div class="container">
                    <!--div com frase da Arena FI-->
                    <div class="barra-menu">
                        <h6 class="texto-barra-menu">A Maior Plataforma e melhor de Educação para o Futebol das Américas
                        </h6>
                    </div>
                    <!--criação de container fluid para criação de linhas e colunas-->
                    <div class="container-fluid">
                        <!--Linha para criação de frase com numero de turmas disponiveis-->
                        <div class="disponibilidade-curso pt-5">
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
                                                atuação nos tipos de Modelos de Jogo através de conteúdos específicos
                                                que serão aprofundados por grandes referências profissionais atuantes,
                                                permitindo que os alunos se destaquem no mercado do futebol brasileiro e
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
                <!--Fim do container-->
            </div>
            <!--Fim da aba meus cursos-->
        </div>
        <!--Fim da flex box-->
    </nav>
    <!--Fim da barra nav - flex box --->
    
    <!--Fim do código-->

    <!--JS bootstrap-->
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