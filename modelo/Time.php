<?php

 class Time{
    private $id;
    private $nome;
    private $cidadeEstado;
    private $pais;

    public function __construct() {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getCidadeEstado()
    {
        return $this->cidadeEstado;
    }

    public function setCidadeEstado($cidadeEstado)
    {
        $this->cidadeEstado = $cidadeEstado;
    }
    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
    }



 }