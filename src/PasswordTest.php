<?php
require_once 'PHPUnit.php';
require_once 'Password.php';

class PasswordTest extends PHPUnit_TestCase {
	
	var $test;
	
	 function PasswordTest( $nome ) {
	    $this->PHPUnit_TestCase( $nome );
	  }
  
	function setUp(){
		
	}
	function tearDown(){
		
	}
	
	
	/**
	 * Teste dumb s— para ver como o phpunit funciona.
	 */
	
	function testCrypto(){
		
		$this->test = new Password();
		$this->assertEquals("1f3870be274f6c49b3e31a0c6728957f", $this->test->crypto("apple"));
	}
	
	
}

?>
