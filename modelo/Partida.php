<?php

 class Partida{
    private $id;
    private $timeCasa;
    private $golsCasa;
    private $timeFora;
    private $golsFora;
    private $data;
    private $local;


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTimeCasa()
    {
        return $this->timeCasa;
    }

    public function setTimeCasa($timeCasa)
    {
        $this->timeCasa = $timeCasa;
    }

    public function getGolsCasa()
    {
        return $this->golsCasa;
    }

    public function setGolsCasa($golsCasa)
    {
        $this->golsCasa = $golsCasa;
    }

    public function getTimeFora()
    {
        return $this->timeFora;
    }

    public function setTimeFora($timeFora)
    {
        $this->timeFora = $timeFora;
    }

    public function getGolsFora()
    {
        return $this->golsFora;
    }

    public function setGolsFora($golsFora)
    {
        $this->golsFora = $golsFora;
    }


    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }

 









}