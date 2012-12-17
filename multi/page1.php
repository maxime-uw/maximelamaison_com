<?php
	include('./langue.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comment créer un site multilingue en PHP</title>
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>
<body>

<div class="container">
	<h1>Comment créer un site multilingue en PHP</h1>
<?php
	
	echo $label1;
	echo '<a href="./index.php?lang=fr">Fran&ccedil;ais</a> | ';
	echo '<a href="./index.php?lang=en">Anglais</a> | ';
	echo '<a href="./index.php?lang=es">Espagnol</a>';
	
	echo '<br>';
	
    echo $label2;
	echo '<a href="./index.php">Index</a>';
	
	echo '<br>';
	
    echo $label3;
	echo '<b>' . $str1 . '</b>';
?>
</div>
</body>
</html>