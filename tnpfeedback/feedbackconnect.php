<?php

//xampp server details
$servername = "localhost";
$username = "root";
$password = "";

//create connection
$conn = new mysqli($servername, $username, $password) or die("Not connected");
if($conn)
{
	echo "connected";
	echo "<br>";
}
if(!mysqli_select_db($conn,'tnpfeedback'))
{
	echo "Database not found";
	echo "<br>";
}

//reading data through html form
$com_name=$_POST['name'];
$round=$_POST['rounds'];
$screening = $_POST['experience'];
$details=$_POST['comments'];

//inserting data into database
$sql="INSERT INTO feedback(companyname,rounds,type,details) values('$com_name','$round','$screening','$details')";
if(!mysqli_query($conn,$sql))
{
	$message = "Your feedback is not recorder";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "Thanks for submitting feedback";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
header("Location:gohome.php");
?>