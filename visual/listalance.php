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
    <title>Lista de Lances</title>
    <meta name="leon fut" content="">
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
    if($user==1){
        require "../html/topnav_logado.html";
        require "../html/sidenav2.html";
    }else{
        require "../html/topnav_visit.html";
        require "../html/sidenav3.html";
    }
    ?>
        <div class="header">
            <h1><?php echo $placar ?></h1>
        </div>
        <br>
        <div class="main">
            <div class="dadosbd">
                <h1>Lances</h1>
                <table>
                    <tr>
                        <th>Id do Lance</th>
                        <th>Partida</th>
                        <th>Gerador</th>
                        <th>Horario</th>
                        <th>Lance</th>
                        <th>Foto</th>
                    </tr>
                    <?php
                    require_once '../modelo/Lance.php';
                    require_once '../modelo/DaoLance.php';
                    $dao = new DaoLance();
                    $lista = $dao->getLista();
                    foreach ($lista as $linha) {
                        if ($linha["partida"] == $idpartida) {
                            echo '<tr>';
                            foreach ($linha as $valor) {
                                echo '<td>' . $valor . '</td>';
                            }
                            echo '</tr>';
                        }
                    }
                    ?>
                </table>
            </div>
            <div class="header">
                <h2>Crie e salve seus lances:</h2>
                <a href=<?php echo '"formcadastrolance.php?id=' . $idpartida . '&placar=' . $placar . '"' ?>><button type="button" class="btn btn-success">Cadastrar</button></a>
                <a href="listapartida.php"><button type="button" class="btn btn-success">Voltar</button></a>
            </div>
        </div>

</body>

</html>