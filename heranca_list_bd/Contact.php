<?php
require_once('Conn.php');



/**
 *
 */
class Contact extends Conn
{
	public int $id;
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

	public function view():array{
		$this->conn = $this->connect();
		$query_msg_contact = "SELECT id, name, email, msg_title, msg_content
		FROM msgs_contacts
		WHERE id = :id";
		$listar_msgs_contacts = $this->conn->prepare($query_msg_contact);

		$listar_msgs_contacts->bindParam(':id', $this->id, PDO::PARAM_INT);
		$listar_msgs_contacts->execute();
		return $listar_msgs_contacts->fetch();

	}

	public function create():bool{
		$this->conn = $this->connect();
		$query_msgs_contacts = "INSERT INTO msgs_contacts
		   (name, email, msg_title, msg_content, created) VALUES
		   (:name, :email, :msg_title, :msg_content, NOW())";
			 $content = utf8_encode($this->formData['msg_content']);
		   $creat_msgs_contacts = $this->conn->prepare($query_msgs_contacts);
		   $creat_msgs_contacts->bindParam(':name', $this->formData['name'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':msg_title', $this->formData['msg_title'], PDO::PARAM_STR);
		   $creat_msgs_contacts->bindParam(':msg_content', $content, PDO::PARAM_STR);

		   $creat_msgs_contacts->execute();
		   if ($creat_msgs_contacts->rowCount()) {
			   return true;
		   } else {
			   return false;
		   }
	}

	public function update():bool{
		$this->conn = $this->connect();
		$query_msg_contact = "UPDATE msgs_contacts SET
		   name=:name, email=:email, msg_title=:msg_title, msg_content=:msg_content, modified = NOW()
		   WHERE id=:id";
		   $edit_msg_contact = $this->conn->prepare($query_msg_contact);
		    // var_dump($this->formData['id']);
			// exit();
			 $content = utf8_encode($this->formData['msg_content']);
		   $edit_msg_contact->bindParam(':name', $this->formData['name'], PDO::PARAM_STR);
		   $edit_msg_contact->bindParam(':email', $this->formData['email'], PDO::PARAM_STR);
		   $edit_msg_contact->bindParam(':msg_title', $this->formData['msg_title'], PDO::PARAM_STR);
		   $edit_msg_contact->bindParam(':msg_content', $content, PDO::PARAM_STR);
		   $edit_msg_contact->bindParam(':id', $this->formData['id'], PDO::PARAM_INT);
		   $edit_msg_contact->execute();
		   // $arr = $edit_msg_contact->errorInfo();
		   // print_r($arr);
		   if ($edit_msg_contact->rowCount()) {
			  return true;
		  } else {
			  return false;
		  }

	}
	public function delete(): bool
	{
		$this->conn = $this->connect();
		$del_query = "DELETE FROM msgs_contacts WHERE id=:id";
		$del_msg_contact = $this->conn->prepare($del_query);
		$del_msg_contact->bindParam(':id', $this->id, PDO::PARAM_INT);
		$del_msg_contact->execute();
		if($del_msg_contact->rowCount()){
			return true;
		} else {
			return false;
		}

	}
	public static function str_to_utf8($str) {
    $decoded = utf8_decode($str);
    if (mb_detect_encoding($decoded , 'UTF-8', true) === false)
        return $str;
    return $decoded;
}


}


 ?>
