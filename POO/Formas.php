<?php

interface Forma
{
    public function area();
}

class Retangulo implements Forma
{
    private $base;
    private $altura;

    public function area()
    {
        return $this->base * $this->altura;
    }
}