<?php
namespace Sts\Models;

require "/home/andre/pass.php";
use \PDO;
/**
 *
 */
class Conn
{
	public $host = "localhost";
	public $user = 'aandre100';
 	public $pass = PASS;
	public $dbname = "celke";
	public $port = 3306;
	public $connect = null;

	public function conectar(){
		try{
			$this->connect = new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->dbname, $this->user, $this->pass);
			//echo "ligação realizada com sucesso!";
			return $this->connect;
		}catch (Exception $ex) {
			// echo "ligação não realizada com sucesso! Erro: ". $ex;
			return false;
		}
	}


}

 ?>
