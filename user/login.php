<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    if ($_GET['login'] == "0") {
        echo '<script>alertaLogin()</script>';
    }
    if ($_GET['login'] == "nosession") {
        echo '<script>alertaSessionLogin()</script>';
    }
    ?>
    <div class="header">

        <h1>Login</h1>
    </div>
    <div class="main">
            <div class="d-flex h-100 align-items-center">
                <div class="container">
                    <div class="formularios" style="margin: auto;">
                        <form action='verificador.php?login=0' method="post">
                            <label for="user">Usuário</label><br>
                            <input type="text" name="user" id="user"><br>
                            <label for="senha">Senha</label><br>
                            <input type="password" name="senha" id="senha"><br>
                            <hr>
                            <button type="submit" class="btn-success">Login</button><br>
                        </form>
                    </div>
                </div>
            </div>
    </div>

</body>

</html>