
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Dashboard | TestDesk</title>
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
		<?php
			// Create connection
			$con = mysqli_connect("localhost","root","","wordpress");

			// Check connection
			if (mysqli_connect_errno())
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			$result = mysqli_query($con, "SELECT * FROM Users WHERE utdID = '".$_COOKIE['loggedinID']."'");
			$user = mysqli_fetch_array($result);

			$userStudies = mysqli_query($con, "SELECT * FROM Studies WHERE userID = '".$user['userID']."'");

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
						<div class="col-md-6 col-sm-12">
							<span class="text-white alt-font">Welcome Back, <?php echo $user['name']?></span>
							<h1 class="text-white">Dashboard</h1>
						</div>

						<div class="col-md-6 col-sm-12">
							<?php
								if($userStudies->num_rows == 1)
								{
									?>
									<h1 class="text-white pull-right">1 Active Study<br></h1>
									<?php
								}
								else
								{
									?>
									<h1 class="text-white pull-right"><?php echo $userStudies->num_rows;?> Active Studies<br></h1>
									<?php
								}
							?>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</header>
			
			<section class="blog-masonry bg-muted">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h1>Active Studies</h1><br>
					</div>
				</div><!--end of row-->
				
				<div class="container">
					<div class="row">
						<div class="blog-masonry-container">
						
							<?php
								while($row = mysqli_fetch_array($userStudies))
								{
									$timeSlots = mysqli_query($con, "SELECT * FROM ParticipationOpportunities WHERE studyID = '".$row['studyID']."'");
									$count = 0;
									while($slot = mysqli_fetch_array($timeSlots))
									{
										$count += intval($slot['numParticipants']);
									}
									?>
									<div class="col-md-4 col-sm-6 blog-masonry-item branding">
										<div class="item-inner">
											<a href="/wordpress/manage-study.php?id=<?php echo $row['studyID'];?>">
												<img alt="Blog Preview" src="img/blog-masonry-1.jpg">
											</a>
											<div class="post-title">
												<span class="sub alt-font"><?php echo $row['studyField'];?></span><br>
												<a href="/wordpress/manage-study.php?id=<?php echo $row['studyID'];?>"><h2><?php echo $row['studyName'];?></h2></a>
												<p>
													<?php echo $row['studyDescription'];?>
													<br><br><a href="/wordpress/manage-study.php?id=<?php echo $row['studyID'];?>#questionnaire">Add or Edit Questionnaires</a>
													<br><a href="/wordpress/manage-study.php?id=<?php echo $row['studyID'];?>#time_slots">Add or Edit Time Slots</a>
												</p>
												<div class="post-meta">
													<span class="sub alt-font"><?php echo $count;?> Participants</span>
												</div>
												<div class="row">
													<a href="/wordpress/manage-study.php?id=<?php echo $row['studyID'];?>" class="link-text">View/Edit Study</a>
												</div>
											</div>
										</div>
									</div><!--end of individual post-->
									<?php
								}
							?>
							
							<div class="col-md-4 col-sm-6 blog-masonry-item development">
								<a href="new-study-hiatus.php"><div class="item-inner">
									<div class="post-title">
										<div class="feature feature-icon-large">
											<i class="icon icon-lightbulb"></i>
										</div>
										<h2>Start a New Study</h2>
										<p>
											Click here to get started on a new study. You take care of the research, we'll take care of the rest.
										</p>
									</div>
								</div></a>
							</div><!--end of individual post-->
						
						</div><!--end of blog masonry container-->
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		
		<div id="footer" class="footer-container">
		
			<footer class="details bg-white">
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
				