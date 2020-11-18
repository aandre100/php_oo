<?php 
namespace Sts\Controllers;

/**
 * carrega o index
 */  

class Blog
{
    private array $dados;

    public function index(){
        $listarArtigo = new \Sts\Models\StsListarBlog();
        $this->dados['artigos'] = $listarArtigo->listar();
        $carregarView = new \Core\ConfigView("sts/Views/blog/listarArtigo", $this->dados);
        $carregarView->renderizar();
        
    }
    
}
?>
