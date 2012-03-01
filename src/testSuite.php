<?php

require_once 'PHPUnit.php';

require_once 'PasswordTest.php';
require_once 'Password.php';

$suite  = new PHPUnit_TestSuite("PasswordTest");
$result = PHPUnit::run($suite);

echo $result -> toString();
?>