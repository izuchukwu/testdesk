<?php
	// Create connection
	$con = mysqli_connect("localhost","root","","wordpress");

	//Delete participant
	$query = 'DELETE FROM Participants WHERE participantID = '.$_GET['remove'];
	$result = mysqli_query($con, $query);
?>