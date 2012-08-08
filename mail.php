<html>

<?php 

	ini_set('display_errors',	'On');
	ini_set('html_errors', 		'On');
	ini_set('error_reporting',	E_ALL ^ E_NOTICE ^ E_STRICT);

$name=$HTTP_POST_VARS['name']; 
$email=$HTTP_POST_VARS['email']; 
$object=$HTTP_POST_VARS['subject']; 
$message=$HTTP_POST_VARS['message']; 



/////voici la version Mine 
$headers = "MIME-Version: 1.0\r\n"; 

//////ici on détermine le mail en format text 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 

////ici on détermine l'expediteur et l'adresse de réponse 
$headers .= "From: $name <$email>\r\nReply-to : $name <$email>\nX-Mailer:PHP"; 

$subject="$object"; 
$me="contact@maximelamaison.com";
$body="$message"; 

	
if($body == "" or $object == "" or $name == "") 
{
	$var = '<div class="marketing">
				<br />
				<div class="alert fade in">
					<a class="close" data-dismiss="alert" href="#">&times;</a>
					<strong>Tous les champs doivent etre remplis</strong>
				</div>
			</div>';
}
else{

	if(!strpos($email,"@")){
		$var = '<div class="marketing">
					<br />
					<div class="alert fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>Veuillez rentrer un email valide! </strong>
					</div>
				</div>';
	}
	else{
	if (mail($me,$subject,$body,$headers)) { 
		 $var = '<div class="marketing">
					<br />
					<div class="alert fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>Votre mail a bien été envoyé</strong>
					</div>
				</div>';
	}else{
		$var = '<div class="marketing">
					<br />
					<div class="alert fade in">
						<a class="close" data-dismiss="alert" href="#">&times;</a>
						<strong>une erreur s\'est produite lors de l\'envoi, veuillez réassayer</strong>
					</div>
				</div>';
	} 
}
}

//$var = mailMe($me,$subject,$body,$headers);

?>


  <head>
    <meta charset="utf-8">
    <title>Maxime Lamaison - Contact Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="all">
    <meta name="description" content="Contact Me - Student, Webdesigner & Webdevelopper">


    <!-- Le styles -->
    <link href="docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="docs/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="docs/assets/css/docs.css" rel="stylesheet">
    <link href="docs/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    

 	

 	<script language="JavaScript">
	 	navigateur = navigator.appName;  
	 	if (navigateur == "Microsoft Internet Explorer")  
	 	{  
		 	parent.location.href = "ie";   
		}   
   	</script>
 	


    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="docs/assets/ico/favicon.ico">
    
  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">



  <!-- Navbar
    ================================================== -->
        
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index" data-toggle="tab">Maxime Lamaison</a>
          <div class="nav-collapse collapse">
			<ul class="nav nav-pills" id="myTab">
 			 <li><a href="index">Accueil</a></li>
 			 <li><a href="school">CV</a></li>
 			 <li><a href="mail">Contact</a></li>
 			 <li class="divider-vertical"></li>
             <li class="dropdown" id="menu2">
    			<a class="dropdown-toggle" data-toggle="dropdown" href="#menu2">Download<b class="caret"></b></a>
    			<ul class="dropdown-menu">
      				<li><a href="#">Not available now</a></li>
                </ul>
             </li>
		    </ul>
		  </div>
        </div>
      </div>
    </div>

    
    <div class="container">

<!-- Masthead
================================================== -->

<div class="hero-unit">
<div class="marketing">
	  <h1>dites <strong>Bonjour</strong></h1>

	  <form method="post" action=""> 	
		 <p class="marketing-byline"></p>
		 	<div class="row-fluid">		

		 		<div class="span1">
		 		</div>

		 		
		 		
		 		
		 	<div class="span5">
		 
		    
			<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" placeholder="your name" /> 
		
			<input type="email" name="email"value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="your mail" /> 
		
			<input type="text" name="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject']; ?>" placeholder="the subject" /> 

			<textarea type="text" name="message" rows="7" cols="8" placeholder="your message"><?php  if(isset($_POST['message'])) echo $_POST['message'];  ?></textarea> <br />
			
			<input class="btn btn-info" type="submit" value="Send It!" />
		
		 	</div>
			
		 	<div class="span1">
		 	<img id="sep" src="docs/assets/img/sep.png" alt="sep" width="42" height="260">
		 	
		 	</div>
		 	
		 	<div class="span4" style="text-align: center;">
		 	
		 	<p>Je vis actuellement a Bordeaux et je serai ravi de vous rencontrer.</p>
		 	<p>contact(at)maximelamaison.com</p>
		 	
			<a href="http://www.linkedin.com/in/maximelamaison" target="_blank"><img src="docs/assets/img/glyphicons/png/glyphicons_377_linked_in.png"  width="34" height="34"></a>
			<a href="https://twitter.com/leMaaAx" target="_blank" ><img src="docs/assets/img/glyphicons/png/glyphicons_391_twitter_t.png" width="34" height="34"></a>
			<a href="https://github.com/MaaAx" target="_blank"><img src="docs/assets/img/glyphicons/png/glyphicons_381_github.png" width="34" height="34"></a>
		
		
		 		</div>
		 		
<!--
		 		<div class="span1">
		 		</div>
-->
		
		 </div>	 
	</form>	
  
</div>	

<? echo $var ?>

</div>

	<footer class="footer">
	
	<div class="social">
		<a href="https://github.com/MaaAx" target="_blank" title="github"><img src="docs/assets/img/glyphicons/png/glyphicons_381_github.png" style="margin-right: 30px;" width="24" height="24"></a>
		<a href="https://twitter.com/leMaaAx" target="_blank"><img src="docs/assets/img/glyphicons/png/glyphicons_391_twitter_t.png" width="24" height="24"></a>
		<a href="http://www.linkedin.com/in/maximelamaison" target="_blank"><img src="docs/assets/img/glyphicons/png/glyphicons_377_linked_in.png"  width="24" height="24"></a>
	</div>
	
	<p>&copy MAXIME LAMAISON - 2012</p>
	<p>Student in computing, Webdesigner & Webdeveloper</p>
	
</footer>


<!-- Footer
================================================== -->
	</div><!-- /container -->



<!-- Le javascript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="docs/assets/js/jquery.js"></script>
    <script src="docs/assets/js/google-code-prettify/prettify.js"></script>
    <script src="docs/assets/js/bootstrap-transition.js"></script>
    <script src="docs/assets/js/bootstrap-alert.js"></script>
    <script src="docs/assets/js/bootstrap-modal.js"></script>
    <script src="docs/assets/js/bootstrap-dropdown.js"></script>
    <script src="docs/assets/js/bootstrap-scrollspy.js"></script>
    <script src="docs/assets/js/bootstrap-tab.js"></script>
    <script src="docs/assets/js/bootstrap-tooltip.js"></script>
    <script src="docs/assets/js/bootstrap-popover.js"></script>
    <script src="docs/assets/js/bootstrap-button.js"></script>
    <script src="docs/assets/js/bootstrap-collapse.js"></script>
    <script src="docs/assets/js/bootstrap-carousel.js"></script>
    <script src="docs/assets/js/bootstrap-typeahead.js"></script>
    <script src="docs/assets/js/application.js"></script>

    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-33902230-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

  </body>
</html>
