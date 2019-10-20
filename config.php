<?php

try {
    global $conexaoPdo;
    $conexaoPdo = new PDO("mysql:dbname=cartorios;host=localhost;charset=utf8", "root", "");
} catch (Throwable $exception) {
    echo '<br/>PATH DO ARQUIVO: '.$exception->getFile().'::'.$exception->getLine();
    echo '<br/>MENSAGEM: '.$exception->getMessage();
    exit('<br/>ERRO NA CONEXÃO COM O BANCO DE DADOS.');
}