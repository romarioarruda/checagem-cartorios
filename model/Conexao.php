<?php

class Conexao {
    
    protected $conexao;
    
     public function __construct() {
        global $conexaoPdo;
        $this->conexao = $conexaoPdo;
    }
}