<?php


    class Calculadora
    {

        private $total = 0;
        public $teste;
        protected $teste2;

        public function __construct(){

            echo "Gabriel esta estudando".$this->total;
        }


        public function somar($valor1, $valor2):int{

            $this->total =  $valor1 + $valor2;

            return $this->total;
        }

        public function subtrair($valo1, $valor2): int {

            return $valo1 - $valor2;
        }


        public function exibirTotal():int{

            return $this->total;
        }


    }