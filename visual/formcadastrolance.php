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
    <title>Cadastro de lances</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
    <?php
    $idpartida = $_GET['id'];
    $placar = $_GET['placar'];
    ?>
</head>

<body>
    <?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    
    <div class="header">
    <h1>Cadastro de lances</h1>
    </div>
    <hr style="opacity: 0;">

    <div class="main">
        <div class="formularios">
            <p>Digite os dados nos campos a seguir:</p>
            <form action=<?php echo '"cadastrolance.php?placar=' . $placar . '"' ?> method="post">
                <input type="hidden" name="partida" id="partida" value=<?php echo '"' . $idpartida . '"' ?>>
                <label for="lance">Lance</label> <br>
                <textarea name="lance" id="lance" cols="75" rows="12"></textarea><br>
                <label for="gerador">Gerador</label><br>
                <input type="number" name="gerador" id="gerador"><br>
                <label for="horario">Horário</label><br>
                <input type="time" name="horario" id="horario"><br>
                <label for="foto">Url para a Foto</label><br>
                <input type="text" name="foto" id="foto"><br>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="listapartida.php"><button type="button" class="btn btn-success">Voltar</button></a>
            </form>
        </div>
    </div>
    </div>
</body>

</html>