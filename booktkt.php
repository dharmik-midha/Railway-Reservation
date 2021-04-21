<?php 
session_start();
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
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<link rel="stylesheet" href="style1.css" type="text/css">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 100px;
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			padding-right: 50px;
			background-color: rgba(0,0,0,0.3);
			border-radius: 25px;
		}
		html { 
		  background: url(img/back.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			margin-left: 17px;
			font-size: 20px;
		}
		#seats	{
			margin-left: 20px;
			font-size: 20px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 40px;
			margin-top: 30px
		}
	</style>
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Please select your train");
				trains.focus();
				return false;		
			}
		}
	</script>
</head>
<body>
	<?php
		include ('header.php');
	?>
	<div id="booktkt" class="r-modal-content r-card-4 r-animate-zoom" >
	<h1 align="center" id="journeytext">Choose your journey</h1><br/><br/>
	<form method="post" name="journeyform" onsubmit="return validate()" action="bookinfo.php">
		          <div class="r-section">
              <label class="r-text-white"><b>Full Name</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter your name" name="name" required>

              
              <label class="r-text-white"><b>Email</b></label>
              <input class="r-input r-border r-margin-bottom" type="email" placeholder="Enter your Email" name="email" required>


              <label class="r-text-white"><b>Age</b></label>
              <input class="r-input r-border r-margin-bottom" type="age" name="age" placeholder="Enter Your Age" 
              required>

              <label class="r-text-white"><b>Gender</b></label>
              <select name="gender" class="r-input r-border r-margin-bottom">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

              <label class="r-text-white"><b>Mobile No.</b></label>
              <input class="r-input r-border r-margin-bottom" type="Mobile" placeholder="Enter your Mobile Number" name="mobile" required>

              <label class="r-text-white"><b>Address</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter your address" name="address" required>

              <label class="r-text-white"><b>Journey From</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter Journey From" name="journeyfrom" required>

              <label class="r-text-white"><b>Journey To</b></label>
              <input class="r-input r-border r-margin-bottom" type="text" placeholder="Enter Journey To" name="journeyto" required>

               <label class="r-text-white"><b>Date To Departure </b></label>
              <input class="r-input r-border r-margin-bottom" type="date" name="dod" min="30-03-2021" required>

              <select id="trains" name="trains" required>
			<option selected disabled>---------------------Select trains here------------------------</option>
			<option value="rajdhani" >Rajdhani Express - Mumbai Central to Delhi</option>
			<option value="duronto" >Duronto Express - Mumbai Central to Ernakulum</option>
			<option value="geetanjali">Geetanjali Express - CST to Kolkata</option>
			<option value="garibrath" >Garib Rath - Udaipur to Jammu Tawi</option>
			<option value="mysoreexp" >Mysore Express - Talguppa to Mysore Jn</option>
		</select><br><br>
			<select id="seats" name="seat" required>
				<option selected disabled>--------------Select Your Seat-----------------</option>
				<option value="AC First Class (1A)" >AC First Class (1A)</option>
				<option value="AC First Class (LHB) (1A)" >AC First Class (LHB) (1A)</option>
				<option value="Executive Chair Car (EC)" >Executive Chair Car (EC)</option>
				<option value="Executive Chair Car (LHB) (EC)" >Executive Chair Car (LHB) (EC)</option>
				<option value="First Class (Non-AC) (FC)" >First Class (Non-AC) (FC)</option>
				<option value="AC 2 Tier (2A)" >AC 2 Tier (2A)</option>
				<option value="AC 2 Tier (LHB) (2A)" >AC 2 Tier (LHB) (2A)</option>
				<option value="AC 3 Tier (3A)" >AC 3 Tier (3A)</option>
				<option value="AC 3 Tier (Garib Rath) (3A)" >AC 3 Tier (Garib Rath) (3A)</option>
				<option value="AC 3 Tier (LHB) (3A)" >AC 3 Tier (LHB) (3A)</option>
				<option value="AC First Class cum AC 2 Tier (1A + 2A)" >AC First Class cum AC 2 Tier (1A + 2A)</option>
				<option value="AC First Class cum AC 3 Tier (1A + 3A)" >AC First Class cum AC 3 Tier (1A + 3A)</option>
				<option value="AC 2 Tier cum AC 3 Tier (2A + 3A)" >AC 2 Tier cum AC 3 Tier (2A + 3A)</option>
				<option value="AC Chair Car (Type-1) (CC)" >AC Chair Car (Type-1) (CC)</option>
				<option value="AC Chair Car (Type-2) (CC)" >AC Chair Car (Type-2) (CC)</option>
				<option value="AC Chair Car (Garib Rath) (CC)" >AC Chair Car (Garib Rath) (CC)</option>
				<option value="AC Chair Car (LHB) (CC)" >AC Chair Car (LHB) (CC)</option>
				<option value="AC Chair Car (Double Decker) (CC)" >AC Chair Car (Double Decker) (CC)</option>
				<option value="Sleeper Class (SL)" >Sleeper Class (SL)</option>
				<option value="Sleeper Class (LHB) (SL)" >Sleeper Class (LHB) (SL)</option>
				<option value="Second Seating (2S)" >Second Seating (2S)</option>
				<option value="Second Seating (Jan-Shatabdi) (2S)" >Second Seating (Jan-Shatabdi) (2S)</option>
				<option value="Second Seating (LHB) (2S)" >Second Seating (LHB) (2S)</option>
			</select>
			
			<select name="total_seats" style=" margin-left:11px; width: 50px ;height: 29px;" required>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
			</select>



		<br/><br/>

		<input type="submit" name="submit" id="submit" class="button" />
	</form>
	s



	</div>
	</body>
	</html>