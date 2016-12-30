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
if(isset($_SESSION['sid'])){
	 
	echo'YOU ARE SUCCESSFULLY LOGGEDIN';}
		else{
			echo'YOU SHOULD HAVE TO LOGIN/REGISTER FIRST. PLEASE REFRESH THE PAGE';
			//want to use the newline character in php7...
	}
	
	
if(isset($_POST['submit']))
{

    $EmailID=mysqli_real_escape_string($con,$_POST['EmailID']);
    $Password=mysqli_real_escape_string($con,$_POST['Password']);
    
    $sql=mysqli_query($con,"SELECT * FROM `user_table` WHERE `EmailID`='$EmailID' AND `Password`='$Password'");
    if(mysqli_num_rows($sql) > 0){
    	session_start();
	$_SESSION['sid']=session_id();//used for setting up the session
	header("location:userhome.php");//after successful login,this will be sent to userhome.php
}
else {
// if conditions are not met,remain in login page
?>
<script>alert('You Have Entered The Wrong Details');</script>
<?php
}
 
    }
 else
 {
$form = <<<EOT
<form method="post" action="login.php"><br><br> 
  <b>EmailID: <input type="text" name="EmailID" color="white" placeholder="Your Email" required ></b>
   <br><br>
   <b>Password: <input type="password" name="Password" color="white" placeholder="Your Password" required ></b>
   <br><br>
  <a> <input type="submit" name="submit" value="Submit"></a>
  <a href="register.php">Not Registered?Register Here</a>
</form>
EOT;

echo $form;
}
?>
</body>
</html> 