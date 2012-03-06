<?php

require_once 'Database.php';

class Book{
	
	function  __construct(){
		$this->database = new Database();
		$this->database->connect();
	}
	
	public function listBooks(){
		
	}
	
	public function addBook($title, $author,  $pages, $content, $type){
		$id = $this->database->get_current_insert_id('book');
		//echo "INSERT INTO Book VALUES ($id, '$title', '$author', 01/02/2001,  $pages, '$content', '$type')";
		$sql="INSERT INTO Book VALUES ($id, '$title', '$author', 01/02/2001,  $pages, '$content', '$type')";
		return $this->database->queryDB($sql);
		
	}
	
	
}
	
?>