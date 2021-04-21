<?php
$conn = mysqli_connect("localhost","root","","railway");
//check
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submitbtn']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comment=$_POST['message'];


	$query="INSERT INTO contact_details( name,email,comment) VALUES('$name','$email','$comment');"; 

	if(mysqli_query($conn,$query))
	{echo"<script type='text/javascript'> alert('feedback recorded'); window.location.href='start.php'; </script>" ;
	}
	else
	{
		echo"not performed";
	}
	
}