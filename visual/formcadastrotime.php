<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location:../user/login.php?login=nosession');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de times</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
</head>

<body>
    <?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    <div class="header">
    <h1>Cadastro de times</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">
        <div class="formularios">
            <p>Digite os dados nos campos a seguir:</p>
            <form action='cadastrotime.php' method="post">
                <label for="nome">Nome</label><br>
                <input type="text" name="nome" id="nome"><br>
                <label for="cidadeestado">Cidade/UF</label><br>
                <input type="text" name="cidadeestado" id="cidadeestado"><br>
                <label for="pais">País</label><br>
                <input type="text" name="pais" id="pais"><br>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="listatime.php"><button type="button" class="btn btn-success">Voltar</button></a>
            </form>
        </div>
    </div>
    </div>
</body>

</html>