<?php 

namespace Core;

/**
 * Description of ConfigController
 *
 * @author Celke
 */
class ConfigController
{

    private string $url;
    private array $urlConjunto;
    private string $urlController;
    private string $urlMetodo;

    public function __construct() {
        
        if (!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlConjunto = explode("/", $this->url);

            if ((isset($this->urlConjunto[0])) AND (isset($this->urlConjunto[1]))) {
                $this->urlController = ucwords($this->urlConjunto[0]);
                $this->urlMetodo = ucwords($this->urlConjunto[1]);
            } else {
                $this->urlController = ucwords("erro");
                $this->urlMetodo = ucwords("index");
            }
        } else {
            $this->urlController = ucwords("home");
            $this->urlMetodo = ucwords("index");
        }
        echo "Controller: {$this->urlController} - Método: {$this->urlMetodo} <br>";
    }
    public function carregar(){
        $classe = "\\Sts\\Controllers\\" .$this->urlController ;
        $classeCarregar = new $classe();
        $classeCarregar->index();
    }

}

?>