<?php
require_once './vendor/autoload.php';
require_once 'autoload.php';

Flight::route('/', function(){
    $cartorios = new Cartorios();
    
    if (!empty($_GET['filtro'])) {
        Flight::view()->set('cartorios', $cartorios->getDados($_GET['filtro']));
    } else {
        Flight::view()->set('cartorios', $cartorios->getDados());
    }
    Flight::render('dados-cartorios');
});

Flight::route('POST /atualizar', function(){
    $xml = Flight::request()->data['url'];

    $processar = new ProcessaXMLController($xml);
    if ($processar->processar()) {
        echo 'ok';
    }
});

Flight::route('POST /atualizar-dados', function(){
    $dados = Flight::request()->data;

    $cartorio = new Cartorio($dados);
    $cartorio->atualizarDados();
});

Flight::route('POST /salvar-cartorio', function(){
    $dados = Flight::request()->data;

    $cartorio = new Cartorio($dados);
    $cartorio->salvarCartorio();
});

Flight::route('POST /deletar-cartorio', function(){
    $id = Flight::request()->data['id'];

    $cartorio = new Cartorios();
    if ($cartorio->deletar($id)) {
        echo 'apagado';
    }
});

Flight::start();