<?php
require_once 'Database.php';


class Search{
	
	var $database;
	function  __construct(){
		$this->database = new Database();
		$this->database->connect();
	}
	
	function __destruct() {
       $this->database->connect();
   }
	
   
	public function lazySearch($content){ 
		 
		
		
		$sql="select * from book where content like '%$content%' ";
		
		$result =  $this->database->queryDB($sql);
		$row = mysql_fetch_array( $result );
		//print "Reultado: ".$row['title'];
		//return $result;
		return $row;
	}
	
}
?>