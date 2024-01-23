<?php
	include 'dbconnect.php';
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	date_default_timezone_set('Asia/Kolkata');
    $currentTime = date( 'h:i A, d M Y', time () );
	$sql = "INSERT INTO `anjali_email`( `email`, `name`, `subject`, `message`, `time`) 
	VALUES ('$email','$name','$subject','$message', '$currentTime')";
	if (mysqli_query($conn, $sql)) {
		echo "success";
	} 
	else {
		echo "fail";
	}
	mysqli_close($conn);
?>