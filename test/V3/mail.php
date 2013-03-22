<?php
	$mail = $_POST['mail'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];
	
  $to = "contact@maximelamaison.com";
  $message = "$text";
  
 
  $headers = "MIME-Version: 1.0\r\n"; 
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
  $headers .= "From: $name <$mail>\r\nReply-to : $name <$mail>\nX-Mailer:PHP"; 

 if(mail($to, $subject,$message, $headers)){
	echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Mail successful sent!</div>';
  } 
  else{ 
  	echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>There are some errors sending the mail, please try again or verify your server options</div>';
  } 
?>