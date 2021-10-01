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
    <title>Lista de Times</title>
    <meta name="leon fut" content="">
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
        <h1>TIMES CADASTRADOS</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">
        <div class="dadosbd">
            <h1> Lista de times </h1>
            <hr>
            <table>
                <tr>
                    <th>Id do time</th>
                    <th>Nome</th>
                    <th>Cidade/UF</th>
                    <th>Pais</th>
                </tr>
                <?php
                require_once '../modelo/Time.php';
                require_once '../modelo/DaoTime.php';
                $dao = new DaoTime();
                $lista = $dao->getLista();
                foreach ($lista as $linha) {
                    echo '<tr>';
                    echo '<td>' . $linha['id'] . '</td>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['CidadeEstado'] . '</td>';
                    echo '<td>' . $linha['pais'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
        <div class="header">
        <h2>Crie e salve seus times:</h2>
            <a href="formcadastrotime.php"><button type="button" class="btn btn-success">Criar time!</button></a>
        </div>
    </div>

</body>

</html>