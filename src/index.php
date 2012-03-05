<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    </head>
    <body>
      Bibliotex 3 - login<br>
        <form action="index.php" method="POST">
            Username: <input type="text" name="username"/><br/>
            
            Password: <input type="password" name="password"/><br/>
          <br/>
            <input type="submit" value="Login"/>
           <br/> 
            <a href="newUser.php"> New User</a>
        </form>
     </body>
</html>
<?php 
require_once 'User.php';

	$user = new User();
	$auth = $user->login($_POST["username"], $_POST["password"]);
	if ($auth){
		echo "peee";
		  session_start();
        $_SESSION['username'] = $_POST['username'];
        header('Location: bibliotex.php');
        exit;
	} else {
		echo "Wrong password dude";
	}
?>