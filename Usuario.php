<?php
require_once('./Conn.php');

/**
 * Description of Usuario
 * @author André Cardoso <andre-cardoso@outlook.com>
 * @copyright (c) year, André Cardoso
 */

class Usuario {
 public $connect;

 public function listar(){
	$conn = new Conn();
	$this->connect = $conn->conectar();

	$query_users = "SELECT id, nome, email FROM users ORDER BY id DESC LIMIT 40";

	$result_users = $this->connect->prepare($query_users);

	$result_users->execute();
	return $result_users->fetchAll();

 }

}
 ?>
