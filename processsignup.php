<?php
	if(isset($_POST))
	{
		if(empty($_POST['signupID']))
		{
			header('location:http://127.0.0.1:4001/wordpress/signup.php?error=badsignup');
		}
		else
		{
			header('location:http://127.0.0.1:4001/wordpress/signup-requested.php');
		}
	}
?>