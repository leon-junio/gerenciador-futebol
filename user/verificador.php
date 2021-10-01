<?php
require_once '../modelo/DaoUser.php';
require_once '../modelo/User.php';
$dao = new DaoUser();
$login = $_GET['login'];
if ($login == 1) {
    $user = new User();
    if ($_POST['nome'] != '' && $_POST['user'] != '' && $_POST['senha'] != '') {
        $user->setNome($_POST['nome']);
        $user->setUsuario($_POST['user']);
        $user->setSenha(sha1($_POST['senha']));
        if ($dao->incluir($user)) {
            $dao->login($user->getUsuario(), $_POST['senha']);
        } else {
            header('Location:cadastro.php?result=erro');
        }
    }else{
        header('Location:cadastro.php?result=erro');
    }
} else {
    $usuario = $_POST['user'];
    $senha = $_POST['senha'];
    $dao = new DaoUser();
    $dao->login($usuario, $senha);
}
