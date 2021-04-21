<?php 
session_start();
$email=$_SESSION['user_info'];
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Please login before proceeding further!');window.location.href ='start.php';</script>";
	}
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<style>
		body
		{
			
			font-size: 11pt;
			background-size: cover;
			background-attachment: fixed;
		}
		#back
		{
			
			bottom:0
		}
		table , th, td
		{
			/*border:1px solid black;*/
			border-collapse: collapse;
			opacity: 0.95;
		}

		th, td
		{
			padding: 10px;
			text-align: center;
		}
		html { 
		background: url(img/back.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}

		th
		{
			/*background-color: #a70000;*/
			background-color: black;
			color: white;
		}

		tr:nth-child(even)
		{
			background-color: #e8e8e8;
		}

		tr:nth-child(odd)
		{
			background-color: white;
		}

		#header
		{
			background-color: black;
			color: white;
			padding: 2px;


		}
	</style>
</head>
<body style="font-family: sans-serif;">
<div></div>
 <table align="center" style="width: 80%; margin-top: 50px; margin-bottom: 50px; border-radius: 10px;">
 	<tr>
 		<td id="header" colspan="12"><a href="start.php"><h3><b>Ticket's Confirmed</b></h3></a></td>
 	</tr>

 	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Journey From</th>
		<th>Journey To</th>
		<th>Date Of Departure</th>
		<th>Trains</th>
		<th>Seats</th>
		<th>No. of Seats</th>
	</tr>
	<tr>
			<?php
				include("conn.php");
				$result=mysqli_query($conn,"SELECT * FROM journey_info where email='$_SESSION[user_info]'");
				while ($res=mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td>".$res['name']."</td>";
						echo "<td>".$res['email']."</td>";
						echo "<td>".$res['age']."</td>";
						echo "<td>".$res['gender']."</td>";
						echo "<td>".$res['mobile']."</td>";
						echo "<td>".$res['address']."</td>";
						echo "<td>".$res['journeyfrom']."</td>";
						echo "<td>".$res['journeyto']."</td>";
						echo "<td>".$res['dod']."</td>";
						echo "<td>".$res['trains']."</td>";
						echo "<td>".$res['seat']."</td>";
						echo "<td>".$res['total_seats']."</td>";
						echo "</tr>";
				}
					
			?>
	</tr>
</table>
</body>
<footer class="r-black r-card r-bottom r-bar "><a href="start.php"><button class="r-bar-item r-button r-right r-hover-white r-large " style="margin-right: 50%">Back</button></a></footer>
</html>
