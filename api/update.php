<?php
//update.php
//getting or fetching the two values and saving it in the database
include("connection.php");
$temperature = $_GET['temperature'];
$humidity = $_GET['humidity'];

if($temperature!="" && $humidity!= "") //this means that some value has to be fetched
{
	$query = " UPDATE monitoring SET temperature='$temperature',humidity='$humidity' "; 
	//update table name set column1,column2 as variables
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo "data successfully inserted in database";
	}
	else
	{
		echo "data not inserted in database"
	}
	
}
else
{
	echo "no values or parameters";
}


?>
