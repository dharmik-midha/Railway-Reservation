<!DOCTYPE html>
<html lang="en">

<head>
    <title>payment page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body style="background-image: url('img/pay.jpg'); background-size: 100% ;background-repeat: no-repeat;">
<?php
session_start();
include_once('header.php');
include_once('conn.php');

$query="SELECT * FROM journey_info where email=$email";
$result=mysqli_query($mysqli,$query);
?>
                <form action="#" method="post">
               <div class="r-container r-margin-top r-animate-zoom"> <br><br>
                 
                <div class="r-col l2 " style="margin-left: 35%; margin-top: 40px">
	    <div class="r-container  r-card-2 r-white">
		<div class="r-center r-black">
                            <h3>Ticket Holder</h3>
                            </div>
                            <label for="fname"> Full Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="vanshika">
                            <label for="email"> Email</label>
                            <input type="email" id="email" name="email" placeholder="vanshika@gmail.com"> 
                            <label for="adr">Address</label>
                            <input type="text" id="adr" name="address" placeholder="Dwarka">
                            <label for="city"> City</label>
                            <input type="text" id="city" name="city" placeholder="New Delhi">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="Delhi">
                            <label for="zip">Zip</label>
                            <input  style="margin-bottom: 30px" type="text" id="zip" name="zip" placeholder="10095"><br>
                         
                          </div>
                          </div>
                          
                        
                          <div class="r-col l2 " style="margin-left: 30px ;margin-top: 40px;">
	<div class="r-container  r-card-2 r-white" >
		<div class="r-center r-black">
                            <h3>Payment</h3>
</div>
                            <label for="fname">Accepted Cards</label>
                            <label for="cname">Name on Card</label>
                            <input type="text" id="cname" name="cardname" placeholder="Name Of Person On Card ">
                            <label for="ccnum">Credit card number</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Exp Month</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="July">

                            
                                    <label for="expyear">Exp Year</label>
                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                
                                    <label for="cvv">CVV</label>
                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                    <label for="amount">AMOUNT</label>
                                    <input style="margin-bottom: 8px" type="text" id="amount" name="amount" placeholder="Ruppees">                          
                                   
                          </div>
                          </div>
                      </div>
                       
                    <input style="margin-left: 45% " class="r-button r-black r-margin-top" type="submit" value="Continue to checkout" class="btn">
                </form>
          
</body>
</html>