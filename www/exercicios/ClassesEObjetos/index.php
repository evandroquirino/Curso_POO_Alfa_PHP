<?php 

require_once('aluno.php');
require_once('professor.php');

$evandro = new Aluno();

$evandro->nome = "evandro quirino";
$evandro->ra ="11200";
$evandro->cpf ="070.556.895-21";
$evandro->idade ="21";

$macoto = new Professor();

$macoto->nome = "macoto junior";
$macoto->cpf = "125.548.548.87";
$macoto->idade = "54";
$macoto->materiasQueLeciona = "php";