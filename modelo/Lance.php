<?php

 class Lance{
    private $id;
    private $partida;
    private $gerador;
    private $horario;
    private $lance;
    private $foto;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPartida()
    {
        return $this->partida;
    }

    public function setPartida($partida)
    {
        $this->partida = $partida;
    }

    public function getGerador()
    {
        return $this->gerador;
    }

    public function setGerador($gerador)
    {
        $this->gerador = $gerador;
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function getLance()
    {
        return $this->lance;
    }

    public function setLance($lance)
    {
        $this->lance = $lance;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }













}