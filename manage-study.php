
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
        	function set_link ()
        	{
        		var linkToUpdate = $("#link").val();
        		var encodedUrl = encodeURIComponent(linkToUpdate);
        		$.ajax("updateLink.php?link="+linkToUpdate+"&id="+getUrlParameter('id'));
        		$("#linkSet").fadeIn("slow");
        		setTimeout(fade_out, 3000);
        		location.reload();
        	}
        	function approve_p(id)
        	{
        		var str = $("#group"+id).val();
        		var getnum = str.substring(5);
        		console.log("approveParticipant.php?id="+id+"&group="+getnum);
        		$.ajax("approveParticipant.php?id="+id+"&group="+getnum);
        		location.reload();
        	}
        	function remove_p(id)
        	{
        		$("#part"+id).fadeOut("slow");
        		$.ajax("removeParticipant.php?remove="+id);
        	}
        	function fade_out ()
        	{
        		$("#linkSet").fadeOut("slow");
        	}
        	function remove_timeslot(number)
        	{
        		$("#timeslot"+number).fadeOut("slow");
        		$.ajax("removeTimeSlot.php?remove="+number);
        	}
        	$(function()
			{
				if(getUrlParameter('num') != null)
				{
					document.getElementById("added").innerHTML = getUrlParameter('num')+" New Time Slots Created";
					setTimeout(fade_update, 5000);
				}
			});
			function fade_update()
			{
				$("#added").fadeOut("slow");
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

			$result = mysqli_query($con, "SELECT * FROM Questionnaires WHERE studyID = ".$_GET['id']);
			$question = mysqli_fetch_array($result);

			$result = mysqli_query($con, "SELECT * FROM Questionnaires WHERE studyID = ".$_GET['id']);

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
							<a href="dashboard.php"><span class="text-white alt-font">Active Studies</span></a><p></p>
							<h1 class="text-white"><?php echo $study['studyName'];?></h1>
							<p class="text-white lead"><?php echo $study['studyDescription'];?></p><br>
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
						<div class="col-md-2 col-sm-3">
							<h1>Time Slots</h1>
						</div>
						<div class="col-md-10 col-sm-9">
							<h1 id="added" style="color:#6bb434;"></h1>
						</div>
					</div><!--end of row-->
					<div class="row">
								
						<?php
							while($slot = mysqli_fetch_array($timeSlots))
							{
								$participants = mysqli_query($con, "SELECT * FROM Participants WHERE participationOpportunityID = ".$slot['participationOpportunityID']);
								$signedUp = 0;
								while($check = mysqli_fetch_array($participants))
									$signedUp++;
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
												<a href="#time_slot" onclick="remove_timeslot(<?php echo $slot[participationOpportunityID];?>)">Remove Time Slot</a>
											</p>
										</div>
									</div>
								</div><!--end of feature-->
								<?php
							}
						?>

					</div><!--end of row-->
					<div class="col-md-9 col-sm-9">
						<p>
							Creating time slots enable you to provide opportunities for people to participate in your studies.
							Add multiple time slots easily by selecting a time period that you're free and slicing it up into time slots.
							Opportunities to participate are made available based on how many people you select to be in each time slot.
						</p><br>
						<a href="/wordpress/manage-timeslots?id=<?php echo $_GET['id']?>">
							<input type="submit" class="btn btn-primary btn-filled" value="Add Time Slot">
						</a>
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
							</div>

							<div class="photo-form-wrapper-embed clearfix">
								<?php
								if($row = mysqli_fetch_array($result))
								{
									?>
									<input id="link" class="form-email" type="text" placeholder="Questionnaire Link" value="<?php echo $row['link'];?>">
									<?php
								}
								else
								{
									?>
									<input id="link" class="form-email" type="text" placeholder="Questionnaire Link">
									<?php
								}
								?>
							</div>
							
							<div class="row">
								<p>
									Set the link first then click 'Preview' to make sure you're using the correct link.
								</p>
								<div class="col-md-3 col-sm-3">
									<input type="submit" class="btn btn-primary btn-filled" onclick="set_link()" value="Set Link">
								</div>
								<div class="col-md-1 col-sm-1"/>
								<div class="col-md-3 col-sm-3">
									<a href="http://<?php echo $question['link'] ?>" target="_blank"><input type="submit" class="btn btn-primary btn-filled" value="Preview"></a>
								</div>

								<div class="col-md-4 col-sm-4">
									<center>
									<br><h4 class="linkUpdated" id="linkSet" style="color:#6bb434;display:none">Link Updated</h4>
									</center>
								</div>
							</div>
							<br>
						</div><!--end 3 col-->
					</div><!--end of row-->
				</div>
			
			</section>
			
			<section class="team-2">
				<div class="container" id="participation">
					<div class="row">
						<div class="col-sm-12">
							<h1>Participation</h1>
						</div>
					</div><!--end of row-->

					<!-- PENDING -->
					<div class="row">
						<div class="no-pad-left">
							<div class="feature-text">
								<h6>Pending</h6>
							</div>
						</div><!--end of feature-->
					</div>

					<div class="row">
						<div class="col-md-1 col-sm-1 no-pad-left">
							<div class="">
								<div class="feature-text">
									<h6>ID</h6>
								</div>
							</div>
						</div><!--end of feature-->
						<div class="col-md-3 col-sm-3 no-pad-left">
							<div class="">
								<div class="feature-text">
									<h6>Name</h6>
								</div>
							</div>
						</div><!--end of feature-->
				
						<div class="col-md-2 col-sm-2 no-pad-left">
							<div class="">
								<div class="feature-text">
									<h6>NetID</h6>
								</div>
							</div>
						</div><!--end of feature-->						
						<div class="col-md-2 col-sm-2 no-pad-left">
							<div class="">
								<div class="feature-text">
									<h6>Status</h6>
								</div>
							</div>
						</div><!--end of feature-->
						<div class="col-md-2 col-sm-2 no-pad-left">
							<div class="">
								<div class="feature-text">
									<h6>Actions</h6>
								</div>
							</div>
						</div><!--end of feature-->
					</div><!--end of row-->

					<?php
						$studies = mysqli_query($con, "SELECT * FROM Studies WHERE studyID = ".$_GET['id']);
						$theStudy = mysqli_fetch_array($studies);
						$result = mysqli_query($con, "SELECT * FROM ParticipationOpportunities WHERE studyID = ".$_GET['id']);
						while($pos = mysqli_fetch_array($result))
						{
							$ps = mysqli_query($con, "SELECT * FROM Participants WHERE participationOpportunityID = ".$pos['participationOpportunityID']." and groupID = 0");
							while($p = mysqli_fetch_array($ps))
							{
								?>
								<div class="row" id="part<?php echo $p['participantID'];?>">
									<div class="col-md-1 col-sm-1 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><?php echo $p['participantID']?></p>
											</div>
										</div>
									</div><!--end of feature-->
									<div class="col-md-3 col-sm-3 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><?php echo $p['firstName']." ".$p['lastName']?></p>
											</div>
										</div>
									</div><!--end of feature-->
							
									<div class="col-md-2 col-sm-2 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><?php echo $p['netID']?></p>
											</div>
										</div>
									</div><!--end of feature-->						
									<div class="col-md-2 col-sm-2 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><?php echo $p['status']?></p>
											</div>
										</div>
									</div><!--end of feature-->
									<div class="col-md-2 col-sm-2 no-pad-left">
										<select id="group<?php echo $p['participantID'];?>">
											<?php
											for($i = 1; $i <= $theStudy['groupNum']; $i++)
											{
												?>
												<option value="group<?php echo $i?>">Group <?php echo $i?></option>
												<?php
											}
											?>
										</select>
									</div><!--end of feature-->
									<div class="col-md-1 col-sm-1 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><a href="#participation" onclick="approve_p(<?php echo $p['participantID']?>)">Approve</a></p>
											</div>
										</div>
									</div><!--end of feature-->
									<div class="col-md-1 col-sm-1 no-pad-left">
										<div class="">
											<div class="feature-text">
												<p><a href="#participation" onclick="remove_p(<?php echo $p['participantID']?>)">Reject</a></p>
											</div>
										</div>
									</div><!--end of feature-->
								</div><!--end of row-->
								<?php
							}
						}
					?>

					<?php
						for($a = 1; $a <= $theStudy['groupNum']; $a++)
						{
							$result = mysqli_query($con, "SELECT * FROM ParticipationOpportunities WHERE studyID = ".$_GET['id']);
							?>
							<br>
							<!-- Group # -->
							<div class="row">
								<div class="no-pad-left">
									<div class="feature-text">
										<h6>Group <?php echo $a?></h6>
									</div>
								</div><!--end of feature-->
							</div>

							<div class="row">
								<div class="col-md-1 col-sm-1 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>ID</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-3 col-sm-3 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>Name</h6>
										</div>
									</div>
								</div><!--end of feature-->
						
								<div class="col-md-2 col-sm-2 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>NetID</h6>
										</div>
									</div>
								</div><!--end of feature-->						
								<div class="col-md-2 col-sm-2 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>Status</h6>
										</div>
									</div>
								</div><!--end of feature-->
								<div class="col-md-2 col-sm-2 no-pad-left">
									<div class="">
										<div class="feature-text">
											<h6>Actions</h6>
										</div>
									</div>
								</div><!--end of feature-->
							</div><!--end of row-->

							<?php

							while($pos = mysqli_fetch_array($result))
							{
								$ps = mysqli_query($con, "SELECT * FROM Participants WHERE participationOpportunityID = ".$pos['participationOpportunityID']." and groupID = ".$a);
								while($p = mysqli_fetch_array($ps))
								{
									?>
									<div class="row" id="part<?php echo $p['participantID'];?>">
										<div class="col-md-1 col-sm-1 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><?php echo $p['participantID']?></p>
												</div>
											</div>
										</div><!--end of feature-->
										<div class="col-md-3 col-sm-3 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><?php echo $p['firstName']." ".$p['lastName']?></p>
												</div>
											</div>
										</div><!--end of feature-->
								
										<div class="col-md-2 col-sm-2 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><?php echo $p['netID']?></p>
												</div>
											</div>
										</div><!--end of feature-->						
										<div class="col-md-2 col-sm-2 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><?php echo $p['status']?></p>
												</div>
											</div>
										</div><!--end of feature-->
										<div class="col-md-2 col-sm-2 no-pad-left">
											<select id="group<?php echo $p['participantID'];?>">
												<?php
												$studies = mysqli_query($con, "SELECT * FROM Studies WHERE studyID = ".$_GET['id']);
												$theStudy = mysqli_fetch_array($studies);
												for($i = 1; $i <= $theStudy['groupNum']; $i++)
												{
													?>
													<option value="group<?php echo $i?>">Group <?php echo $i?></option>
													<?php
												}
												?>
											</select>
										</div><!--end of feature-->
										<div class="col-md-1 col-sm-1 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><a href="#participation" onclick="approve_p(<?php echo $p['participantID']?>)">Approve</a></p>
												</div>
											</div>
										</div><!--end of feature-->
										<div class="col-md-1 col-sm-1 no-pad-left">
											<div class="">
												<div class="feature-text">
													<p><a href="#participation" onclick="remove_p(<?php echo $p['participantID']?>)">Reject</a></p>
												</div>
											</div>
										</div><!--end of feature-->
									</div><!--end of row-->
									<?php
								}
							}
						}
					?>


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
								<a href="delete-study.php?id=<?php echo $_GET['id']?>"><input type="submit" class="btn btn-primary btn-filled" style="background-color:#ff0000; border-color:#ff0000" value="Delete Study"></a>
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
    </body>
</html>
				