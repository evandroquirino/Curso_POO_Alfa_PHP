<?php 

class Animal
{

    public $raca;
    public $cor;
    public $especie;
    public $idade;

    public function comer($fome)
    {
        if($fome == true)
        {
            return "preciso dar comida";
        }
        return "não preciso dar comida agora";

    }

    public function correr()
    {
        return "ele esta correndo";
    }
}   