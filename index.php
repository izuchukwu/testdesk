
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>TestDesk | Supercharging research</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-blues.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
				
		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<a href="http://utdallas.edu/"><span class="alt-font">The University of Texas at Dallas</span></a>
							
								<div class="pull-right">
									<a href="login.html" class="btn btn-primary btn-white btn-xs">Learn More</a>
									<a href="#" class="btn btn-primary btn-filled btn-xs">Signup</a>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				
				
					<div class="row nav-menu text-right">
						<div class="col-sm-3 col-md-2 columns">
							<a href="index.html">
								<img class="logo logo-light" alt="Logo" src="img/logo-light.png">
								<img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
							</a>
						</div>
					
						<div class="col-sm-9 col-md-10 columns">
							<ul class="menu">
								<li class=""><a href="#">Open Studies</a></li>
								<li class=""><a href="#">Start a Study</a></li>
								<li class=""><a href="#">Contact</a></li>
							</ul>
						</div>
					</div><!--end of row-->
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div><!--end of container-->
			</nav>
		</div>
		
		<div class="main-container">
			<header class="signup">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/hero20.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<img alt="logo" class="logo" src="img/logo-light.png">
							<h1 class="text-white">Less Logistics, More Results.</h1>
							<span class="text-white space-bottom-medium">Spend less time coordinating and planning your research and more time researching with TestDesk.<br/>Looking for a participation opportunity? Check out <a href="#">our featured studies.</a><br/><br/></span>
						</div>
					</div><!--end of row-->

					<div class="row text-center">
						
							<div class="col-sm-12 text-center">
								<div class="photo-form-wrapper clearfix">
									<div class="row">
										<div class="col-md-5 col-sm-4">
											<input class="form-email" type="text" placeholder="Sign in with your UTD NetID">
										</div>
							
										<div class="col-md-4 col-sm-4">
											<input class="form-password" type="password" placeholder="Password">
										</div>
										
										<div class="col-md-3 col-sm-4">
											<input type="submit" class="btn btn-primary btn-filled" value="Sign In">
										</div>
									</div><!--end of row-->
						
								</div><!--end of photo form wrapper-->
								
								<span class="text-white"><i class="icon icon_lock"></i> Work comfortably from home. All research access is SSL Secured.</span>
							</div>
						
						</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<section class="strip">
				<div class="container">
								<div class="col-sm-12 text-center">
									<h1><br/>Featured Studies</h1>
								</div>
				</div>
			</section>
			
			<section class="no-pad clearfix">
				
				<?php
					// Create connection
					$con = mysqli_connect("localhost","root","","wordpress");

					// Check connection
					if (mysqli_connect_errno())
					{
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					//Take User 1's first 3 studies
					$result = mysqli_query($con, "SELECT * FROM Studies WHERE userID = 1");

					for($count = 0; $count < 3; $count++)
					{
						$row = mysqli_fetch_array($result);
						//echo $row["studyField"];
						echo '<div class="col-md-4 col-sm-12 no-pad">
						
							<div class="feature-box">
							
								<div class="background-image-holder overlay">
									<img class="background-image" alt="Background Image" src="img/box2.jpg">
								</div>
								
								<div class="inner">
									<span class="alt-font text-white">'.$row["studyField"].'</span>
									<h1 class="text-white">'.$row["studyName"].'</h1>
									<p class="text-white">'.$row["studyDescription"].'</p>
									<a href="#" class="btn btn-primary btn-white">Tell Me More</a>
								</div>
							</div>
							
						</div>';
					}
				?>

			</section>

			<section class="feature-selector">
				<div class="container">
					<div class="row">
						<ul class="selector-tabs clearfix">
							<li class="clearfix text-primary col-md-3 col-sm-6 active">
									<i class="icon icon-target"></i>
									<span>Targeted Branding</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-3 col-sm-6">
									<i class="icon icon-map-pin"></i>
									<span>Geolocating Features</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-3 col-sm-6">
									<i class="icon icon-strategy"></i>
									<span>Marketing Strategy</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-3 col-sm-6">
									<i class="icon icon-anchor"></i>
									<span>On Page Navigation</span>
							</li><!--end of tab-->
						</ul>
					</div>
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Visually appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Many appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Several appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Numerous appealing ways to present information</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
		
					</ul>
				</div>
			</section>
			
			<section class="video-inline">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<h1 class="space-bottom-medium">Pivot is an effortlessly simple startup template with usable features.</h1>
							<p class="lead space-bottom-medium">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
							</p>
							<a href="#" class="btn btn-primary">See Features</a>
							<a href="#" class="btn btn-primary btn-text-only">Learn More</a>
						</div>
						
						<div class="col-md-6 col-sm-12">
							<div class="inline-video-wrapper">
								<video controls="">
									<source src="video/video.webm" type="video/webm">
									<source src="video/video.mp4" type="video/mp4">
									<source src="video/video.ogv" type="video/ogg">
								</video>
							</div>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>

			<section class="strip bg-secondary-1">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12 pull-left">
							<h3 class="text-white"><strong>Change the way you research.</strong> You'll never go back to shared Google Drive accounts again.</h3>
						</div>
						
						<div class="col-sm-4 col-xs-12 pull-right text-right">
							<a href="#" class="btn btn-primary btn-white">Learn More</a>
						</div>
					</div>
				</div>
			</section>
			
			<section class="clients-2">
				<div class="container">
					<div class="row">
						
						
						<div class="col-md-4 col-sm-4">
							<img alt="Client Logo" src="img/client4.png">
						</div>
						
						<div class="col-md-4 col-sm-4">
							<img alt="Client Logo" src="img/client5.png">
						</div>
						
						<div class="col-md-4 col-sm-4">
							<img alt="Client Logo" src="img/client6.png">
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
		
		<div class="footer-container">
		
			<footer class="bg-primary short-2">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<span class="text-white">© 2014 Pivot Inc.</span>
							<span class="text-white"><a href="#">hello@pivot.net</a></span>
							<span class="text-white">+614 3827 492</span>
							<span class="text-white">300 Collins St. Melbourne 3000</span>
						</div>
					</div><!--end for row-->
				</div><!--end of container-->
				
				<div class="contact-action">
					<div class="align-vertical">
						<i class="icon text-white icon_mail"></i>
						<a href="contact.html" class="text-white"><span class="text-white">Get in touch with us <i class="icon arrow_right"></i></span></a>
					</div>
				</div>
			</footer>
		</div>
				
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				