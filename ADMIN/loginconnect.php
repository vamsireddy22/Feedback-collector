<?php

// Grab User submitted information
$user = $_POST["user"];
$pass = $_POST["pass"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("adminlogin");

$result = mysql_query("select * from login where USERNAME='$user' AND PASSWORD='$pass'");

$row = mysql_fetch_array($result);

if($row["USERNAME"]==$email && $row["PASSWORD"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>