<!--Código para autenticação em PHP-->
<?php
//Função para iniciar a sessão
session_start();
//Array de usuário
$usuarios = ['usuario' => "Administrador", 'loginAcesso' => "admin", 'senhaAcesso' => "password"];
//Receber o login através do metódo POST do html
$login = $_POST['nome'];
//Receber a senha através do metódo POST do html
$senha = $_POST['senha'];
//Condicional para validar usuario e senha
if($login == $usuarios['loginAcesso'] && $senha == $usuarios['senhaAcesso']){
    $_SESSION['usuario'] = $usuarios['usuario'];
    //Função com a funcionalidade de redirecionar para pagina do dashboard
    header('location: http://localhost/dashboard.php');
}else{
    //Função com a funcionalidade de recarregar a pagina de login(quando o login for incorreto)
    header('location: http://localhost/login.php');
}
exit;