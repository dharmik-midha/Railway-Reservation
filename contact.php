<!DOCTYPE html>
<html>
<head>
	<title>Contact Details</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">

</head>
<body style="background-image: url('img/feedback.jpg'); background-size: 100%">
	<form action="contact1.php" method="post">
        <div style="text-align:center ;margin-top:6%" >
       <h2>Contact Us</h2>

       <p>happy journey with us thank you , or leave us a message:</p>
		<?php session_start(); include_once('header.php');?>
		 <div class="r-container " style=" ;margin-top: 5%">
		<div class="r-col m6 ">	
	   <div class="r-container r-card-2 ">
			<div  style="background-image: url('img/city1.gif'); background-size:100% ; background-position: center; ">
				<br>
		<label class="r-large r-grey"> NAME:</label>
		
		<input class="r-opacity-min"type="text" name="name"  placeholder="Name">

		<br><br>
		<label class="r-large r-grey">EMAIL:</label>
		
		<input class="r-opacity-min" type="Email" name="email" placeholder="Email" >
		<br><br>
		
		<label class="r-large r-grey">FEEDBACK:</label><br>
		<textarea class="r-opacity-min" rows="5" cols="30" name="message" placeholder="Write Something..."></textarea>
		<br>
		<br>
</div>

		</div>
	</div>
</div>
</div>

	<footer class="r-margin-top" style="margin-left: 22%">
		<button  class="r-button r-large r-red" type="submit" name="submitbtn">SUBMIT</button>
		</footer>


		<div class="r-container ">
	<div class="  r-bottom  r-col l12 r-center  r-large r-text-white" style=' font-family: "Lucida Console", "Courier New", monospace;'>
		<p class="r-button r-white r-hover-white r-opacity-min">Custmor Care Number <br>
		call on : 139 </p>
     
	</div>
	</div> 
		

	</form>

</body>
</html>



