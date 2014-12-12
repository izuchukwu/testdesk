
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        
        <title>Open Study Directory | TestDesk</title>
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

			$result = mysqli_query($con, "SELECT * FROM Studies");
		?>
		<div class="nav-container">
			<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<a href="http://utdallas.edu/"><span class="alt-font">The University of Texas at Dallas</span></a>
								<?php
									if(empty($_COOKIE['loggedinID']))
									{
										?>
										<div class="pull-right">
											<a href="#learn_more" class="btn btn-primary btn-white btn-xs">Learn More</a>
											<a href="signup.php" class="btn btn-primary btn-filled btn-xs">Signup</a>
										</div>
										<?php
									}
									else
									{
										?>
										<div class="pull-right">
											<a href="#learn_more" class="btn btn-primary btn-white btn-xs" style="visibility:hidden">Learn More</a>
											<a href="signup.php" class="btn btn-primary btn-filled btn-xs" style="visibility:hidden">Signup</a>
										</div>
										<?php
									}
								?>
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
			<header class="signup">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="img/hero/hero2.jpg">
				</div>
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="icons-large-white">
								<li><i class="icon icon-piechart icon-large"></i></li>
								<li><i class="icon icon-genius icon-large"></i></li>
								<li><i class="icon icon-pencil icon-large"></i></li>
							</ul>
							<h1 class="text-white">The University of Texas at Dallas Open Study Directory</h1>
							<span class="text-white space-bottom-medium">The big, bad list of every study currently open for participation at The University of Texas at Dallas.<br>Note that individual studies may have restrictions on participation. Details about eligibility for individual studies are available by clicking 'Learn More'.<br/><br/></span>
						</div>
					</div><!--end of row-->
					<div class="row text-center">
						
							<div class="col-sm-12 text-center">
								<div class="photo-form-wrapper clearfix">
									<div class="row">
										<div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3">
											<a href="#studies"><input type="submit" class="btn btn-primary btn-filled" value="Find a Study"></a>
										</div>
										<div class="col-md-3 col-sm-3">
											<a href="signin.php"><input type="submit" class="btn btn-primary btn-filled" value="Start a Study"></a>
										</div>
									</div><!--end of row-->
						
								</div><!--end of photo form wrapper-->
								
							</div>
						
						</div><!--end of row-->

				</div><!--end of container-->
			</header>

			<section class="blog-masonry bg-muted" id="studies">

				<div class="row">
						<div class="col-sm-12 text-center">
							<h1>Open Studies at The University of Texas at Dallas</h1>
						</div>
					</div><!--end of row-->
			
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<ul class="blog-filters">
								<li data-filter="*" class="active">All</li>
								<li data-filter=".atec">Arts &amp; Technology</li>
								<li data-filter=".eng">Engineering</li>
								<li data-filter=".psych">Psychology</li>
								<!--li data-filter=".admin">University Administration</li-->
							</ul>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
				<div class="container">
					<div class="row">
						<div class="blog-masonry-container">
							
							<?php
								while($row = mysqli_fetch_array($result))
								{
									$type = '<div class="col-md-4 col-sm-6 blog-masonry-item ';
									if($row['studyField'] == 'ARTS & TECHNOLOGY')
										$type = $type.'atec ';
									if($row['studyField'] == 'BIOMEDICAL ENGINEERING')
										$type = $type.'eng ';
									if($row['studyField'] == 'PSYCHOLOGY')
										$type = $type.'psych ';
									$type = $type.'">';
									$learnMoreLink = '<a href="/wordpress/study.php?id='.$row['studyID'].'" class="link-text">Learn More</a>'
									?>
									<?php echo $type;?>
										<div class="item-inner">
											<a href="/wordpress/study.php?id=<?php echo $row['studyID'];?>">
												<img alt="Study" src="img/blog-masonry-<?php echo 1;?>.jpg">
											</a>
											<div class="post-title">
												<span class="sub alt-font"><?php echo $row['studyField'];?></span><br>
												<a href="/wordpress/study.php?id=<?php echo $row['studyID'];?>"><h2><?php echo $row['studyName'];?></h2></a>
												<p>
													<?php echo $row['studyDescription'];?>
												</p>
												<?php echo $learnMoreLink;?>
											</div>
										</div>
									</div>
									<?php
								}
							?>
						
						</div><!--end of blog masonry container-->
					</div><!--end of row-->
				</div><!--end of container-->
			
		
				
			</section>

			<section class="side-image clearfix bg-white" id="learn_more">
				
				<div class="container">
					<div class="row">
						<div class="col-md-6 content col-sm-8 clearfix">
							<h1>Is your study not on TestDesk? Make your life easier in no time, for free.</h1>
		
							<ul class="blog-snippet-2">
								<li>
									<div class="icon">
										<i class="icon icon-pencil"></i>
									</div>
									<div class="title">
										<a href="/wordpress/signup.php">Forget the status quo. Research differently, without the mess.</a>
										<span class="sub">Forget jumping between Microsoft Excel and Google Sheets. Forget losing secure access to your research data when away from your desk. Forget manually keeping track of participants and manually sending out reminders before appointments. TestDesk changes all of that.</span>
									</div>
								</li>
								
								<li>
									<div class="icon">
										<i class="icon icon-calendar"></i>
									</div>
									<div class="title">
										<a href="/wordpress/signup.php">All your documents, results, and participants in one place.</a>
										<span class="sub">TestDesk rethinks research from the ground up. Automate creating &amp; distributing professionally designed promotional items like emails, newsletters, and flyers for your study with ease. Automatically track participant eligibility and results, and send reminders for upcoming time slots automically. And for participants, signing up is as easy as a click.</span>
									</div>
								</li>
								
								<li>
									<div class="icon">
										<i class="icon icon-newspaper"></i>
									</div>
									<div class="title">
										<a href="/wordpress/signup.php">Get started, and change the way you research for the better.</a>
										<span class="sub">You've heard what TestDesk can do, now see it for yourself. TestDesk is changing the way researchers work worldwide, and now we've partnered with The University of Texas at Dallas to provide TestDesk to all UT Dallas approved researchers free of charge. Start a study to get started and see how TestDesk changes your workflow for the better. <a href="signin.php">Start a study</a></span>
									</div>
								</li>
							</ul>	
							
							</div><!--end of row-->
					
						
					</div><!--end of container-->
				</div>
				
				<div class="image-container col-md-5 col-sm-3 pull-right">
					<div class="background-image-holder">
						<img class="background-image" alt="Background Image" src="img/hero/hero1.jpg">
					</div>
				</div>
				
			</section>

			<section class="strip bg-secondary-1">
				<div class="container">
					<div class="row clearfix">
						<div class="col-sm-6 col-xs-12 pull-left">
							<h3 class="text-white"><strong>Change the way you research.</strong> Join the research revolution.</h3>
						</div>
						
						<div class="col-sm-4 col-xs-12 pull-right text-right">
							<a href="signup.php" class="btn btn-primary btn-white">Sign Up</a>
						</div>
					</div>
				</div>
			</section>

			<section class="clients-2 bg-white">
				<div class="container">
					<div class="row">
						
						<div class="col-md-2 col-md-offset-3 col-sm-4">
							<a href="http://utdallas.edu"><img alt="Client Logo" src="img/client01.png"></a>
						</div>
						
						<div class="col-md-2 col-sm-4">
							<a href="http://ecs.utdallas.edu"><img alt="Client Logo" src="img/client02.2.png"></a>
						</div>
						
						<div class="col-md-2 col-sm-4">
							<a href="http://qualtrics.com"><img alt="Client Logo" src="img/client03.png"></a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
		</div>
		
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
				