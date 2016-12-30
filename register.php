


 <?php 
 require '../dbconnect.php';
 
if(isset($_POST['submit']))
{

    $EmailID=mysqli_real_escape_string($con,$_POST['EmailID']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    $Fullname=mysqli_real_escape_string($con,$_POST['Fullname']);
    $Gender=mysqli_real_escape_string($con,$_POST['Gender']);
    $Age=mysqli_real_escape_string($con,$_POST['Age']);
    $Mobile=mysqli_real_escape_string($con,$_POST['Mobile']);
    $City=mysqli_real_escape_string($con,$_POST['City']);
    $State=mysqli_real_escape_string($con,$_POST['State']);
    
    
     mysqli_query($con,"INSERT INTO `user_table` (`EmailID`,`Password`,`Fullname`,`Gender`,`Age`,`Mobile`,`City`,`State`) VALUES ('$EmailID','$Password','$Fullname','$Gender','$Age','$Mobile','$City','$State')") or die(mysql_error());
     
       header("location:../index.php");
	   
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
<br />
<br />
<br />
		<script>
			function validate_from()//validate form in javascript,for validation information of user
			{
				var x=document.forms["adform"]["EmailID"].value;
				if(x==null || x=="")
				{
					alert("Enter your EmailID");
					return false;
				}
				x=document.forms["adform"]["Password"].value;
				if(x==null || x=="")
				{
					alert("Enter Password");
					return false;
				}
				x=document.forms["adform"]["Fullname"].value;
				if(x==null || x=="")
				{
					alert("Enter Fullname");
					return false;
				}
				x=document.forms["adform"]["Gender"].value;
				if(x==null || x=="")
				{
					alert("Enter Gender");
					return false;
				}
				x=document.forms["adform"]["Age"].value;
				if(x==null || x=="")
				{
					alert("Enter Age");
					return false;
				}
				x=document.forms["adform"]["Mobile"].value;
				if(x==null || x=="")
				{
					alert("Enter Mobile number");
					return false;
				}
				x=document.forms["adform"]["City"].value;
				if(x==null || x=="")
				{
					alert("Enter City");
					return false;
				}
				x=document.forms["adform"]["State"].value;
				if(x==null || x=="")
				{
					alert("Enter State");
					return false;
				}
			}
		</script>

<?php
		if(isset($_SESSION['sid'])){
	 
	echo'YOU ARE SUCCESSFULLY LOGGEDIN';}
		else{
			echo'YOU SHOULD HAVE TO LOGIN/REGISTER FIRST';
			//want to use the newline character in php7...
	}
	?>
	
<form name="adform" action="" onsubmit="return validate_from()" method="post">
<br/>
<b>EmailID:<input type="text" name="EmailID" /></b><br /><br />
<b>Password:<input type="Password" name="Password" /></b><br /><br />
<b>Fullname:<input type="text" name="Fullname" /></b><br /><br />
<b>Gender:<input type="text" name="Gender" /></b><br /><br />
<b>Age:<input type="text" name="Age" /></b><br /><br />
<b>Mobile:<input type="text" name="Mobile" /></b><br /><br />
<b>City:<input type="text" name="City" /></b><br /><br />
<b>State:<input type="text" name="State" /></b><br /><br />

<a><input type="submit" value="Register" name="submit" /></a>
<a href="login.php">Already registered?Login here</a>
</form>


 </body>
</html> 