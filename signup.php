
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Sign Up | TestDesk</title>
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
									<a href="#learn_more" class="btn btn-primary btn-white btn-xs">Learn More</a>
									<a href="#" class="btn btn-primary btn-filled btn-xs">Signup</a>
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
					
						<div class="col-sm-9 col-md-10 columns">
							<ul class="menu">
								<li class=""><a href="studies.php">Open Studies</a></li>
								<li class=""><a href="signin.php">Start a Study</a></li>
								<li class=""><a href="#footer">Contact</a></li>
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
					<img class="background-image" alt="Background Image" src="img/hero/hero1.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2 text-center">
							<h1 class="text-white">Signup is Currently Invite-Only</h1>
							<span class="text-white space-bottom-medium">Unfortunately, signing up to use TestDesk at The University of Texas at Dallas is currently invite-only.<br> If you've been invited, check your email for a link to sign up. If not, enter your UTD NetID below to request an invite. In the mean time, learn a bit more about <a href="#learn_more">what TestDesk can do for you.</a><br/><br/></span>
						</div>
					</div><!--end of row-->

					<div class="row text-center">
						
							<div class="col-sm-12 text-center">
								<div class="photo-form-wrapper clearfix">
									<div class="row">
										<form action="/wordpress/processsignup.php" method="post">
											<div class="col-md-5 col-md-offset-2 col-sm-offset-2 col-sm-4">
												<input class="form-email" type="text" placeholder="Request an invite with your UTD NetID" name="signupID">
											</div>
											
											<div class="col-md-3 col-sm-4">
												<input type="submit" class="btn btn-primary btn-filled" value="Request Invite"></a>
											</div>
										</form>
									</div><!--end of row-->
						
								</div><!--end of photo form wrapper-->

								<?php
									if(isset($_GET['error']))
									{
										if($_GET['error'] == 'badsignup')
										{
											?><span class="text-white"> Please enter your UTD NetID.</span><?php
										}
									}
								?>
							</div>
						
						</div><!--end of row-->
				</div><!--end of container-->
			</header>

			<section id="learn_more" class="feature-selector bg-white">
				<div class="container">
					<div class="row">
						<ul class="selector-tabs clearfix">
							<li class="clearfix text-primary col-md-4 col-sm-6 active">
									<i class="icon icon-target"></i>
									<span>Research Different</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-4 col-sm-6">
									<i class="icon icon-map-pin"></i>
									<span>Everything in One Place</span>
							</li><!--end of tab-->
						
							<li class="clearfix text-primary col-md-4 col-sm-12">
									<i class="icon icon-strategy"></i>
									<span>Get Started</span>
							</li><!--end of tab-->
						</ul>
					</div>
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix active">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Research Without the Mess</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										The current state of research is all over the place.<br/>Your first participant list is in Microsoft Excel, and your second is in Google Sheets. Your first set of results is on OneDrive and the the most recent in a flash drive in the deep depths of your office drawer. And all of this as you just get done manually sending out reminders to participants before their schedule appointments.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										Forget jumping between Microsoft Excel and Google Sheets. Forget losing secure access to your research data when away from your desk. Forget manually keeping track of participants and their eligibility, and manually sending out reminders before their scheduled appointments.<br/>TestDesk changes all of that.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Leading Intuitive Solutions in Research</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Tons of research solutions exist to make the work of learning more about our world easier. However, many provide lackluster solutions to the problems that continue to plague researchers far and wide. Some even make the solution worst. Rather than go off and solve these ourselves, we've listened to you to make the best research solution out there.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										TestDesk rethinks research from the ground up. Automate creating &amp; distributing professionally designed promotional items like emails, newsletters, and flyers for your study with ease. Automatically track participant eligibility and results, and send reminders for upcoming time slots automically. And for participants, signing up is as easy as a click.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Jump In With the New Way to Research</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
							
								<div class="col-sm-12">
									<p class="lead text-center">
										You've heard what TestDesk can do, now see it for yourself. TestDesk is changing the way researchers work worldwide, and now we've partnered with The University of Texas at Dallas to provide TestDesk to all UT Dallas approved researchers free of charge.<br/><a href="#">Start a study</a> to get started and see how TestDesk changes your workflow for the better.
									</p>	
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
						
		
					</ul>
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
				