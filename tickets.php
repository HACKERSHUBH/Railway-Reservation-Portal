 <!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="Stylesheet" type="text/css" href="../css/login.css">
</head>
<body class="mainheader">
<br />
<marquee><b><h2>WELCOME TO THE INDIAN RAILWAYS RESERVATION PORTAL</h2></marquee>
<br />
<h1 align="center" color="white">RAILWAY RESERVATION SYSTEM</h1>
<br />
<br />
<br />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src="../images/rail2.jpg">
<br />
<br />
<br />
<br />
<br />


<?php

    require '../dbconnect.php';

	if(isset($_POST['submit']))
	{
		$pname=$_POST['pname'];//passenger name
		$n=$_POST['seat'];//total number of seats passenger wants to book
		$date=$_POST['date'];//date in which passenger want to book a seat
		$number=$_POST['train'];//train number in which passenger want to book a seat
		

     
			$avail=mysqli_query($con,"SELECT * from train_status where Train_ID='$number'");
			$re=mysqli_fetch_array($avail);
			$rem=$re['Available_seats'];// available seats can be seen in the train_status table
			if($rem > $n) //if available seats are greater than the requested seats then booking allotted
			{
				$rem=$rem-$n; //remaining seats after booking
				$random=str_shuffle("012345678901234567892134479147431843782134474582465123412");//for shuffling the string 
				$pnr=substr($random,0,10);// lenghth if 10 will be cut by this substr function
				mysqli_query($con,"UPDATE `train_status` set Available_seats='$rem',Booked_seats='$n' where `Train_ID`='$number' AND `Available_Date`='$date'");
				mysqli_query($con,"INSERT INTO `tickets` (PNR,Passeneger_Name,Train_ID,No_of_seats,Train_status,Booking_date) VALUES ('$pnr','$pname','$number','$n','confirm','$date')");
				echo "<b>" . "Your Request is completed"."</b>"."<br/>";
				echo "<b>" ."You Have booked ".$n." seats" . "</b>". "<br/>";
				echo "<b>" ."PNR :".$pnr."</b>";
				
			}else{
				echo "<b>" ."Unable to book Desired Number of seats"."</b>" ."<br/>";
				echo "<b>" ."Available Seats :".$rem ."</b>";
			}
			
			
		}
//COPYRIGHTS. SHUBHAM SHARMA B.TECH+M.TECH IIITM-GWALIOR
?>
</body>
</html>