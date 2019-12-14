<?php

class Cartorios extends Conexao {
    
    public function __construct() {
        parent::__construct();
    }
    public function getDados($filtroNome = "") {
        $sql = "SELECT * FROM cartorio";
        if (!empty($filtroNome)) {
            $sql .= " WHERE nome LIKE '%".addslashes($filtroNome)."%'";
        }
        $sql .= " ORDER BY nome ASC";
        $objConn = $this->conexao->query($sql);
        
        return $objConn->fetchAll();
    }


    public static function salvar($xml) {
        try {
            global $conexaoPdo;
            $sql = "INSERT INTO cartorio SET nome = :nome, razao = :razao, documento = :documento, cep = :cep, endereco = :endereco,bairro = :bairro, cidade = :cidade, uf = :uf, tabeliao = :tabeliao, ativo = :ativo";
            $objConn = $conexaoPdo->prepare($sql);
            $objConn->bindValue(':nome', $xml->nome);
            $objConn->bindValue(':razao', $xml->razao);
            $objConn->bindValue(':documento', $xml->documento);
            $objConn->bindValue(':cep', $xml->cep);
            $objConn->bindValue(':endereco', $xml->endereco);
            $objConn->bindValue(':bairro', $xml->bairro);
            $objConn->bindValue(':cidade', $xml->cidade);
            $objConn->bindValue(':uf', $xml->uf);
            $objConn->bindValue(':tabeliao', $xml->tabeliao);
            $objConn->bindValue(':ativo', $xml->ativo);
            $objConn->execute();

        } catch(Throwable $err) {
            echo 'Mensagem: '.$err->getMessage();
            echo '<br>LINHA: '.$err->getLine();
        }
    }


    public static function atualizarDados($id, $nome, $razao, $docs, $cep, $endereco, $bairro, $cidade, $uf, $email, $telefone, $tabeliao, $status) {
        try {
            global $conexaoPdo;
            
            $sql = "UPDATE cartorio SET nome = :nome, razao = :razao, documento = :docs, cep = :cep, endereco = :endereco, bairro = :bairro, cidade = :cidade, uf = :uf, email = :email, telefone = :telefone, tabeliao = :tabeliao, ativo = :ativo WHERE id = :id";
            $objConn = $conexaoPdo->prepare($sql);
            $objConn->bindValue(':nome', $nome);
            $objConn->bindValue(':razao', $razao);
            $objConn->bindValue(':docs', $docs);
            $objConn->bindValue(':cep', $cep);
            $objConn->bindValue(':endereco', $endereco);
            $objConn->bindValue(':bairro', $bairro);
            $objConn->bindValue(':cidade', $cidade);
            $objConn->bindValue(':uf', strtoupper($uf));
            $objConn->bindValue(':email', $email);
            $objConn->bindValue(':telefone', $telefone);
            $objConn->bindValue(':tabeliao', $tabeliao);
            $objConn->bindValue(':ativo', $status);
            $objConn->bindValue(':id', $id);
            if ($objConn->execute()) {
                echo 'dados-atualizados';
            }
        } catch(Throwable $err) {
            echo 'Mensagem: '.$err->getMessage();
            echo '<br>LINHA: '.$err->getLine();
            return false;
        }
    }

    public static function salvarCartorio($nome, $razao, $docs, $cep, $endereco, $bairro, $cidade, $uf, $email, $telefone, $tabeliao, $status) {
        try {
            global $conexaoPdo;
            
            $sql = "INSERT INTO cartorio SET nome = :nome, razao = :razao, documento = :docs, cep = :cep, endereco = :endereco, bairro = :bairro, cidade = :cidade, uf = :uf, email = :email, telefone = :telefone, tabeliao = :tabeliao, ativo = :ativo";
            $objConn = $conexaoPdo->prepare($sql);
            $objConn->bindValue(':nome', $nome);
            $objConn->bindValue(':razao', $razao);
            $objConn->bindValue(':docs', $docs);
            $objConn->bindValue(':cep', $cep);
            $objConn->bindValue(':endereco', $endereco);
            $objConn->bindValue(':bairro', $bairro);
            $objConn->bindValue(':cidade', $cidade);
            $objConn->bindValue(':uf', strtoupper($uf));
            $objConn->bindValue(':email', $email);
            $objConn->bindValue(':telefone', $telefone);
            $objConn->bindValue(':tabeliao', $tabeliao);
            $objConn->bindValue(':ativo', $status);

            if ($objConn->execute()) {
                echo 'cartorio-salvo';
            }
        } catch(Throwable $err) {
            echo 'Mensagem: '.$err->getMessage();
            echo '<br>LINHA: '.$err->getLine();
            return false;
        }
    }

    public function deletar($id) {
        $sql = "DELETE FROM cartorio WHERE id = :id";
        $objConn = $this->conexao->prepare($sql);
        $objConn->bindValue(':id', $id);
        if($objConn->execute()) {
            return true;
        }
    }
}