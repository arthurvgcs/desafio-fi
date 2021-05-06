<!--Código php para login e acesso ao dashboard-->
<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('location: http://localhost/dashboard.php');
}
?>

<!--Inicio do código HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Futebol interativo - Login</title>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <!--Inicio do header-->
    <header class="text-center">
        <!--Texto do header-->
        <h3 class="text-uppercase text-white py-5 font-weight-bold">De um play nos seus estudos</h3>
        <!--Logo do header-->
        <a href="" class="btn btn-arena p-4">
            <img src="./img/logo-arena.svg" alt="logo fi arena">
        </a>
    </header>
    <!--Fim do header-->
    <!--Inicio da main-->
    <main>
        <!--Inicio do card de login-->
        <div class="login">
            <div class="py-5 my-3">
            <!--Inicio do formulário de login-->
            <form action="script/auth.php" method="post" class="visual-login pt-5">
                <!--Nome do usuário-->
                <div class="input-group pb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do usuário">
                </div>
                <!--Senha-->
                <div class="input-group pb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                    </div>
                    <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha">
                </div>
                <!--Botões de cadastro e entrar-->
                <div class=" d-flex justify-content-between">
                    <button type="submit" class="btn botao-cadastro text-uppercase font-weight-bold ">Cadastro</button>
                    <button type="submit" class="btn botao-login text-uppercase font-weight-bold">Entrar</button>
                </div>
            </form>
            <!--Fim do formulário de login-->
            <!--Esqueceu a senha-->
            <div class="py-2">
                <a href="" class="text-muted">Esqueceu a senha?</a>
            </div>
            </div>          
        </div>
        <!--Fim do card de login-->
    </main>
    <!--Fim da main-->
    <!--Inicio do footer FI-->
    <footer>
        <div class="fixed-bottom">
        <a href="http://localhost/index.php">
            <img class="w-5" src="./img/rodape-login.svg" alt="">
        </a>
        </div>

    </footer>
    <!--Fim do footer FI-->

    <!--Bootstrap JS-->
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