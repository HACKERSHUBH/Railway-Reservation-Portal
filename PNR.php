
<?php

	require '../dbconnect.php';

	if(isset($_POST['submit']))
	{
		$pnr=$_POST['pnr'];
		$query1=mysqli_query($con,"select * from tickets where PNR='$pnr'");
		$result=mysqli_fetch_array($query1);
		$Train_ID=$result['Train_ID'];
		if(empty($Train_ID))
		{
			echo "Invalid PNR number";
		}
		else
		{
			$msg="ok";
		}
		
	}
?>
<!DOCTYPE html>
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
		<form action="" method="post" onsubmit="return validate()" name="myform">
			<b>PNR number:<input type="text" name="pnr"/></b><br /><br />
			<a><input type="submit" name="submit" value="submit"></a>
			
		</form>
		<?php
			if(isset($msg))
			{
				$query2=mysqli_query($con,"select * from train where Train_ID='$Train_ID'");
		$result2=mysqli_fetch_array($query2);
		$number=$result['Train_ID'];
		$query3=mysqli_query($con,"select * from train where Train_ID='$number'");
		$result3=mysqli_fetch_array($query3);
		echo "Status of Your Ticket";
		?>
			<table>
				<tr>
					<th>PNR</th>
					<th>Passenger Name</th>
					<th>source</th>
					<th>Destination</th>
					<th>Train</th>
					<th>No of seats</th>
					<th>status</th>
				</tr>
				<tr>
					<td><?php echo $pnr;?></td>
					<td><?php echo $result['Passeneger_Name'];?></td>
					<td><?php echo $result2['Source_stn'];?></td>
					<td><?php echo $result2['Destination_stn'];?></td>
					<td><?php echo $result2['Train_name'];?></td>
					<td><?php echo $result['No_of_seats']?></td>
					<td><?php echo $result['Train_status']?></td>
				</tr>
			</table>
		<?php
			}
		?>
	</body>
</html>
