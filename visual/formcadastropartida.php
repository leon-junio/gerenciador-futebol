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
    <title>Cadastro de partidas</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
</head>

<?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    <div class="header">
    <h1>Cadastro de partidas</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">
        <div class="formularios">
            <p>Digite os dados nos campos a seguir:</p>
            <form action="cadastropartida.php" method="post">
                <label for="time1">Time casa</label>
                <select name="time1" id="time1">
                    <?php
                    require_once '../modelo/DaoTime.php';
                    $daotime = new DaoTime();
                    $lista = $daotime->getLista();
                    foreach ($lista as $linha) {
                        echo '<option>' . $linha['nome'] . '</option>';
                    }
                    ?>
                </select><br>
                <label for="gols1">Gols</label>
                <input type="number" name="gols1" id="nome"><br>
                <label for="time2">Time fora</label>
                <select name="time2" id="time2">
                    <?php
                    require_once '../modelo/DaoTime.php';
                    $daotime = new DaoTime();
                    $lista = $daotime->getLista();
                    foreach ($lista as $linha) {
                        echo '<option>' . $linha['nome'] . '</option>';
                    }
                    ?>
                </select><br>
                <label for="gols2">Gols</label>
                <input type="number" name="gols2" id="nome"><br>
                <label for="local">Local</label>
                <input type="text" name="local" id="nome"><br>
                <label for="gols1">Data</label>
                <input type="date" name="data" id="data"><br>
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="listapartida.php"><button type="button" class="btn btn-success">Voltar</button></a>
            </form>
        </div>
    </div>
</div>
</body>

</html>