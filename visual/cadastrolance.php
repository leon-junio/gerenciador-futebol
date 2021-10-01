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
    <title>Resultado dos Lances</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
    <?php
    $placar = $_GET['placar'];
    $idpartida = $_POST['partida'];
    $foto = $_POST['foto'];
    $gerador = $_POST['gerador'];
    $lancecomp = $_POST['lance'];
    $horario = $_POST['horario'];
    require_once '../modelo/DaoLance.php';
    require_once '../modelo/Lance.php';
    ?>
</head>

<body>
    <?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    <div class="header">
    <h1>Resultado dos Lances:</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">
        <div class="result">
            <?php
            $lance = new Lance();
            $dao = new DaoLance();
            if ($lancecomp == "" || $horario == "" || $foto == "" || $gerador == "" || $idpartida == "") {
                echo '<h1>Erro, preencha os campos corretamente.</h1>';
            } else {
                $lance->setLance($lancecomp);
                $lance->setHorario($horario);
                $lance->setFoto($foto);
                $lance->setGerador($gerador);
                $lance->setPartida($idpartida);
                if ($dao->incluir($lance)) {
                    echo '<h1>Lance criado!</h1>';
                } else {
                    echo '<h1>Lance não salvo! Verifique por erros e tente novamente mais tarde.</h1>';
                }
            }
            ?>
            <hr>
            <a href=<?php echo '"listalance.php?id=' . $idpartida . '&placar=' . $placar . '"' ?>><button type="button" class="btn btn-success">Voltar</button></a>
            <hr>
        </div>
    </div>
</body>

</html>