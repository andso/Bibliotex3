<?php

class Database{
	
	public function connect(){
		
		$link = $conexao = mysql_connect ("localhost", "root", "");
   		if (!$link){
   			 die('Could not connect to database: ' . mysql_error());
   		}
		mysql_select_db ("bibliotex3");
   		return $link;
	}
	
	public function disconnect(){
		mysql_close();		
		
	}
	
	public function queryDB($query){
		//print $query;
		$result = mysql_query($query);
		//print ">>> ". $result."<<<< result";
		return $result;
	}
	/*
	public function updateUser(){
		mysql_query("INSERT INTO Usuarios values (
		3,'Zeh_das_Couves','XXX','Aluno','zeh@cpovo.net')");
	}
	*/
	function get_current_insert_id($table){
    	$q = "SELECT LAST_INSERT_ID() FROM $table"; 
   		return mysql_num_rows(mysql_query($q)) + 1;
	}

}

?>
