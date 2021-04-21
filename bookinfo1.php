<?php
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}

$trains=$_SESSION['trains'];
$sql= "SELECT t_no FROM trains WHERE t_name = '$trains'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$journeyfrom=$_SESSION['journeyfrom'];
$journeyto=$_SESSION['journeyto'];
$dod=$_SESSION['dod'];
$name=$_SESSION['name'];
$seat=$_SESSION['seat'];
$total_seats=$_SESSION['total_seats'];
/*mail*/ 
$subject = "ticket Confirmation";
$body = "Dear $name, Thank you for using IRCTC's online rail reservation facility. Your e-ticket has been booked and the details are indicated below.
	Your Ticket for Train No. $row[t_no] is Confirmed from $journeyfrom to $journeyto dated $dod and you have booked $total_seats tickets for $seat .
	Your PNR NO. is 1234567890 to check your ticket ";
$headers = 'refresh:0.5; url=payment.php';


$query="UPDATE passengers SET t_no='$row[t_no]' WHERE email='$email';";
	if(mysqli_query($conn, $query))
{  
	
	if (mail($email, $subject, $body, $headers)) {
		echo "<script type='text/javascript'>alert('Ticket booked successfully and Confirmation has been sent to your email address');;
		    window.location.href ='payment.php'; </script>";
		}
	
}
	else {
		$message="Transaction failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";

?>