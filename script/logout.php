<!--Codigo para logout em PHP-->
<?php
//Função para iniciar sessão
session_start();
//Função para limpar as váriaveis
session_unset();
//Função para destruir todas os dados da sessão anterior
session_destroy();
//Função com a funcionalidade de voltar para pagina de login
header('location: http://localhost/login.php');