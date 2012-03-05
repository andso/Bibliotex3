<?php

require_once 'PHPUnit.php';
require_once 'User.php';

class UserTest extends PHPUnit_TestCase {
	
	var $test;
	
	function testCriaUsuario(){
		$this->test = new User();
		$result = $this->test->criaUsuario("nome", "zeh@cpovo.net", "aluno", "apple");
		$this->assertTrue($result);
	}
}

?>