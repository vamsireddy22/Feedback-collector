<?php

$conn = mysqli_connect("localhost", "root", "", "adminlogin") or die ("Failed to connect");
$username = $password  = '';

$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$user = $row["username"];
		$pass = $row["password"];
		session_start();
		$_SESSION['user'] = $user;
		$_SESSION['pass'] = $pass;

		header("location: front.html");
	}
}
else
{
	echo "Invalid username or password";
}
?>