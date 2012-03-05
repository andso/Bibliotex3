<?php
require_once 'Database.php';
require_once 'Password.php';


class User {
	var $database;
	function  __construct(){
		$this->database = new Database();
		$this->database->connect();
	}
	
	public function createUser($name, $mail, $type, $pass){ 
		 
		//verifica se existe o user
		
		 if (self::userExists($mail) ) {
			return false;
		}
		
		$password = new Password();
		$key = $password->crypto($pass);
		$id = $this->database->get_current_insert_id('Usuarios');
		$sql="INSERT INTO Usuarios VALUES ($id, '$name','$key','$type', '$mail')";
		
		return $this->database->queryDB($sql);
		
	}
	
	  function userExists($mail){ 
		
		//TODO: create a new class to handle the user sql stuff
		$sqlResult = $this->database->queryDB("Select username from Usuarios where email=$mail");
		
		if ( mysql_num_rows($sqlResult)>0){
		
			return true;
		} else{
		
			return false;
		}
	}
	
}
?>