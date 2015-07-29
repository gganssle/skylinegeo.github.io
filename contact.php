<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>Skyline Geo</title>
    <meta name="keywords" content="skyline, geo, geology, geophysics">
    <meta name="description" content="Skyline Geo: Earth science meets the cloud.">
    <meta name="viewport" content="width=device-width">
    
    <meta property="og:title" content="Skyline Geo">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://skylinegeo.com">
	<meta property="og:site_name" content="Skyline Geo">
	<meta property="og:description" content="Skyline Geo: Earth science meets the cloud.">

    <!-- Styles -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700italic,700|Lato:400,200,200italic,300,300italic,400italic,600,600italic,700italic,700,900' rel='stylesheet' type='text/css'>
    

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom-styles.css">

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Skyline_Geo_social_mark_144x144_transparent.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Skyline_Geo_social_mark_114x114_transparent.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Skyline_Geo_social_mark_72x72_transparent.png">
    <link rel="apple-touch-icon-precomposed" href="/Skyline_Geo_social_mark_57x57_transparent.png">
    <link rel="shortcut icon" href="/favicon.ico">
  </head>

  <body>
        
    <!--Nav Bar-->
    <!--Nav Bar-->
    <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDownBig">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.html"><img src="img/Skyline_Geo_horz_rgb_small.png" alt="Skyline Geo Logo"></a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
    
    
    <!--Header Section-->
    <section id="page-title">
	    <div class="overlay">
	    	<div class="container">
	    		<div class="row-fluid animated fadeInRight">
	    			<div class="span12 hero-text text-left">
	    				<h1><span class="sg-light">Get </span>In Touch</h1>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </section>
    
    
    <!--Studio Content Section One-->
    <section id="content">
    	<div class="container">
    		<div class="row-fluid animated fadeInUpBig">
    			
    			<!--Start Colums One-->
    			<div class="span3 section-title text-left">
    				<h3>/ Contact</h3>
    			</div>
					
    			<!--Start Column Two-->
    			<div class="span9">
    				<h2>We're in beta release! Contact us to learn more.</h2>
    				        										
					<?php  

                    // check for a successful form post  
                    if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
              
                    // check for a form error  
                    elseif (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";  
              
                    ?>  
																	
					<form method="POST" action="contact-form-submission.php">  
					   <div class="row-fluid">
					       <div class="span4">
                                <div class="control-group">  
                                    <div class="controls">  
                                        <input type="text" name="contact_name" id="input1" placeholder="Your name">  
                                    </div>  
                                </div>  
                                <div class="control-group">  
                                    <div class="controls">  
                                        <input type="text" name="contact_email" id="input2" placeholder="Your email address">  
                                    </div>  
                                </div>
					       </div>
					       
					       <div class="span8">
                                <div class="control-group">  
                                    <div class="controls">  
                                        <textarea name="contact_message" id="input3" rows="8" placeholder="The message you'd like to send."></textarea>  
                                    </div>  
                                </div>  
                                <div class="text-right">  
                                    <input type="hidden" name="save" value="contact">  
                                    <button type="submit" class="btn btn-black btn-large">Send</button>  
                                </div>
					       </div>
                        </div>              
                    </form>  
        					
                </div>
    			
    		</div>
    	</div>
    </section>
            
      
    <!--Footer Section-->
    <section id="footer">
    	<div class="container">
    		<div class="row-fluid animated fadeInUpBig">
    			<div class="span12 text-center">
    				<ul class="footer-info">
    					<li><a href="#">555.555.5555</a> / </li>
    					<li><a href="mailto:info@SkylineGeo.com">info@skylinegeo.com</a>  / </li>
    					<!--<li><a class="twitter" href="http://www.twitter.com/" target="_blank"><i class="icon-twitter icon-large"></i></a></li>-->
    					<li><a class="facebook" href="http://www.facebook.com/skylinegeo" target="_blank"><i class="icon-facebook icon-large"></i></a></li>
    					<li><a class="google" href="http://www.plus.google.com/100005068625074252168" target="_blank"><i class="icon-google-plus icon-large"></i></a></li>
    					<!--<li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="icon-camera-retro icon-large"></i></a></li>-->
    					<!--<li><a class="pinterest" href="http://www.pinterest.com" target="_blank"><i class="icon-pinterest icon-large"></i></a></li>-->
    					<li><a class="linkedin" href="http://www.linkedin.com/company/skylinegeo" target="_blank"><i class="icon-linkedin icon-large"></i></a></li>
    					<!--<li><a class="Github" href="http://www.github.com" target="_blank"><i class="icon-github-alt icon-large"></i></a></li>-->
    				</ul>
    			</div>
    		</div>
    		
    		<div class="row-fluid animated fadeInUp">
    			<div class="span12 footer-logo text-center">
    				<a href="http://www.skylinegeo.com"><img src="img/Skyline_Geo_social_mark_400x400_transparent.png" alt="Footer Logo"></a>
    				<p class="copyright"><small>&copy; 2015 Skyline Geo</small></p>
    			</div>
    		</div>
    	</div>
    </section>
    
    
    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.js"></script>
    <script src="js/main.js"></script>
        
    <script>
  	$(document).ready(function() {
  	$.backstretch([
  	      "img/header1.jpg",
  	      "img/header2.jpg"
  	      ], {
  	        fade: 1000,
  	        duration: 3000
  	    });
  	});
	</script> 
 
   
    </body>
</html>