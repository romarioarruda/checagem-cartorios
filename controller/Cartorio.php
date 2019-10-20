<?php

class Cartorio {
    public $dados;

    public function __construct($dados) {
        $this->dados = $dados;
    }


    public function salvarContatos() {
        try {
            $arrayDados = [$this->dados['idCartorio'], $this->dados['email'], $this->dados['telefone']];
            Cartorios::salvarContatos(...$arrayDados);
        }catch(Throwable $err) {
            return false;
        }
    }
}