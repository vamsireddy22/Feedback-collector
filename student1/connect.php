<?php
	
	$servername='localhost';
	$username='root';
	$password="";
	$db="tnpfeedback";
    
    $con= new mysqli($servername,$username,$password,$db);
    
    $name = $_POST['search'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

	$result = mysqli_query($con, "SELECT * FROM feedback WHERE companyname LIKE '%{$name}%'");

	while ($row = mysqli_fetch_array($result))
	{
        echo $row['companyname'] . " " . $row['rounds'] . " " .$row['type'] . " " . $row['details'];
        echo "<br>";	
	}
    
    mysqli_close($con);
 ?>