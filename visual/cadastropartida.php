<?php
session_start();
    if (!isset($_SESSION['user'])) {
        header('Location:../index.php?login=nosession');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado das partidas</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
    <?php
    $local = $_POST['local'];
    $gols1 = $_POST['gols1'];
    $gols2 = $_POST['gols2'];
    $time1 = $_POST['time1'];
    $time2 = $_POST['time2'];
    $data = $_POST['data'];
    require_once '../modelo/DaoPartida.php';
    require_once '../modelo/Partida.php';
    ?>
</head>

<?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    <div class="header">
    <h1>Resultado das partidas:</h1>
    </div>
    <hr style="opacity: 0;">

    <div class="main">
        <div class="result">
            <?php
            $partida = new Partida();
            $dao = new DaoPartida();
            if ($time2 == "" || $data == "" || $local == "" || $gols1 == "" || $gols2 == "" || $time1 == "") {
                echo '<h1>Erro, preencha os campos corretamente.</h1>';
            } else {
                $partida->setGolsCasa($gols1);
                $partida->setGolsFora($gols2);
                $partida->setLocal($local);
                $partida->setTimeCasa($time1);
                $partida->setTimeFora($time2);
                $partida->setData($data);
                if ($dao->incluir($partida)) {
                    echo '<h1>Partida criada!</h1>';
                } else {
                    echo '<h1>Erro ao salvar!  Verifique por erros e tente novamente mais tarde.</h1>';
                }
            }
            ?>
            <hr>
            <a href="listapartida.php"><button type="button" class="btn btn-success">Voltar</button></a>
            <hr>
        </div>
    </div>
    </body>

</html>