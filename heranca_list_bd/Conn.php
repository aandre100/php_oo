<?php
require "/home/andre/pass.php";
/**
 *
 */
class Conn
{

	public string $db = "mysql";
	public string $host = "localhost";
	public string $user = "aandre100";
	public string $pass = PASS;
	public string $dbname = "celke";
	public int $port = 3306;
	public object $connect = null;

	public function connect(){
		 try{
		 $this->connect = new PDO($this->db . ':host=' . $this->host .';port='. $this->port . ';dbname='. $this->dbname , $this->user , $this->pass);

		return $this->connect;
	    }catch(Exception $ex){
			die('Erro conexao base de dados');
		 }
	}
}



 ?>
