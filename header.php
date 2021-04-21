<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="style1.css" type="text/css">
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
  *{ font-family: 'Londrina Solid', cursive; font-size: 15px}
	li {
		font-family: sans-serif;
		font-size:18px;
	}
  .dropdown {
	position: relative;
	display: inline-block;
  }
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body >
  <header style="border-top: 5px" class="r-black r-card r-top r-bar">
              <A HREF="start.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">Home</A>
            <a HREF="pnrstatus.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">PNR Status</a>
            <a href="booktkt.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">Book a ticket</a>
            <a href="contact.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">Contact Us</a>
            <?php  
				if(isset($_SESSION['user_info'])){
           echo'<a href="payment.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">Payment Now</a>';
					echo'<a href="ticket.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">View Ticket</a>';
          echo '<a href="logout.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px"> '.$_SESSION['user_info'].'/Logout </a>';
        }
				else
					echo '<A HREF="register.php" class="r-bar-item r-button r-hover-white r-right r-large r-margin-right" style="margin-top: 20px">Login/Register</A>';
				?>
      </header>
			
</body>
</html>