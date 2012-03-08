<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bibliotex 3 </title>
<link rel="stylesheet" type="text/css" href="assets/view.css" media="all">
<script type="text/javascript" src="assetsview.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Bibliotex 3 </a></h1>
		<form id="form_363808" class="appnitro"  method="post" action="bibliotex.php">
		<div class="form_description">
			<h2>Bibliotex 3 </h2>
			<p>Busca</p>
		</div>						
		<ul >
			
		<li id="li_1" >
			<label class="description" for="element_1"> </label>
				<div>
					<input id="content" name="content" class="element text large" type="text" maxlength="255" value=""/> 
				</div>
			<p class="guidelines" id="guide_1"><small>Digite sua busca</small></p> 
		</li>		
		<li id="li_2" >
		<label class="description" for="element_2"> </label>
		
			<input id="element_2_1" name="element_2" class="element radio" type="radio" value="1" />
			<label class="choice" for="element_2_1">Lazy Search</label>
			<input id="element_2_2" name="element_2" class="element radio" type="radio" value="2" />
			<label class="choice" for="element_2_2">Timeline</label>

		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="363808" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Busca!" />
		</li>
			</ul>
		</form>	
<?php 
	require_once 'Search.php';
	session_start();
	if ( $_SESSION[auth]){
		print 'Bem vindo '. $_SESSION['username'];
	} else {
		header('Location: index.php');
	}
	
	if (empty( $_POST['content'])) {
		exit;
	} 
	$newSearch = new Search();
	$row = $newSearch->lazySearch($_POST["content"]);
	print "Reultado: ".$row['title'];
?>		
		
	</div>
	<img id="bottom" src="assets/bottom.png" alt="">
	</body>
</html>

