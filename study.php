
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Study | TestDesk</title>
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
        <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        	function getUrlParameter(sParam)
			{
			    var sPageURL = window.location.search.substring(1);
			    var sURLVariables = sPageURL.split('&');
			    for (var i = 0; i < sURLVariables.length; i++) 
			    {
			        var sParameterName = sURLVariables[i].split('=');
			        if (sParameterName[0] == sParam) 
			        {
			            return sParameterName[1];
			        }
			    }
			}    
        	$(function()
			{
				if(getUrlParameter('success') == 'true')
				{
					document.getElementById("signedup").innerHTML = "Successfully Signed Up";
					var win = window.open('http://www.google.com', '_blank');
  					win.focus();
					//setTimeout(fade_update, 5000);
				}
			});
			function fade_update()
			{
				$("#signedup").fadeOut("slow");
			}
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

			$result = mysqli_query($con, "SELECT * FROM Studies WHERE studyID = ".$_GET['id']);
			$study = mysqli_fetch_array($result);

			$result = mysqli_query($con, "SELECT * FROM Users WHERE userID = ".$study['userID']);
			$user = mysqli_fetch_array($result);

			$timeSlots = mysqli_query($con, "SELECT * FROM ParticipationOpportunities WHERE studyID = ".$_GET['id']." ORDER BY date, startTime");
    	?>
		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<a href="http://utdallas.edu/"><span class="alt-font">The University of Texas at Dallas</span></a>
							
								<div class="pull-right">
									<a href="index.php#learn_more" class="btn btn-primary btn-white btn-xs">Learn More</a>
									<a href="signup.php" class="btn btn-primary btn-filled btn-xs">Signup</a>
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
			<header class="title" style="height: 365px">
					<div class="background-image-holder parallax-background">
						<img class="background-image" alt="Background Image" src="img/hero10.jpg">
					</div>
					
					<div class="container align-bottom" style="padding-top: 200px !important">
						<div class="row">
							<div class="col-xs-12">
								<h1 class="text-white"><?php echo $study['studyName'];?></h1>
								<span class="sub alt-font text-white"><?php echo $study['studyField'];?></span>
							</div>
						</div><!--end of row-->
					</div><!--end of container-->
			</header>
			
			<section class="article-single">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Details</h1>
						</div>
					</div><!--end of row-->
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="author-details no-pad-top">
								<img alt="Author" src="img/ppl/marky.png">
								<br>
								<h5><?php echo $user['name'];?></h5>
								<p>Senior Lecturer</p>
								<ul class="social-icons">
								<li>
									<a href="http://twitter.com/utdallas">
										<i class="icon social_twitter"></i>
									</a>
								</li>
								
								<li>
									<a href="http://utdallas.edu">
										<i class="icon icon_link_alt"></i>
									</a>
								</li>
							</ul>
							</div>
						</div>
									
						<div class="col-sm-8">
							<div class="article-body">
								<p class="lead">
									<?php echo $study['studyDescription'];?> 
								</p>
							
								<p>
									Participation will last 25 minutes and will involve interacting with a variety of mobile device platforms with varying paradigms and workflows.
								</p>
								<p>
									Participation is voluntary and compensation will be in the form of one (1) $25 Amazon Gift Card. Due to the form of the mobile devices, participants cannot wear glasses during the study. If you wear glasses, don’t, wear contacts.
								</p>
								<p>
									If interested, <strong><a href="/wordpress/study.php?id=<?php echo $study['studyID'];?>#time_slots">click here</a></strong> to sign up for a time slot.
								</p>
							</div><!--end of article body-->
						</div>
					</div><!--end of row-->
				</div><!--end of container-->	
			</section>

			<section class="" id="time_slots">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-5">
							<h1>Open Time Slots</h1>
						</div>
						<div class="col-md-9 col-sm-7">
							<h1 id="signedup" style="color:#6bb434;"></h1>
						</div>
					</div><!--end of row-->
					<form action="/wordpress/processparticipate.php?id=<?php echo $_GET['id'];?>" method="post">
						<div class="photo-form-wrapper-embed clearfix" class="clearfix">
								<div class="col-md-4 col-sm-4">
									<input class="form-email" type="text" placeholder="First Name" name="firstName" required>
								</div>
					
								<div class="col-md-4 col-sm-4">
									<input class="form-password" type="text" placeholder="Last Name" name="lastName" required>
								</div>

								<div class="col-md-4 col-sm-4">
									<input class="form-password" type="text" placeholder="Net ID" name="netID" required>
								</div>
						</div>

						<?php
							while($slot = mysqli_fetch_array($timeSlots))
							{
								$participants = mysqli_query($con, "SELECT * FROM Participants WHERE participationOpportunityID = ".$slot['participationOpportunityID']);
								$signedUp = 0;
								while($check = mysqli_fetch_array($participants))
									$signedUp++;
								if($signedUp < $slot['participantMax'])
								{
									?>
									<div id="timeslot<?php echo $slot['participationOpportunityID'];?>" class="col-md-3 no-pad-left">
										<div class="feature feature-icon-left">
											<div class="icon-holder">
												<i class="icon icon-clock"></i>
											</div>
											<div class="feature-text">
												<h6><?php echo $slot['startTime']." - ".$slot['endTime'];?>, 
													<?php
														$date = new DateTime($slot['date']);
														echo $date->format('D M. j'); //Tues Dec. 2
													?></h6>
												<p>
													<?php echo $signedUp;?>/<?php echo $slot['participantMax'];?> Participants filled<br>
													<button type="submit" class="btn btn-primary btn-filled" name="timeSlotID" value="<?php echo $slot['participationOpportunityID']?>">Sign Up</button>
												</p>
											</div>
										</div>
									</div><!--end of feature-->
									<?php
								}
							}
						?>
					</form>
				</div><!--end of container-->	
			</section>
		</div>

		<div id="footer" class="footer-container">
		
			<footer class="details bg-grey">
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
				