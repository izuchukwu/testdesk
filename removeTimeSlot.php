<?php
	// Create connection
	$con = mysqli_connect("localhost","root","","wordpress");

	//Delete previous Questionnaire Row
	$query = 'DELETE FROM ParticipationOpportunities WHERE participationOpportunityID = '.$_GET['remove'];
	$result = mysqli_query($con, $query);
?>