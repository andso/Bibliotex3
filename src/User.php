<?php
class User {
	var $database;
	function  __construct(){
		$this->database = new Database();
		$this->database->connect();
	}
	
	public function criaUsuario($name, $mail, $type, $pass){ 
		 
		//verifica se existe o user
		
		 if (self::userExists($mail) ) {
			return false;
		}
		
		$password = new Password();
		$key = $password->crypto($pass);
		$sql="INSERT INTO Usuarios VALUES (5, '$name','$key','$type', '$mail')";
		
		$this->database->queryDB($sql);
		
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