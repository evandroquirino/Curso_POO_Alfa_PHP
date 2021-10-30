<?php 

require_once("Pessoa.php");

$renan = new Pessoa();

$renan->nome = "renan zanelatto";
$renan->cpf = "000.000.000-00";
$renan->datanascimento= "26/01/1994";
$renan->emprego ="programador";

print_r($renan);
$renan->cargo = 'tratorista';