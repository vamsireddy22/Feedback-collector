<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password) or die("Not connected");
if(!mysqli_select_db($conn,'ADMIN'))
{
	echo "no databse fund";
}
//reading data through html form
$roll=$_POST['roll'];
$company=$_POST['company'];

//inserting data into database
$sql="UPDATE data set COMPANY_NAME= '$company' WHERE ROLL_NUMBER='$roll';";
if(!mysqli_query($conn,$sql))
{
	$message = "DATA IS NOT UPDATED";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "1 STUDENT DATA UPDATE SUCCESSFULL";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
header("Location:gohome.html");
?>