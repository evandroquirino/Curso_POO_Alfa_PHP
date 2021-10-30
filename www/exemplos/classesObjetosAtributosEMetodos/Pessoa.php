<?php 

class Pessoa
{
    //public =o acesso do atributo
    //ex: nome o nome do atributo
    public $nome;
    public $cpf;
    public $enderco;
    public $datanascimento;
    public $emprego;
    public $sexo;

    public function comer($fome)
    {
        if($fome == true)
        {
            return "vou comer";
        }
        return "não estou com fome agora";

    }

    public function pular()
    {
        return "Estou Pulando";
    }

    public function retornarDadosPessoa()
    {
        return "Meu nome é "+ $this->nome .
        " minha data de nascimento é ". $this->datanascimento .
        " e meu cpf é ". $this->cpf;
        
    }

    public function retornarEmailDaPessoa()
    {
        $this->email = "renan@gmail.com";
        return $this->email;    
    }

    public function retornaOCargo($cargo)
    {
        $this->mudaOCargaDaPessoa($cargo);
        return $this->cargo;    
    }

    private function mudaOCargaDaPessoa($cargo)
    {
        $this->cargo;
    }

}