<?php
$con=mysqli_connect("localhost","root","","railway");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();//if databse connection failed
}

?>