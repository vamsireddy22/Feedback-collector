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
}
if(!mysqli_select_db($conn,'ADMIN'))
{
	echo "no databse fund";
}

//reading data through html form
$name=$_POST['name'];
$roll=$_POST['roll'];
$branch=$_POST['branch'];
$mail=$_POST['mail'];
$mobile=$_POST['mobile'];
$cgpa=$_POST['cgpa'];
$company=$_POST['company'];

//inserting data into database
$sql="INSERT INTO data(NAME,ROLL_NUMBER,BRANCH,MAIL_ID,PHONE_NUMBER,CGPA,COMPANY_NAME) values('$name','$roll','$branch','$mail','$mobile','$cgpa','$company')";
if(!mysqli_query($conn,$sql))
{
	$message = "STUDENT IS NOT ADDED TO DATABASE";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo "<br>";
}
else
{
	$message = "1 STUDENT ADDED TO DATABASE";
	echo "<script type='text/javascript'>alert('$message');</script>";
}
header("Location:gohome.html");
?>