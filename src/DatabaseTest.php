<?php
require_once 'PHPUnit.php';
require_once 'Database.php';

class DatabaseTest extends PHPUnit_TestCase {
	
	var $test;
	
	 function DataBaseTest( $nome ) {
	    $this->PHPUnit_TestCase( $nome );
	  }
	  

	function setUp(){
		
	}
	function tearDown(){
		
	}
	
	
	
	function testConnect(){
		
		$this->test = new Database();
		
		$this->assertTrue( $this->test->connect()) ;
	//	$this->test->updateUser();
	//	echo 'baza';
	//	$this->assertEquals("1f3870be274f6c49b3e31a0c6728957f", $this->test->crypto("apple"));
	}
}

?>