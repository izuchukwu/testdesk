
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
        
        <link href="jquery/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery/jquery-ui.structure.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery/jquery-ui.theme.min.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="jquery-timepicker/jquery.timepicker.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet" type="text/css" media="all"/>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!--<script src="js/jquery.min.js"></script>-->
        <script src="jquery/external/jquery/jquery.js"></script>
        <script src="jquery/jquery-ui.min.js"></script>
        <script src="jquery-timepicker/jquery.timepicker.min.js"></script>
        <script src="bootstrap-datepicker/bootstrap-datepicker.js"></script>

        <script>
          $(function() {
            $( "#datepicker" ).datepicker();
          });
        </script>
</head>
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
                                    <a href="signup.html" class="btn btn-primary btn-filled btn-xs" style="visibility:hidden;">Signup</a>
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
                                <li class=""><a href="studies.html">Open Studies</a></li>
                                <li class=""><a href="dashboard.html">Dashboard</a></li>
                                <li class="has-dropdown"><a href="#">Account</a>
                                    <ul class="subnav">
                                        <li><a href="#">Account Settings</a></li>
                                        <li><a href="index.html">Sign Out</a></li>
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
                            <a href="manage-study.html"><span class="text-white alt-font">â¬…ï¸Ž Student Engagement Study</span></a><p></p>
                            <h1 class="text-white">Student Engagement Study - Add Time Slot</h1>
                        </div>
                    </div><!--end of row-->
                </div><!--end of container-->
            </header>
            
            <section class="duplicatable-content bg-white" id="questionnaire">
            
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>New Time Slot</h1>
                        </div>
                    </div><!--end of row-->
        
                    <div class="row">
                        <div class="col-md-2 col-sm-3">
                            <div class="feature feature-icon-large">
                                <i class="icon icon-clock"></i>
                            </div>
                        </div><!--end 3 col-->
                    
                        <div class="col-md-6 col-sm-9">
                            <div class="feature  feature-icon-large">
                                <h5>Adding a New Time Slot</h5>
                                <p>
                                    Creating time slots enable you to provide opportunities for people to participate. Time slots are divided into groups based on how long each experiment session takes. Opportunities to participate are made available based on how many people you select to be in a single session.
                                </p>
                            </div>

                            <div class="photo-form-wrapper-embed clearfix">
                                <input type="text" id="datepicker" placeholder="Date">
                                <input class="form-email start time ui-timepicker-input" id="timepicker" type="text" placeholder="Start Time">
                                <input class="form-email" type="text" placeholder="Duration">
                                <p>
                                    The duration is the full length of the entire time slot from beginning to end.
                                </p><br>
                                <input class="form-email" type="text" placeholder="Session Length">
                                <p>
                                    Sessions are the actual meetings with each participant within a time slot. For a time slot that is 1 hour in duration with 30 minute session lengths, 2 sessions will be held. 
                                </p><br>
                                <input class="form-email" type="text" placeholder="Participants per Session">
                                <p>
                                    The number of participants within each session held in a time slot. For a time slot with 1 hour duration, 30 minute session lengths, and 2 participants per session, 2 30-minute sessions will be held, with 2 participants each, opening the time slot to 4 participants total.
                                </p><br>
                                <div >
                                <input type="submit" class="btn btn-primary btn-filled" value="Add Time Slot">
                            </div>
                            </div>
                            <br>
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
                                TestDesk, the new way to research. Combining intelligent automation and a team with years of research experience to change the way research logistics is done â€” for the better.
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
                            <span class="sub">Â© Copright 2014 <a href="#">group.NINE, Inc.</a> All Rights Reserved.</span>
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
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    </body>
</html>
                