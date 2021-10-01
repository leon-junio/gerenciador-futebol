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
    <title>Resultado dos Times</title>
    <link rel="stylesheet" href="../css/oficialmain.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/topnav.css">
    <SCRIPT language=JavaScript src="../js/nav.js"></SCRIPT>
    <?php
    $nome = $_POST['nome'];
    $cidadeuf = $_POST['cidadeestado'];
    $pais = $_POST['pais'];
    require_once '../modelo/DaoTime.php';
    require_once '../modelo/Time.php';
    ?>
</head>

<body>
    <?php
    require "../html/topnav_logado.html";
    require "../html/sidenav2.html"; ?>
    <div class="header">
        <h1>Resultado dos times:</h1>
    </div>
    <hr style="opacity: 0;">
    <div class="main">

        <div class="result">
            <?php
            $time = new Time();
            $dao = new DaoTime();
            if ($nome == "" || $cidadeuf == "" || $pais == "") {
                echo '<h1>Erro, preencha os campos corretamente.</h1>';
            } else {
                $time->setNome($nome);
                $time->setCidadeEstado($cidadeuf);
                $time->setPais($pais);
                if ($dao->incluir($time)) {
                    echo '<h1>' . $nome . ' foi criado!</h1>';
                } else {
                    echo '<h1>Erro ao salvar time!  Verifique por erros e tente novamente mais tarde.</h1>';
                }
            }
            ?>
            <hr>
            <a href="listatime.php"><button type="button" class="btn btn-success">Voltar</button></a>
            <hr>
        </div>
    </div>
</body>

</html>