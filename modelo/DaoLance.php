<?php
require_once 'Conexao.php';
require_once 'Lance.php';
class DaoLance {
    public function __construct() {}

    public function getLista(){

        $sql = 'select * from lance;';
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

    public function incluir($lance){
        $sql = 'insert into lance (id,partida,gerador,horario,lance,foto) values(?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst-> bindValue(1,$lance->getId());
            $pst-> bindValue(2,$lance->getPartida());
            $pst-> bindValue(3,$lance->getGerador());
            $pst-> bindValue(4,$lance->getHorario());
            $pst-> bindValue(5,$lance->getLance());
            $pst-> bindValue(6,$lance->getFoto());
            if($pst->execute()){
                return true;
            }
            else{
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }}
    public function alterar($lance){
        
    }
    public function remover($lance){
        
    }
    public function localizar($id){
        
    }
}