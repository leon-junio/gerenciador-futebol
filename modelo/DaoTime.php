<?php
require_once 'Conexao.php';
require_once 'Time.php';

class DaoTime
{
    public function __construct() { }
    public function getLista(){
        $sql = 'select * from time;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if($pst->execute()){
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    public function getNomes(){
        $sql = 'select nome from time;';
        $lista = array();
        try {
            $pst = Conexao::getPreparedStatement($sql);
            if($pst->execute()){
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOexception $e) {
            echo $e->getMessage();
        }
        return $lista;
    }


    public function incluir($time){
        $sql = 'insert into time (id,nome,CidadeEstado,pais) values(?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst-> bindValue(1,$time->getId());
            $pst-> bindValue(2,$time->getNome());
            $pst-> bindValue(3,$time->getCidadeEstado());
            $pst-> bindValue(4,$time->getPais());
            if($pst->execute()){
                return true;
            }
            else{
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    public function alterar($time){
        
    }
    public function remover($time){
        
    }
    public function localizar($id){ 
        
    }
}