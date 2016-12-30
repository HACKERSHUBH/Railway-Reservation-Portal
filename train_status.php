 <!DOCTYPE HTML> 
<html>
<head>
<style>
      table,th,tr,td{
        border:1px solid;
        padding:10px;
        border-collapse:collapse;
      }
      th{
        background-color:#abdec2;
      }
      tr{
        background-color:#decab1;
      }
      td{
        text-align:center;
      }
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

    $Train_ID=mysqli_real_escape_string($con,$_POST['Train_ID']);
    $Available_Date=mysqli_real_escape_string($con,$_POST['Available_Date']);

    $sql=mysqli_query($con,"SELECT * FROM `Train_status` WHERE `Train_ID`='$Train_ID' AND `Available_Date`='$Available_Date'");
    echo "<table border='1'>
    <tr>
<b><th>Train_ID</th></b>
<b><th>Journey Date</th></b>
<b><th>Booked Seats</th></b>
<b><th>Available Seats</th></b>
</tr>";

while($row = mysqli_fetch_array($sql)) {
  echo "<tr>";
  echo "<b><td>" . $row['Train_ID'] . "</td></b>";
  echo "<b><td>" . $row['Available_Date'] . "</td></b>";
  echo "<b><td>" . $row['Booked_seats'] . "</td></b>";
  echo "<b><td>" . $row['Available_seats'] . "</td></b>";
  echo "</tr>";
}

echo "</table>";

 
 }
 else{

$form = <<<EOT
<form action="train_status.php" method="POST">

<b>Train Number:<input type="text" name="Train_ID" /><br /></b><br />
<b>Journey Date:<input type="text" name="Available_Date" /><br /></b></b><br />
<a><input type="submit" value="submit" name="submit" /></a>
</form>
EOT;

echo $form;
 

}
 
?> 
</body>
</style>
</head>