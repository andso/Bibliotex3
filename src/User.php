<?php
require_once 'Database.php';
require_once 'Password.php';


class User {
	var $database;
	function  __construct(){
		$this->database = new Database();
		$this->database->connect();
	}
	
	function __destruct() {
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
		print $sql;
		return $this->database->queryDB($sql);
		
	}
	
	  function userExists($mail){ 
		
		//TODO: create a new class to handle the user sql stuff
		return  $this->database->queryDB("Select username from Usuarios where email=$mail");
	}
	
	public function login($username, $password){
		if(empty($username)){
			return false;
		}
		//error_log("Username  ".$username, 0 );
		$key = new Password();
		$md5 = $key->crypto($password);
		if ( mysql_num_rows(
				$this->database->queryDB(
				"Select * from Usuarios where username='$username' and password = '$md5'") 
			)> 0
		) {
			return true;
		} else {
			return false;
		}
	}
	
}
?>
