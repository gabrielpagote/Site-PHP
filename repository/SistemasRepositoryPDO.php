<?php

require "Conexao.php";

class SistemasRepositoryPDO
{
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::criar();
    }

    public function listarTodos(): array{
        $bd = Conexao::criar();
        $sistemasLista = array();

        $sql = "SELECT * FROM opesis";
        $sistemas = $this->conexao->query($sql);
        while ($sistema = $sistemas->fetchObject()) {
            array_push($sistemasLista, $sistema);
        }
        return $sistemasLista;
    }

    public function salvar(Sistema $sistema): bool
    {


        $sql = "INSERT INTO opesis (titulo, poster, sinopse, nota) 
        VALUES (:titulo, :poster, :sinopse, :nota)";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(':titulo', $sistema->titulo, PDO::PARAM_STR);
        $stmt->bindValue(':sinopse', $sistema->sinopse, PDO::PARAM_STR);
        $stmt->bindValue(':nota', $sistema->nota, PDO::PARAM_STR);
        $stmt->bindValue(':poster', $sistema->poster, PDO::PARAM_STR);
        
       return $stmt->execute();
        
    }
}
