<?php

require_once 'PHPUnit.php';
require_once 'User.php';

class UserTest extends PHPUnit_TestCase {
	
	var $test;
	
	function testCriaUsuario(){
		$this->test = new User("nome", "anderson.o@gmail.com", "aluno", "apple");
		$this->assertTrue(false);
	}
}

?>