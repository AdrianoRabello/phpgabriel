<?php


class Animal{

    protected $nome;
    protected $dono;
    public function __construct()
    {
        echo "Classe animal criada";
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono
     */
    public function setDono($dono): void
    {
        $this->dono = $dono;
    }







}