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
<h1>RAILWAY RESERVATION PORTAL</h1>
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
		$pnr=$_POST['pnr'];
		
            // passenger want to cancel the booked ticket 
     
			$result=mysqli_query($con,"SELECT * from tickets where PNR='$pnr'");// for getting the seats which passenger had booked
			$re=mysqli_fetch_array($result);
			$seats=$re['No_of_seats'];//using pnr number we can get all the information regarding ticket which the passenger had booked
			$date=$re['Booking_date'];
			$Train_ID=$re['Train_ID'];
			$result2=mysqli_query($con,"SELECT * from train_status where Train_ID='$Train_ID' and Available_Date='$date'");
				$re2=mysqli_fetch_array($result2);
				$avail=$re2['Available_seats'];
				$booked=$re2['Booked_seats'];
				$avail=$avail+$seats;
				$booked=$booked-$seats;
				mysqli_query($con,"UPDATE `train_status` set Available_seats='$avail',Booked_seats='$booked' where `Train_ID`='$Train_ID' AND `Available_Date`='$date'");
				mysqli_query($con,"DELETE from tickets where PNR='$pnr'");
				echo "<b>" ."Your Request is completed"."</b>"."<br/>";
				echo "<b>"."You Have cancelled the seats" ."</b>"."<br/>";
				
			}else{
				echo "<b>"."Unable to cancel"."</b>"."<br/>";
			}
			
			
	

?>
</body>
</html>