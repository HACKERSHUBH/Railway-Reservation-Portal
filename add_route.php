
 <?php 
 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $Train_ID=mysqli_real_escape_string($con,$_POST['Train_ID']);
    $stop_number=mysqli_real_escape_string($con,$_POST['stop_number']);
    $Station_ID=mysqli_real_escape_string($con,$_POST['Station_ID']);
    $Arrival_time=mysqli_real_escape_string($con,$_POST['Arrival_time']);
    $Departure_time=mysqli_real_escape_string($con,$_POST['Departure_time']);
 
    
    
     mysqli_query($con,"INSERT INTO `route` (`Train_ID`,`stop_number`,`Station_ID`,`Arrival_time`,`Departure_time`) VALUES ('$Train_ID','$stop_number','$Station_ID','$Arrival_time','$Departure_time')") or die(mysql_error());
     mysqli_query($con,"INSERT INTO `route_has_station` (`Train_ID`,`Station_ID`,`stop_number`) VALUES ('$Train_ID','$Station_ID','$stop_number')") or die(mysql_error());

     header("location:adminhome.php");
} 

?>
<!DOCTYPE html>
<html>
	<head>
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
<br />		<script>
			function validate_from()
			{
				var x=document.forms["adform"]["Train_ID"].value;
				if(x==null || x=="")
				{
					alert("Enter your Train ID");
					return false;
				}
				x=document.forms["adform"]["stop_number"].value;
				if(x==null || x=="")
				{
					alert("Enter stop number");
					return false;
				}
				x=document.forms["adform"]["Station_ID"].value;
				if(x==null || x=="")
				{
					alert("Enter Station ID");
					return false;
				}
				x=document.forms["adform"]["Arrival_time"].value;
				if(x==null || x=="")
				{
					alert("Enter Arrival time");
					return false;
				}
				x=document.forms["adform"]["Departure_time"].value;
				if(x==null || x=="")
				{
					alert("Enter Departure time");
					return false;
				}
				x=document.forms["adform"]["Source ID"].value;
				if(x==null || x=="")
				{
					alert("Enter Source ID number");
					return false;
				}
				
			
			}
		</script>


<form name="adform" action="" onsubmit="return validate_from()" method="post">

<b>Train_ID:<input type="text" name="Train_ID" /></b><br /><br />
<b>stop_number:<input type="text" name="stop_number" /></b><br /><br />
<b>Station_ID:<input type="text" name="Station_ID" /></b><br /><br />
<b>Arrival_time:<input type="text" name="Arrival_time" /></b><br /><br />
<b>Departure_time:<input type="text" name="Departure_time" /></b><br /><br />
<a><input type="submit" value="Add" name="submit" /></a>
</form>


 </body>
</html> 