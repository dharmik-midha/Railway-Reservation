<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}


$pnr=$_POST['pnr'];
$email=$_SESSION['user_info'];
$subject = "ticket Cancellation";
$body = "Dear Customer, Your Ticket Booking has been Cancelled. ";
$headers = 'refresh:0.5; url=start.php';
$query="DELETE FROM journey_info WHERE email='$email'";
$query.="UPDATE passengers SET t_no=NULL WHERE email='$email';";
	if(mysqli_multi_query($conn, $query))
{  
	
	if (mail($email, $subject, $body, $headers)) {
		$message = "Your Ticket Cancellation has been sent to your email.";
			} 
	
}
	else {
		$message="Cancellation failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";

?>