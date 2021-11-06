<?php

class IMC
{
    private float $peso;
    private float $altura;
    private string $sexo;
    private int $idade;

    public function __construct(float $peso, float $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }
}