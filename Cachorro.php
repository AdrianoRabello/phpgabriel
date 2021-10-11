<?php

include 'Animal.php';

class Cachorro extends Animal{

    private $patas = 4;

    /**
     * @param int $patas
     */
    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getPatas(): int
    {
        return $this->patas;
    }

    /**
     * @param int $patas
     */
    public function setPatas(int $patas): void
    {
        $this->patas = $patas;
    }



    public function apresentar(){

        echo "Eu tenho ". $this->patas;
        echo "O nome do meu dono é  ". $this->dono;
        echo "Meu nome é  ". $this->nome;

    }





}