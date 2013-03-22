<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Maxime Lamaison</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0;">
     <meta name="robots" content="all">
     <meta name="robots" content="all">
     <meta name="keywords" content="Maxime, Lamaison, maxime, lamaison, MAXIME, LAMAISON, informatique, webdesign, web, CV, developpeur, epsi, ingénieur, bordeaux, computing, developper">
     <meta name="description" content="Maxime's personal website - Student, Webdesigner & Webdevelopper">


    <!-- Le styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/my-responsive.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico"> 

  </head>

  <body data-spy="scroll" data-target=".subnav" data-offset="50">



  <!-- Navbar ================================================== -->
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand docs-brand" href="index.php">Maxime Lamaison</a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right docs-nav">
              <li>
                <a href="home"><span class="green-font">H</span>ome</a>
              </li>
              <li>
                <a href="skills"><span class="green-font">S</span>kills</a>
              </li>
              <li class="active">
                <a href="contact"><span class="green-font">C</span>ontact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Content ================================================== -->
    <div class="container">
    <div class="jumbotron"></div>
    <hr />
      <div class="container my-container">
        <div class="row-fluid">
          <div class="span12">
            <h3><span class="titles">say</span> hello</h3><hr />
          </div>
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span7">
               <legend>By Mail</legend>
                <form method="post" action="" id="formail">
                  <fieldset>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input class="span11" name="name" id="name" type="text" placeholder="Your Name">
                   </div>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-envelope"></i></span>
                    <input class="span11" name="mail" id="mail" type="email" placeholder="Your eMail">
                   </div>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-question-sign"></i></span>
                    <input class="span11" name="subject" id="subject" type="text" placeholder="Your Subject">
                   </div>
                   <div class="input-prepend">
                    <span class="add-on"><i class="icon-pencil"></i></span>
                    <textarea class="span11" name="text" id="text" style="resize: none;" rows="5" placeholder="Your Message"></textarea>
                   </div>
                    <button type="submit" class="btn-contact span12" id="sendmail" name="sendmail">Send it!</button>
                  </fieldset>
                </form>
                
               <div id="response">
                 
               </div>
                
              </div>
              <div class="span5">
                <legend>Or</legend>
                <div class="or-contact">
                  <p>I'm actually living in Bordeaux (France) and I would be happy to meet you.</p>
                  <address>
                    69 rue chevalier<br>
                    33000 Bordeaux, FR <br>
                  </address>
                  <address>
                    <a href="mailto:contact@maximelamaison.com">contact(at)maximelamaison.com</a>
                  </address>
                  <div class="contact-social">
                    <a href="https://www.facebook.com/max.lamaison" target="_blank" ><img src="assets/img/Facebook-contact.png"></a>
                    <a href="https://github.com/MaaAx" target="_blank" ><img src="assets/img/Github-contact.png"></a>
                    <a href="https://twitter.com/leMaaAx" target="_blank"><img src="assets/img/Twitter-contact.png"></a>
                    <a href="http://www.linkedin.com/in/maximelamaison" target="_blank"><img src="assets/img/LinkedIn-contact.png"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <hr />
    </div>
    
    <!-- Social ================================================== -->
    <div class="bs-docs-social">
      <div class="container">
        <ul class="bs-docs-social-buttons">
          <li class="follow-btn">
            <a href="https://twitter.com/leMaaAx" class="twitter-follow-button" data-link-color="#0069D6" data-show-count="true">Follow @leMaaAx</a>
          </li>
          <li class="tweet-btn">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.maximelamaison.com" data-count="horizontal" data-via="leMaaAx" data-related="re-creative developer">Tweet</a>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- Footer ================================================== -->
    <footer class="footer">
      <div class="container">
        <div class="social pull-right">
          <a class="icon" href="https://www.facebook.com/max.lamaison" target="_blank" ><img src="assets/img/Facebook.png"></a>
          <a class="icon" href="https://github.com/MaaAx" target="_blank" ><img src="assets/img/Github.png"></a>
          <a class="icon" href="https://twitter.com/leMaaAx" target="_blank"><img src="assets/img/Twitter.png"></a>
          <a class="icon" href="http://www.linkedin.com/in/maximelamaison" target="_blank"><img src="assets/img/LinkedIn.png"></a>
        </div>
        <p>Designed and built with all the love in the world by <span class="green-font">Maxime Lamaison</span>.</p>
      </div>
    </footer>
    
    <!-- Javascript ================================================== -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/mail.js"></script>


  </body>
</html>