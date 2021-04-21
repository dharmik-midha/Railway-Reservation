<?php 
session_start();
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$pnr=$_POST['pnr'];
$sql = "SELECT t_status FROM tickets WHERE PNR= '$pnr'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
	if($row==NULL)	echo "<script type='text/javascript'>alert('PNR not found');</script>";
	else echo "<script type='text/javascript'>alert('Your status is ' +'$row[t_status]');</script>";	
}
if (isset($_POST['cancel']))
{

$pnr=$_POST['pnr'];
$email=$_SESSION['user_info'];
$subject = "ticket Cancellation";
$body = "Dear Customer, Your Ticket Booking has been Cancelled. ";
$headers = 'refresh:0.5; url=start.php';
$query="DELETE FROM journey_info WHERE email='$email';";
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
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PNR Status</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<link rel="stylesheet" href="style1.css" type="text/css">
	<style type="text/css">
		#pnr	{
			font-size: 20px;
			background-color: white;
			width: 500px;
			height: 350px;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue; 
			margin: auto;
  			position: absolute;
  			left: 0; 
  			right: 0;
  			padding-top: 40px;
  			padding-bottom:20px;
  			margin-top: 130px;
 
		}
		html { 
		  background: url(img/back.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#pnrtext	{
			padding-top: 20px;
		}
	</style>
</head>
<body>
<?php
include("header.php"); ?>
<center>
	<div id="pnr" class="r-modal-content r-black r-opacity-min r-card-4 r-animate-zoom" >Check your PNR status here:<br/><br/>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
	<div id="pnrtext"><input type="text" name="pnr" size="30" maxlength="10" placeholder="Enter PNR here"></div>
	<br/><br/>
	<input type="submit" name="submit" value="Check here!" class="button" id="submit"><br/><br/>
	<?php  
		if(isset($_SESSION['user_info'])){
			echo '<form action="pnrstatus.php" method="post"><input type="submit" class="button" value="Cancel your ticket!" name="cancel" id="cancel"/></form>';
        }
		else
			echo '<A HREF="register.php" class="r-button r-black r-hover white">Login/Register</A>';
		?>
	</form>
	</div>
</center>
</body>
</html>