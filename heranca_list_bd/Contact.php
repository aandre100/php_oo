<?php
require_once('Conn.php');



/**
 *
 */
class Contact extends Conn
{
	public object $conn;
	public array $formData;

	public function list(): array{
		$this->conn = $this->connect();
		$query_msgs_contacts = "SELECT id, name, email, msg_title, msg_content
		FROM msgs_contacts
		ORDER BY id DESC
		LIMIT 40";
		$result_msgs_contacts = $this->conn->prepare($query_msgs_contacts);
		$result_msgs_contacts->execute();
		$retorno = $result_msgs_contacts->fetchAll();



		return $retorno;
		//var_dump($result);
	}

	public function view(){
		$id = 1;
		$this->conn = $this->connect();
		$query_msg_contact = "SELECT id, name, email, msg_title, msg_content
		FROM msgs_contacts
		WHERE id = :id";
		$listar_msgs_contacts = $this->conn->prepare($query_msg_contact);
		$listar_msgs_contacts->bindParam(':id', $id);
		$listar_msgs_contacts->execute();
		return $listar_msgs_contacts->fetchAll();

	}

	public function create(){
		$this->conn = $this->connect();
		$query_msgs_contacts = "INSERT INTO msgs_contacts
		   (name, email, msg_title, msg_content, created) VALUES
		   (:name, :email, :msg_title, :msg_content, NOW())";
		   $creat_msgs_contacts = $this->conn->prepare($query_msgs_contacts);
		   $creat_msgs_contacts->bindParam(':name', $this->formData['name'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':msg_title', $this->formData['msg_title'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':msg_content', $this->formData['msg_content'], PDO::PARAM_STR);

		   $creat_msgs_contacts->execute();
		   if ($creat_msgs_contacts->rowCount()) {
			   return true;
		   } else {
			   return false;
		   }
	}
}


 ?>
