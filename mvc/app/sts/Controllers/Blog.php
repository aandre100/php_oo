<?php 
namespace Sts\Controllers;

/**
 * carrega o index
 */  

class Blog
{
    private array $dados;

    public function index(){
        echo "Controller da página Blog<br>";
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->dados['artigos'] = $listarArtigo->listar();
        $carregarView = new \Core\ConfigView("sts/views/blog/listarArtigo", $this->dados);
        
    }
    
}
?>
