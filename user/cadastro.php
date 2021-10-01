<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuario</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
    <SCRIPT language=JavaScript src="../js/alert.js"></SCRIPT>
</head>

<body>
    <?php include '../html/topnav_login.html' ?>
    <?php include '../html/sidenav4.html' ?>

    <?php
    if($_GET['result']=='erro'){
        echo '<script>alertaCadLogin()</script>';
    }
    ?>
    <div class="header">
    <h1>Criar usuário</h1>
    </div>
    <div class="main">
        <div class="formularios" style="margin: auto;">
            <p>Digite os dados nos campos a seguir:</p>
            <form action='verificador.php?login=1' method="post">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"><br>
                <label for="user">Nome de usuário</label><br>
                <input type="text" name="user" id="user"><br>
                <label for="senha">Senha</label><br>
                <input type="text" name="senha" id="senha"><br>
                <button type="submit" class="btn-success">Salvar</button><br>
            </form>
        </div>
    </div>

</body>

</html>