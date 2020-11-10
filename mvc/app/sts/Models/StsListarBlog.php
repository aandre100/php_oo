<?php
namespace Sts\Models;

/**
 * 
 */

class StsListarBlog extends Conn
{
    private object $conn;

    public function listar(): array{
        echo "Models listar <br>";
        $this->conn = $this->conectar();
        $queryArtigos = "SELECT id, titulo, conteudo FROM artigos ORDER BY id DESC LIMIT 40";
        $resultArticles = $this->conn->prepare($queryArtigos);
        $resultArticles->execute();
        $retorno = $resultArticles->fetchAll();
        return $retorno; 
    }
}
