<?php
session_start();
if ($_SESSION['visitante'] != 1) {
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
    <title>Lista de Partidas</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
</head>

<body>
    <?php
    if ($user == 1) {
        require "../html/topnav_logado.html";
        require "../html/sidenav2.html";
    } else {
        require "../html/topnav_visit.html";
        require "../html/sidenav3.html";
    }
    ?>
    <div class="header">
        <h1>PARTIDAS CADASTRADAS</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">
        <div class="dadosbd">
            <h1> Lista de Partidas</h1>
            <hr>
            <table>
                <tr>
                    <th>Id da partida</th>
                    <th>Primeiro time</th>
                    <th>Gols</th>
                    <th>Segundo time</th>
                    <th>Gols</th>
                    <th>Data</th>
                    <th>Local do jogo</th>
                    <th>Lances (opções)</th>
                </tr>
                <?php
                require_once '../modelo/Partida.php';
                require_once '../modelo/DaoPartida.php';
                $dao = new DaoPartida();
                $lista = $dao->getLista();
                foreach ($lista as $linha) {

                    echo '<tr>';
                    foreach ($linha as $valor) {
                        echo '<td>' . $valor . '</td>';
                    }
                    $placar = $linha['timeCasa'] . ' ' . $linha['golsCasa'] . ' ' . $linha['timeFora'] . ' ' . $linha['golsFora'];
                    echo '<td><a href="formcadastrolance.php?id=' . $linha['id'] . '&placar=' . $placar . '"><button type="button" class="btn-success" style="padding:5px;">Criar</button></a><br><a href="listalance.php?id=' . $linha['id'] . '&placar=' . $placar . '"><button type="button" class="btn-success" style="padding:5px;">Ir</button></a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
            </div>
            <div class="header">
            <h2>Crie suas partidas:</h2>
            <a href="formcadastropartida.php"><button type="button" class="btn btn-success">Criar partida!</button></a>
            </div>
    </div>


</body>

</html>