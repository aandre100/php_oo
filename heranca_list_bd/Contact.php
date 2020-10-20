<?php
require_once('Conn.php');



/**
 *
 */
class Contact extends Conn
{
	public object $conn;

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
	public function create($values){
		// var_dump($values);
		// exit();
		$this->conn = $this->connect();
		$sqlCreate = "INSERT INTO msgs_contacts (name, email, msg_title, msg_content) VALUES (:name, :email, :title, :content)";
		$createContact = $this->conn->prepare($sqlCreate);
		$createContact->bindValue(':name', $values["name"]);
		$createContact->bindValue(':email', $values["email"]);
		$createContact->bindValue(':title', $values["msg_title"]);
		$createContact->bindValue(':content', $values["msg_content"]);
		return $createContact->execute();
	}
}


 ?>
