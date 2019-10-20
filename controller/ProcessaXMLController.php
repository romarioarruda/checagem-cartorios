<?php

class ProcessaXMLController {
    public $xml;

    public function __construct($xml) {
        $this->xml = $xml;
    }
    public function processar() {
        try {
            $dados = simplexml_load_file($this->xml);

            foreach($dados->cartorio as $xml) {
                Cartorios::salvar($xml);
            }

            return true;
        } catch(Throwable $err) {
            return false;
        } 
    }
}