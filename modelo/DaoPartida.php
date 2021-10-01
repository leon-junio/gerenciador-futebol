<?php
require_once 'Conexao.php';
require_once 'Partida.php';
class DaoPartida{
    public function __construct() {}

    public function getLista(){
        
        $sql = 'select * from partida;';
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

    public function incluir($partida){
        $sql = 'insert into partida (id,timeCasa,golsCasa,timeFora,golsFora,data,local) values(?,?,?,?,?,?,?);';
        try {
            $pst = Conexao::getPreparedStatement($sql);
            $pst-> bindValue(1,$partida->getId());
            $pst-> bindValue(2,$partida->getTimeCasa());
            $pst-> bindValue(3,$partida->getGolsCasa());
            $pst-> bindValue(4,$partida->getTimeFora());
            $pst-> bindValue(5,$partida->getGolsFora());
            $pst-> bindValue(6,$partida->getData());
            $pst-> bindValue(7,$partida->getLocal());
            if($pst->execute()){
                return true;
            }
            else{
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        } }
    public function alterar($partida){
        
    }
    public function remover($partida){
        
    }
    public function localizar($id){
        
    }
}