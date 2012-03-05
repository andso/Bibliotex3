<?php

require_once 'PHPUnit.php';

require_once 'PasswordTest.php';
require_once 'Password.php';
require_once 'UserTest.php';
require_once 'User.php';


$suite  = new PHPUnit_TestSuite();

$suite->addTestSuite( 'PasswordTest' );
$suite->addTestSuite( 'UserTest' );

$result = PHPUnit::run($suite);

echo $result -> toString();
?>