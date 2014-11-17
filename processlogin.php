<?php
	if(isset($_POST))
	{		
		// Create connection
		$con = mysqli_connect("localhost","root","","wordpress");

		// Check connection
		if (mysqli_connect_errno())
		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con, "SELECT * FROM Users WHERE utdID = '".$_POST['utdID']."'");

		if($row = mysqli_fetch_array($result))
		{
			if($_POST['password'] == $row['password'])
			{
				setcookie('loggedinID',$_POST['utdID'],false);
				header('location:http://127.0.0.1:4001/wordpress/studies.php');
			}
			else
			{
				header('location:http://127.0.0.1:4001/wordpress/index.php?error=badpassword');
			}
		}
		else
		{
			header('location:http://127.0.0.1:4001/wordpress/index.php?error=badusername');
		}
	}
?>