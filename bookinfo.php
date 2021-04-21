<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Please login before proceeding further!')</script>";
		header("refresh: 0; url=login.php");
	}
$conn = mysqli_connect("localhost","root","","railway");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$journeyfrom=$_POST['journeyfrom'];
$journeyto=$_POST['journeyto'];
$dod=$_POST['dod'];                      
$trains=$_POST['trains'];
$seat=$_POST['seat'];
$total_seats=$_POST['total_seats'];

$_SESSION['trains']=$trains;
$_SESSION['journeyfrom']=$journeyfrom;
$_SESSION['journeyto']=$journeyto;
$_SESSION['dod']=$dod;
$_SESSION['name']=$name;
$_SESSION['seat']=$seat;
$_SESSION['total_seats']=$total_seats;

$sql ="INSERT INTO journey_info (name,email,age,gender,mobile,address,journeyfrom,journeyto,dod,trains,seat,total_seats)
            VALUES('$name','$email','$age','$gender','$mobile','$address','$journeyfrom','$journeyto','$dod','$trains','$seat','$total_seats')";
            
            if(mysqli_query($conn, $sql))
			{  
				header("location:bookinfo1.php");
        	}
        	else
        	{
        		die("Connection failed: " . mysqli_connect_error());
        	}
 }       	
?>