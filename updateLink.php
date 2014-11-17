<?php
	// Create connection
	$con = mysqli_connect("localhost","root","","wordpress");

	//Delete previous Questionnaire Row
	$query = 'DELETE FROM Questionnaires WHERE studyID = '.$_GET['id'];
	$result = mysqli_query($con, $query);

	//Add Row to Questionnaire
	mysqli_query($con,'INSERT INTO
		Questionnaires (studyID, link)
		VALUES ('.$_GET['id'].', "'.urldecode($_GET['link']).'")');
?>