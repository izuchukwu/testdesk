<?php
	// Create connection
	$con = mysqli_connect("localhost","root","","wordpress");

	//Delete participant
	$query = 'UPDATE Participants SET status = "Approved" WHERE participantID = '.$_GET['id'];
	$result = mysqli_query($con, $query);
	$query = 'UPDATE Participants SET groupID = '.$_GET['group'].' WHERE participantID = '.$_GET['id'];
	$result = mysqli_query($con, $query);
?>