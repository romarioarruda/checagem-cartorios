<?php

class Cartorio {
    public $dados;

    public function __construct($dados) {
        $this->dados = $dados;
    }


    public function atualizarDados() {
        try {
            $array = [];
            foreach($this->dados as $dados => $valores) {
                if(empty($this->dados[$dados]) && ($dados !== 'status')) return false;
                $array[] = $this->dados[$dados];
            }
            
            Cartorios::atualizarDados(...$array);

        }catch(Throwable $err) {
            return false;
        }
    }

    public function salvarCartorio(){
        try {
            $array = [];
            foreach($this->dados as $dados => $valores) {
                if(empty($this->dados[$dados]) && ($dados !== 'statusCode')) return false;
                $array[] = $this->dados[$dados];
            }
            
            Cartorios::salvarCartorio(...$array);

        }catch(Throwable $err) {
            return false;
        }
    }
}