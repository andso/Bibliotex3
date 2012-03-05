<?php

require_once 'PHPUnit.php';

require_once 'PasswordTest.php';
require_once 'Password.php';
require_once 'UserTest.php';
require_once 'User.php';
require_once 'DatabaseTest.php';
require_once 'Database.php';


$suite  = new PHPUnit_TestSuite();

$suite->addTestSuite( 'PasswordTest' );
$suite->addTestSuite( 'UserTest' );
$suite->addTestSuite( 'DatabaseTest' );

$result = PHPUnit::run($suite);

echo $result -> toString();
?>