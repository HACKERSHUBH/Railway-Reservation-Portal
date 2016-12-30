
 <?php 
 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $Train_ID=mysqli_real_escape_string($con,$_POST['Train_ID']);
    $Available_Date=mysqli_real_escape_string($con,$_POST['Available_Date']);
    $Booked_seats=mysqli_real_escape_string($con,$_POST['Booked_seats']);
    $Available_seats=mysqli_real_escape_string($con,$_POST['Available_seats']);
    
    
     mysqli_query($con,"INSERT INTO `train_status` (`Train_ID`,`Available_Date`,`Booked_seats`,`Available_seats`) VALUES ('$Train_ID','$Available_Date','$Booked_seats','$Available_seats')") or die(mysql_error());
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
<br />
<h1>RAILWAY RESERVATION PORTAL</h1>
<br />
<br />
<br />
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<img src="../images/rail2.jpg">
<br />
<br />
<br />
	<script>
			function validate_from()
			{
				var x=document.forms["adform"]["Train_ID"].value;
				if(x==null || x=="")
				{
					alert("Enter your Train ID");
					return false;
				}
				x=document.forms["adform"]["Available_Date"].value;
				if(x==null || x=="")
				{
					alert("Enter The available date");
					return false;
				}
				x=document.forms["adform"]["Booked_seats"].value;
				if(x==null || x=="")
				{
					alert("Enter The Booked seats in train");
					return false;
				}
				x=document.forms["adform"]["Available_seats"].value;
				if(x==null || x=="")
				{
					alert("Enter the available seats in train");
					return false;
				}
				
			
			}
		</script>


<form name="adform" action="" onsubmit="return validate_from()" method="post">

<b>Train_ID:<input type="text" name="Train_ID" /></b><br /><br />
<b>Available_Date:<input type="text" name="Available_Date" /></b><br /><br />
<b>Booked_seats:<input type="text" name="Booked_seats" /></b><br /><br />
<b>Available_seats:<input type="text" name="Available_seats" /></b><br /><br />
<a><input type="submit" value="Add" name="submit" /></a><br />
</form>


 </body>
</html> 