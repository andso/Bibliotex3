<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
      New User<br>
        <form action="newUser.php" method="POST">
            Username: <input type="text" name="username"/><br/>
            E-mail: <input type="text" name="mail"/><br/>
            
            Password: <input type="password" name="password"/><br/>
            Please confirm your password: <input type="password" name="password2"/><br/>
            <input type="submit" value="Register"/>
        </form>
     </body>
</html>
<?php 
require_once 'User.php';

	if ($_POST["password"]=="")
    	$passwordIsEmpty = true;
	if ($_POST["password2"]=="")
    	$password2IsEmpty = true;
	if ($_POST["password"]!=$_POST["password2"]) {
    	$passwordIsValid = false;
	}
//"nome", "zeh@cpovo.net", "aluno", "apple"
	$user = new User();
	echo $user->createUser($_POST["username"], $_POST["mail"], "aluno", $_POST["password"]);
    ?>