<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bibliotex 3 </title>
<link rel="stylesheet" type="text/css" href="assets/view.css" media="all">
<script type="text/javascript" src="assets/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="assets/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Bibliotex 3 </a></h1>
		<form id="form_363808" class="appnitro"  method="post" action="index.php">
		<div class="form_description">
		<h2>Bibliotex 3 </h2>
		<p>Login</p>
		</div>						
		<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Usu‡rio </label>
		<div>
			<input id="element_1" name="username" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Senha </label>
		<div>
			<input type="password" id="element_2" name="password" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="363808" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Entrar" />
		</li>
			</ul>
		</form>	
		<div id="footer">
		 <a href="newUser.php" > Novo Usuario </a>
		</div>
	</div>
	<img id="bottom" src="assets/bottom.png" alt="">
	</body>
</html>

<?php 
	require_once 'User.php';
	if (empty( $_POST['username'])) {
		print 'Preencha seu usuario!';
		exit;
	} 
	$auth = false;
	$user = new User();
	$auth = $user->login($_POST['username'], $_POST['password']);
	if ($auth){
			//error_log("Logando  ".$auth, 0 );
			session_start();
			//error_log("Logando  2", 0 );
        	$_SESSION['username'] = $_POST['username'];
        	$_SESSION["auth"] = $auth;
        	//error_log("Logando  3", 0 );
        	 
        	header('Location: bibliotex.php');
        	//exit;
	} else {
		error_log("Wrong password ".$auth, 0 );
		print "Senha incorreta";
		//header('Location: index.php');
	}
?>
