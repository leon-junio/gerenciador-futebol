<?php
session_start();
session_destroy();
unset($_SESSION['user']);
$_SESSION['user'] = null;
unset($_SESSION['nome']);
$_SESSION['nome'] = null;
session_commit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leon's Fut</title>
    <meta name="leondev" content="">
    <link rel="stylesheet" href="css/oficialmain.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sidenav.css">
    <link rel="stylesheet" href="css/topnav.css">
    <SCRIPT language=JavaScript src="js/nav.js"></SCRIPT>
</head>


<body>
    <?php require "html/topnav_index.html"?>
    <?php require "html/sidenav0.html"?>
    <div class="header">
        <hr>
    <p>Acesse o menu de navegação na foto acima!</p>
    <hr>
        <h1>Leon's Fut</h1>
        <p>Sistema focado em gerenciamento de partidas de futebol e torneios.
        Crie/edite partidas e times de uma forma gratuíta e fácil!
        Acesse o site como visitante e veja as partidas e times já cadastrados.
        Para ter acesso ao site como editor faça login ou registre sua conta no nosso sistema.
        Assim seus lances e partidas ao vivo podem ser salvas com sucesso!</p>
    </div>
    <hr style="opacity: 0;">
    <div class="flex-container">
        <div class="main">
            <h1>Faça login ou crie uma conta agora mesmo!</h1>
            <a href="user/login.php?login=1"><button class="btn-success">Login</button></a><br>
            <br><a href="user/cadastro.php"><button class="btn-success">Criar conta</button></a>
        </div>
       <hr style="opacity: 0;">
        <div class="main">
            <h1>Modo de visitante</h1>
            <p>Acesse como visitante.</p>
            <a href="visual/homepage.php?visitante=1"><button class="btn-success">Acessar</button></a><br>
        </div>
    </div>
</body>

</html>