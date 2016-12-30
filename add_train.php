
 <?php 
 require '../dbconnect.php';

if(isset($_POST['submit']))
{

    $Train_ID=mysqli_real_escape_string($con,$_POST['Train_ID']);
    $Train_name=mysqli_real_escape_string($con,$_POST['Train_name']);
    $Train_type=mysqli_real_escape_string($con,$_POST['Train_type']);
    $Source_stn=mysqli_real_escape_string($con,$_POST['Source_stn']);
    $Destination_stn=mysqli_real_escape_string($con,$_POST['Destination_stn']);
    $Source_ID=mysqli_real_escape_string($con,$_POST['Source_ID']);
    $Destination_ID=mysqli_real_escape_string($con,$_POST['Destination_ID']);
 
    
    
     mysqli_query($con,"INSERT INTO `train` (`Train_ID`,`Train_name`,`Train_type`,`Source_stn`,`Destination_stn`,`Source_ID`,`Destination_ID`) VALUES ('$Train_ID','$Train_name','$Train_type','$Source_stn','$Destination_stn','$Source_ID','$Destination_ID')") or die(mysql_error());
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
				x=document.forms["adform"]["Train_name"].value;
				if(x==null || x=="")
				{
					alert("Enter Train name");
					return false;
				}
				x=document.forms["adform"]["Train_type"].value;
				if(x==null || x=="")
				{
					alert("Enter Train type");
					return false;
				}
				x=document.forms["adform"]["Source_stn"].value;
				if(x==null || x=="")
				{
					alert("Enter Source stn");
					return false;
				}
				x=document.forms["adform"]["Destination_stn"].value;
				if(x==null || x=="")
				{
					alert("Enter Destination stn");
					return false;
				}
				x=document.forms["adform"]["Source_ID"].value;
				if(x==null || x=="")
				{
					alert("Enter Source ID number");
					return false;
				}
				x=document.forms["adform"]["Destination_ID"].value;
				if(x==null || x=="")
				{
					alert("Enter Destination ID");
					return false;
				}
			
			}
		</script>


<form name="adform" action="" onsubmit="return validate_from()" method="post">

<b>Train_ID:<input type="text" name="Train_ID" /></b><br /><br />
<b>Train_name:<input type="text" name="Train_name" /></b><br /><br />
<b>Train_type:<input type="text" name="Train_type" /></b><br /><br />
<b>Source_stn:<input type="text" name="Source_stn" /></b><br /><br />
<b>Destination_stn:<input type="text" name="Destination_stn" /></b><br /><br />
<b>Source_ID:<input type="text" name="Source_ID" /></b><br /><br />
<b>Destination_ID:<input type="text" name="Destination_ID" /></b><br /><br />
<a><input type="submit" value="Add" name="submit" /></a><br />
</form>


 </body>
</html> 