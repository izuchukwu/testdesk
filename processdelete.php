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

		$result = mysqli_query($con, "DELETE FROM Studies WHERE studyID = ".$_GET['id']);
		//$result = mysqli_query($con, "DELETE * FROM Questionnaires WHERE studyID = '".$_GET['id']."'");
		//$result = mysqli_query($con, "DELETE * FROM ParticipationOpportunities WHERE studyID = '".$_GET['id']."'");
		header('location:http://127.0.0.1:4001/wordpress/dashboard.php');
	}
?>