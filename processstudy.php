<?php
	if(isset($_POST))
	{		
		// Create connection
		$con = mysqli_connect("localhost","root","","wordpress");

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$result = mysqli_query($con, "SELECT * FROM Users WHERE utdID = '".$_COOKIE['loggedinID']."'");
		$user = mysqli_fetch_array($result);

		$query = 'INSERT INTO
			Studies (userID, studyName, studyField, studyDescription, groupNum)
			VALUES ("'.$user['userID'].'", "'.$_POST["name"].'","'.$_POST["field"].'","'.$_POST["desc"].'","'.$_POST['groups'].'")';
		//echo $query.'<br>';
		mysqli_query($con,$query);

		header('location:http://127.0.0.1:4001/wordpress/dashboard.php');

		//Close
		mysqli_close($con);
	}
?>