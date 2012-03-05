<?php

class Database{
	
	public function connect(){
		
		$link = $conexao = mysql_connect ("localhost", "root", "");
   		if (!$link){
   			 die('Cant connect to database: ' . mysql_error());
   		}
		mysql_select_db ("bibliotex3");
   		return $link;
	}
	
	public function queryDB($query){
		print $query;
		$result = mysql_query($query);
		print ">>> ". $result."<<<< result";
		return $result;
	}
	
	public function updateUser(){
		mysql_query("INSERT INTO Usuarios values (
		3,'Zeh_das_Couves','XXX','Aluno','zeh@cpovo.net')");
	}
}

?>
