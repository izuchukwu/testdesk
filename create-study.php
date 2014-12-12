
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">

		<title>Manage Study | TestDesk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--meta http-equiv="Content-Type" content="text/html; charset=utf-8" /-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--link href="css/bootstrap-clay.min.css" rel="stylesheet" type="text/css" media="all"/-->
        <link href="css/bootstrap-timepicker-clay.min.css" rel="stylesheet" type="text/css" media="all"/>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>

        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <!--link href="css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="all"/-->
        <link href="css/theme-blues.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        
        <script src="jquery/external/jquery/jquery.js"></script>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="jquery/jquery-ui.min.js"></script>
        <script src="bootstrap-datepicker/bootstrap-datepicker.js"></script>

        <script>
			$(function()
			{
				$( "#datepicker" ).datepicker();
				$('#timepicker1').timepicker(
				{
				    minuteStep: 5,
				    showInputs: false,
				    disableFocus: true
				});
				$('#timepicker2').timepicker(
				{
				    minuteStep: 5,
				    showInputs: false,
				    disableFocus: true
				});
				//Set initial values
				$('#timepicker1').val("Start Time");
				$('#timepicker2').val("End Time");
			});
        </script>
    </head>
    <body>
    	<?php
    		// Create connection
			$con = mysqli_connect("localhost","root","","wordpress");

			// Check connection
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
    	?>
		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<a href="http://utdallas.edu/"><span class="alt-font">The University of Texas at Dallas</span></a>
							
								<div class="pull-right">
									<a href="signup.php" class="btn btn-primary btn-filled btn-xs" style="visibility:hidden;">Signup</a>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				
				
					<div class="row nav-menu text-right">
						<div class="col-sm-3 col-md-2 columns">
							<a href="index.php">
								<img class="logo logo-light" alt="Logo" src="img/logo-light.png">
								<img class="logo logo-dark" alt="Logo" src="img/logo-dark.png">
							</a>
						</div>
					
						<?php
							if(empty($_COOKIE['loggedinID']))
							{
								?>
								<div class="col-sm-9 col-md-10 columns">
									<ul class="menu">
										<li class=""><a href="studies.php">Open Studies</a></li>
										<li class=""><a href="signin.php">Start a Study</a></li>
										<li class=""><a href="#footer">Contact</a></li>
									</ul>
								</div>
								<?php
							}
							else
							{
								?>
								<div class="col-sm-9 col-md-10 columns">
									<ul class="menu">
										<li class=""><a href="studies.php">Open Studies</a></li>
										<li class="has-dropdown"><a href="dashboard.php">Dashboard</a>
											<ul class="subnav">
												<li><a href="new-study-hiatus.php">Start a Study</a></li>
											</ul>
										</li>
										<li class="has-dropdown"><a href="#">Account</a>
											<ul class="subnav">
												<li><a href="#">Account Settings</a></li>
												<li><a href="signout.php">Sign Out</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<?php
							}
						?>
					</div><!--end of row-->
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div><!--end of container-->
			</nav>
		</div>
		<div class="main-container">
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/hero13.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="text-white">Create New Study</h1>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="duplicatable-content bg-white" id="time_slots">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>New Study</h1>
						</div>
					</div><!--end of row-->

					<div class="row">
						
						<div class="col-md-9 col-sm-9">
							<div class="feature  feature-icon-large">
								<h5>Creating a new study</h5>
								<p>
									Creating a new study is easy as pie. Fill out the information then click 'Create' and you're done!
								</p>
							</div>


							<form action="/wordpress/processstudy.php" method="post" class="form-contact">
								<div class="photo-form-wrapper-embed clearfix">
									<input type="text" placeholder="Name" name="name" required>
									<input type="text" placeholder="Study Field" name="field" required>
								</div>

								<div class="row">
			                        <div>
			                            <div class="form-wrapper clearfix">
		                                    <div class="inputs-wrapper">
		                                        <textarea class="form-message" name="desc" placeholder="(Optional) Description"></textarea>
		                                    </div>
			                            </div>
			                        </div>
			                	</div><!--end of row-->

			                	<center><input type="submit" class="btn btn-primary btn-filled" value="create study"></center>
							</form>
						</div><!--end 3 col-->
					</div><!--end of row-->
				</div>
			
			</section>
		<div id="footer" class="footer-container">
		
			<footer class="details">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<img alt="logo" class="logo" src="img/logo-dark.png">
							<p>
								TestDesk, the new way to research. Combining intelligent automation and a team with years of research experience to change the way research logistics is done — for the better.
							</p>
						</div>
						
						<div class="col-sm-4">
							<h1>Contact</h1>
							<p>
								The University of Texas at Dallas<br>
								Office of Meta-Research R&amp;D<br>
								<br>
								ECSS 2.410<br>
								University of Texas at Dallas<br>
								800 W. Campbell Rd<br>
								Richardson, TX
							</p>
						</div>
						
						<div class="col-sm-4">
							<h1>TestDesk on Social Media</h1>
							<p>
								Stay in touch with TestDesk on Facebook, Twitter, Instagram, and Tumblr to keep up with the latest tips &amp; tricks to get the most out of your TestDesk experience.<br><br>
							</p>
							<ul class="social-icons">
								<li>
									<a href="http://twitter.com/ut_dallas">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="http://facebook.com/utdallas">
										<i class="icon social_facebook"></i>
									</a>
								</li>
								
								<li>
									<a href="http://instagram.com/ut_dallas">
										<i class="icon social_instagram"></i>
									</a>
								</li>
								
								<li>
									<a href="http://tumblr.com/tagged/ut+dallas">
										<i class="icon social_tumblr"></i>
									</a>
								</li>
							</ul>
						</div>
					</div><!--end of row-->
					
					<div class="row">
						<div class="col-sm-12">
							<span class="sub">© Copright 2014 <a href="#">group.NINE, Inc.</a> All Rights Reserved.</span>
						</div>
					</div>
					
				</div><!--end of container-->
			</footer>
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/bootstrap-timepicker.min.js"></script>
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
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    </body>
</html>
				