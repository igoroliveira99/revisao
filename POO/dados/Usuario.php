<?php

namespace POO\dados;

class Usuario
{
    private $email = "v@v.com";

    public function exibirNome()
    {
        echo $this->email;
    }
}