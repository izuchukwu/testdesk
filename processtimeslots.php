<?php
	if(isset($_POST))
	{		
		// Create connection
		$con = mysqli_connect("localhost","root","","wordpress");

		// Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$slashNum = substr_count($_POST["date"],"/");
		if($slashNum != 2)
		{
			header('location:http://127.0.0.1:4001/wordpress/manage-timeslots.php?id='.$_GET['id'].'&error=date#time_slots');
		}
		else if($_POST["startTime"] == "Start Time")
		{
			header('location:http://127.0.0.1:4001/wordpress/manage-timeslots.php?id='.$_GET['id'].'&error=start#time_slots');
		}
		else if($_POST["endTime"] == "End Time")
		{
			header('location:http://127.0.0.1:4001/wordpress/manage-timeslots.php?id='.$_GET['id'].'&error=end#time_slots');
		}
		else
		{
			$startTime = new DateTime($_POST["date"] .' '.$_POST["startTime"] );
			$endTime = new DateTime($_POST["date"] .' '.$_POST["endTime"] );
			$prevTime = clone $startTime;

			$temp = new DateInterval('PT'.$_POST['slotLength'].'M');

			$count = 0;
			while($startTime->add($temp) <= $endTime)
			{
				//Add Row to ParticipationOpportunities
				$query = 'INSERT INTO
					ParticipationOpportunities (studyID, date, startTime, endTime, participantMax)
					VALUES ('.$_GET['id'].', "'.$_POST["date"].'","'.$prevTime->format('H:i').'","'.$startTime->format('H:i').'",'.$_POST["participantNum"].')';
				//echo $query.'<br>';
				mysqli_query($con,$query);
				$prevTime = clone $startTime;
				$count++;
			}

			header('location:http://127.0.0.1:4001/wordpress/manage-study.php?id='.$_GET['id'].'&num='.(string)$count.'#time_slots');
		}

		//Close
		mysqli_close($con);
	}
?>