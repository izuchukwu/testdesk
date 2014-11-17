
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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/theme-blues.css" rel="stylesheet" type="text/css" media="all"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
        	function set_link ()
        	{
        		var linkToUpdate = $("#link").val();
        		var encodedUrl = encodeURIComponent(linkToUpdate);
        		$.ajax("updateLink.php?link="+linkToUpdate+"&id="+getUrlParameter('id'));
        		$("#linkSet").fadeIn("slow");
        		setTimeout(fade_out, 5000);
        	}
        	function fade_out ()
        	{
        		$("#linkSet").fadeOut("slow");
        	}
        	function remove_timeslot()
        	{
        		$("#timeslot1").fadeOut("slow");
        	}
        	function actually_remove_timeslot()
        	{

        	}
        </script>
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
					
						<div class="col-sm-9 col-md-10 columns">
							<ul class="menu">
								<li class=""><a href="studies.php">Open Studies</a></li>
								<li class="has-dropdown"><a href="dashboard.php">Dashboard</a>
									<ul class="subnav">
										<li><a href="#">Start a Study</a></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Account</a>
									<ul class="subnav">
										<li><a href="#">Account Settings</a></li>
										<li><a href="index.php">Sign Out</a></li>
									</ul>
								</li>
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
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/hero13.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a href="dashboard.php"><span class="text-white alt-font">⬅︎ Active Studies</span></a><p></p>
							<h1 class="text-white">Student Engagement Study</h1>
							<p class="text-white lead">A study in the engagement of the student population<br>in campus activities and events. </p><br>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center">
								<ul class="nav-links text-white">
									<a href="#time_slots">Time Slots</a>
									<a href="#questionnaire">Questionnaire</a>
									<a href="#participation">Participation</a>
								</ul>
							</div>
						</div><!--end of row-->
					</div><!--end of container-->
			</header>
			
			<section class="duplicatable-content" id="time_slots">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Time Slots</h1>
						</div>
					</div><!--end of row-->
					<div class="row">
								<div id="timeslot1" class="col-md-3 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-clock"></i>
										</div>
										<div class="feature-text">
											<h6>2:30 PM, Tues, Dec. 2</h6>
											<p>
												2 Groups Available<br>
												1 Participant per Group<br>
												1/2 Participants filled<br>
												<a href="#time_slot" onclick="remove_timeslot()">Remove Time Slot</a>
											</p>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-3 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-clock"></i>
										</div>
										<div class="feature-text">
											<h6>2:30 PM, Thurs, Dec. 4</h6>
											<p>
												2 Groups Available<br>
												1 Participant per Group<br>
												1/2 Participants filled<br>
												<a href="#">Remove Time Slot</a>
											</p>
										</div>
									</div>
								</div><!--end of feature-->

								<div class="col-md-3 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="icon-holder">
											<i class="icon icon-clock"></i>
										</div>
										<div class="feature-text">
											<h6>4:30 PM, Thurs, Dec. 4</h6>
											<p>
												2 Groups Available<br>
												1 Participant per Group<br>
												1/2 Participants filled<br>
												<a href="#">Remove Time Slot</a> 
											</p>
										</div>
									</div>
								</div><!--end of feature-->

							</div><!--end of row-->
							<div class="col-md-9 col-sm-9">
								<p>
									Creating time slots enable you to provide opportunities for people to participate.
									Time slots are divided into groups based on how long each experiment session takes.
									Opportunities to participate are made available based on how many people you select to be in a single session.
								</p><br>
								<input type="submit" class="btn btn-primary btn-filled" value="Add Time Slot">

							</div>
				</div>
			</section>
			
			<section class="duplicatable-content" id="questionnaire">
			
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Questionnaire</h1>
						</div>
					</div><!--end of row-->
		
					<div class="row">
						<div class="col-md-2 col-sm-3">
							<div class="feature feature-icon-large">
								<i class="icon icon-notebook"></i>
							</div>
						</div><!--end 3 col-->
					
						<div class="col-md-6 col-sm-9">
							<div class="feature  feature-icon-large">
								<h5>Edit Questionnaire Link</h5>
								<p>
									If you would like to include a questionnaire, set one up with <a href="http://qualtrics.com" target="#">Qualtrics</a> or<br>another form
									provider of your choice and enter the link below.<br>If you'd prefer not to have one, simply leave the field blank.
								</p>
							</div>

							<div class="photo-form-wrapper-embed clearfix">
								<input id="link" class="form-email" type="text" placeholder="Questionnaire Link">
							</div>
							
							<div >
								<input type="submit" class="btn btn-primary btn-filled" onclick="set_link()" value="Set Link">
							</div>

							<div >
								<br><h4 id="linkSet" style="color:#6bb434;display:none">Link Updated</h4>
							</div>
							<br>
						</div><!--end 3 col-->
					</div><!--end of row-->
				</div>
			
			</section>
			
			<section class="team-2" id="participation">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h1>Participation</h1>
						</div>
					</div><!--end of row-->

					<div class="row">
						<div class="col-md-1 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>ID</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-3 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>Name</h6>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<h6>NetID</h6>
										</div>
									</div>
								</div><!--end of feature-->						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<h6>Year</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<h6>Approval</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<h6>Actions</h6>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->


							<div class="row">
						<div class="col-md-1 no-pad-left">
									<div class="">
										<div class="feature-text">
											<p>001</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-3 no-pad-left">
									<div class="">
										<div class="feature-text">
											<p>Cody Farris</p>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>cxf111000</p>
										</div>
									</div>
								</div><!--end of feature-->						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>Junior I think</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>Pending</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-1 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p><a href="#">Contact</a></p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-1 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p><a href="#">Remove</a></p>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->


							<div class="row">
						<div class="col-md-1 no-pad-left">
									<div class="">
										<div class="feature-text">
											<p>002</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-3 no-pad-left">
									<div class="">
										<div class="feature-text">
											<p>Clay Howell</p>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>cxh210310</p>
										</div>
									</div>
								</div><!--end of feature-->						
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>hs sophomore</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-2 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p>nope</p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-1 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p><a href="#">Contact</a></p>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-1 no-pad-left">
									<div class="feature feature-icon-left">
										<div class="feature-text">
											<p><a href="#">Remove</a></p>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->
					
				</div><!--end of container-->
			</section>

			<section class="text-banner bg-white" id="featured">
				<div class="container text-center">
					
					<div class="row">
						
					<div class="col-sm-12">
							<ul class="icons-large">
								<li><i class="icon icon-hazardous icon-large" style="color:#ff0000"></i></li>
							</ul>
							<h1 class="center-block vis">Delete Study<br></h1>
							<p>
									Permanently delete your study. Think twice. Please note that this cannot be undone.<br>Upon clicking the button below, an email confirmation for deletion will be emailed to you. Follow the link to complete the deletion.
								</p><br>
							<div >
								<a href="signup-requested.php"><input type="submit" class="btn btn-primary btn-filled" style="background-color:#ff0000; border-color:#ff0000" value="Delete Study"></a>
							</div>
						</div></div>
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
				