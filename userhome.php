<!DOCTYPE html>
<html>
<head>
<title>INDIAN RAILWAYS</title>
<link rel="Stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<br />
<br />
<marquee><b><h2>WELCOME TO THE INDIAN RAILWAYS RESERVATION PORTAL</h2></marquee>
<br />
<h1 align="center" color="white">RAILWAY RESERVATION SYSTEM</h1>
<br />
<br />
<br />
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <img src="../images/rail2.jpg" align="center">

  
  <header class="mainheader">
<nav>
<ul>

<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
        echo "<a href='train_status.php'>Train Status</a><br />";
        echo "<a href='view_schedule.php'>View Schedule</a><br />";
        echo "<a href='trains_between_stations.php'>Trains between stations</a><br />"; 
        echo "<a href='book.php'>Booking</a><br />";  
        echo "<a href='PNR.php'>PNR Status</a><br />"; 
        echo "<a href='cancel.php'>Cancel</a><br />"; 
		echo "<a href='logout.php?logout'>Logout</a><br />";

	}
	else
	{
		header("location:login.php");
	}
?>


</nav>
</header>  
</body>
</html>
