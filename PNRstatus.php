<!doctype <!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>



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
			
</body>
</html>