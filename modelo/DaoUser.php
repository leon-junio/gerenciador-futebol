<?php
require_once 'Conexao.php';
require_once 'User.php';

class DaoUser
{
    public function __construct()
    {
    }
    public function login($user, $senha)
    {
        $senha = sha1($senha);
        $sql = 'select * from usuario where usuario="' . $user . '" and senha="' . $senha . '";';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $lista = array();
            if ($pst->execute()) {
                if($pst->rowCount()>0){
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['user'] = "1";
                foreach ($lista as $linha) {
                    $_SESSION['nome'] = $linha['usuario'];
                }
               
                header('Location:../visual/homepage.php?visitante=0');
            }else{
                header('Location:login.php?login=0&'.$sql);
            }
        }
        } catch (PDOexception $e) {
            echo $e->getMessage();
            header('Location:../visual/homepage.php?login=0');
        }
    }


    public function incluir($user)
    {
        $sql = 'insert into usuario(id,nome,usuario,senha) values(?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst->bindValue(1, $user->getId());
            $pst->bindValue(2, $user->getNome());
            $pst->bindValue(3, $user->getUsuario());
            $pst->bindValue(4, $user->getSenha());
            if ($pst->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function alterar($time)
    {
    }
    public function remover($time)
    {
    }
    public function localizar($id)
    {
    }
}
