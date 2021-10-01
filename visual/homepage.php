<?php
session_start();
if ($_GET['visitante'] != 1) {
    if (!isset($_SESSION['user'])) {
        header('Location:../index.php?login=nosession');
    } else {
        $user = 1;
    }
} else {
    $user = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <meta name="leondev" content="">
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
</head>


<body>

    <?php
    if($user==1){
        require "../html/topnav_logado.html";
        require "../html/sidenav2.html";
    }else{
        require "../html/topnav_visit.html";
        require "../html/sidenav3.html";
    }
    ?>
    <div class="header">
        <?php
        if ($_GET['visitante'] == "1") {
            $_SESSION['visitante'] = "1";
            echo '<h1>Visitante</h1>';
        } else {
            $nome = $_SESSION['nome'];
            echo '<h1>' . $nome . '</h1>';
        }
        ?>
        <p style="text-align: center;">Aqui você pode ver as partidas, times e lances cadastrados no sistema!
        </p>
    </div>
    <hr style="opacity: 0;">
    <div class="flex-container">
        <div class="main">
            <h1>Partidas!</h1>
            <p>Ver partidas</p>
            <a href="listapartida.php"><button class="btn-success">Acessar</button></a><br>
            <p>Cadastrar partidas</p>
            <a href="formcadastropartida.php"><button class="btn-success">Acessar</button></a><br>
        </div>
        <hr>
        <div class="main">
            <h1>Times!</h1>
            <p>Ver times</p>
            <a href="listatime.php"><button class="btn-success">Acessar</button></a><br>
            <p>Cadastrar times</p>
            <a href="formcadastrotime.php"><button class="btn-success">Acessar</button></a><br>
        </div>
        <hr>
        <?php
        if($user == 0){
        echo '<div class="main">
            <h1>Faça login agora mesmo para aproveitar ao máximo!</h1>
            <a href="../user/login.php?login=1"><button class="btn-success">Logar</button></a><br>
            <h1>Cadastre sua conta para ter acesso ao registro de lances e criação de partidas!</h1>
            <a href="../user/cadastro.php"><button class="btn-success">Cadastrar</button></a><br>
        </div>';
        }else{
            echo '<div class="main">
            <h1>Obrigado por estar logado!</h1>
            <h1>Comece agora mesmo a desfrutar das funcionalidades do nosso sistema!</h1><hr>
            <h1>Ou se preferir sair de sua conta clique no botão abaixo!</h1>
            <a href="../index.php"><button class="btn-success">Sair</button></a><br>
        </div>';
        }
        ?>
    </div>
</body>

</html>