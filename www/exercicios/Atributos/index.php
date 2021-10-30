<?php 

require_once('livro');

$lagoaAzul = new Livro();

$lagoaAzul->titulo = "as historia da lagoa azul";
$lagoaAzul->autor = "fernando de abreu";
$lagoaAzul->quantidadeDePaginas = "215";
$lagoaAzul->situacao = "emprestado";


print_r($livro);